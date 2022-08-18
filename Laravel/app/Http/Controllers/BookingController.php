<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\konsultasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleCalenderController;

use App\Models\jadwalPsikolog;

class BookingController extends Controller
{

    public function index(){
        $role = Auth::user()->role;

        $booking = konsultasi::where('status', $role)->get();

        // rubah client_id menjadi username sesuai id
        foreach($booking as $book){
            $book->client_id = User::where('id', $book->client_id)->first();
            $book->psikolog_id = User::where('id', $book->psikolog_id)->first();
        }

        // return $booking;
        if($role == 'psikolog'){
            return view('psikolog.booking.index-psikolog-booking', compact('booking'));
        }elseif($role == 'admin'){
            return view('admin.booking.index-admin-booking', compact('booking'));
        }
    }

    public function booking(Request $request){
        $this->validate($request, [
            'id_jadwal' => 'required',
            'psikolog_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        $id_pemesanan = bin2hex(random_bytes(2));
    
        while (konsultasi::where('id_pemesanan', $id_pemesanan)->exists()) {
            $id_pemesanan = bin2hex(random_bytes(2));
        }

        $konsultasi = new konsultasi;
        $konsultasi->id_pemesanan = $id_pemesanan;
        $konsultasi->psikolog_id = $request->psikolog_id;
        $konsultasi->client_id = Auth::user()->id;
        $konsultasi->waktu = $request->jam;
        $konsultasi->tanggal = $request->tanggal;
        $konsultasi->status = 'pembayaran';
        $konsultasi->save();
        
        // hapus jadwal psikolog
        $jadwalPsikolog = jadwalPsikolog::where('id', $request->id_jadwal)->first();
        $jadwalPsikolog->delete();

        $user = User::where('id', Auth::user()->id)->first();

        Http::post(env('LINK_WA').'transaksi', [
            'username' => $user->name,
            'phone' => $user->phone,
        ])->json();

        return view('user.success-booking');
    }

    public function verifikasi($id){
        $role = Auth::user()->role;
        $googleCalendar = new GoogleCalenderController;

        $booking = konsultasi::where('id', $id)->get();

        // rubah client_id menjadi username sesuai id
        foreach($booking as $book){
            $book->client_id = User::where('id', $book->client_id)->first();
            $book->psikolog_id = User::where('id', $book->psikolog_id)->first();
        }

        if($role == 'admin'){
            $konsultasi = konsultasi::where('id', $id)->first();
            $konsultasi->status = 'psikolog';
            $konsultasi->save();
        }elseif($role == 'psikolog'){
            $data = $googleCalendar->createEvent($booking[0]);
            Http::post(env('LINK_WA').'konsultasi/acc', [
                'link' => $data->link,
                'tanggal' => $data->tanggal,
                'waktu' => $data->waktu,
                'username' => $booking[0]->client_id->name,
                'phone' => $booking[0]->client_id->phone,
            ])->json();
            $konsultasi = konsultasi::where('id', $id)->first();
            $konsultasi->status = 'ongoing';
            $konsultasi->save();
        }
        
        return redirect()->back()->with('success', 'Berhasil verifikasi');

    }

    public function destroy($id){
        $konsultasi = konsultasi::find($id);
        $user = User::where('id', $konsultasi->psikolog_id)->first();
        $jadwalPsikolog = new jadwalPsikolog;
        $jadwalPsikolog->user_id = $user->id;
        $jadwalPsikolog->tanggal = $konsultasi->tanggal;
        $jadwalPsikolog->jam = $konsultasi->waktu;
        // hapus  dari konsultasis
        $path_image = $konsultasi->bukti_pembayaran;
        // hilangkan / di awal path_image
        $path_image = substr($path_image, 1);
        unlink($path_image);
        $jadwalPsikolog->save();
        $konsultasi->delete();

        $user = User::where('id', $konsultasi->client_id)->first();
        // return $user;
        Http::post(env('LINK_WA').'konsultasi/tolak', [
            'username' => $user->name,
            'phone' => $user->phone,
        ])->json();

        return redirect()->back()->with('success', 'Berhasil hapus');
    }
}

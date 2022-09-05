<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleCalenderController;

use App\Models\konsultasi;
use App\Models\User;
use App\Models\jadwalPsikolog;

class BookingController extends Controller
{

    public function index(){
        $booking = konsultasi::where('status', "admin")->get();

        
        foreach($booking as $book){
            $book->client_id = User::where('id', $book->client_id)->first();
            $book->psikolog_id = User::where('id', $book->psikolog_id)->first();
        }

        return view('admin.booking-admin', compact('booking'));
    }

    public function booking(Request $request){

        $this->validate($request, [
            'psikolog_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        $id_pemesanan = bin2hex(random_bytes(3));
    
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

        $user = User::where('id', Auth::user()->id)->first();

        Http::post(env('LINK_WA').'transaksi', [
            'username' => $user->name,
            'phone' => $user->phone,
        ])->json();

        // hapus data pada jadwal psikolog yang sudah di pesan
        $jadwal = jadwalPsikolog::where('user_id', $request->psikolog_id)->where('tanggal', $request->tanggal)->where('jam', $request->jam)->first();
        $jadwal->delete();
    
        return view('user.success-booking', compact('id_pemesanan'));

    }

    public function verifikasi(Request $request){
        $konsultasi = konsultasi::where('id_pemesanan', $request->id)->get();
        
        foreach($konsultasi as $k){
            $k->client_id = User::where('id', $k->client_id)->first();
            $k->psikolog_id = User::where('id', $k->psikolog_id)->first();
        }
        
        $calender = new GoogleCalenderController;
        $calender->createEvent($konsultasi[0]);

        $konsultasi = konsultasi::where('id_pemesanan', $request->id)->first();
        $konsultasi->status = 'onggoing';
        $konsultasi->save();

        $user = User::where('id', $konsultasi->client_id)->first();
        Http::post(env('LINK_WA').'konsultasi/acc', [
            'id_pemesanan' => $konsultasi->id_pemesanan,
            'username' => $user->name,
            'phone' => $user->phone,
            'waktu' => $konsultasi->waktu,
            'tanggal' => $konsultasi->tanggal,
            'link' => $konsultasi->link,
        ])->json();

        return redirect()->back();
    }

    public function destroy(Request $request){
        $id = $request->id;

        $konsultasi = konsultasi::where('id_pemesanan', $id)->first();

        $jadwalPsikolog = new jadwalPsikolog;
        $jadwalPsikolog->user_id = $konsultasi->psikolog_id;
        $jadwalPsikolog->tanggal = $konsultasi->tanggal;
        $jadwalPsikolog->jam = $konsultasi->waktu;
        $jadwalPsikolog->save();

        $konsultasi->delete();

        return redirect()->back();
    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\konsultasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleCalenderController;

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

        return view('user.success-booking');

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
        $konsultasi->status = 'ongoing';
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
}
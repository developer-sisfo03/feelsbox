<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\konsultasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function index(){
        $booking = konsultasi::where('status', "admin")->get();

        // rubah client_id menjadi username sesuai id
        foreach($booking as $book){
            $book->client_id = User::where('id', $book->client_id)->first();
            $book->psikolog_id = User::where('id', $book->psikolog_id)->first();
        }

        return $booking;
        return view('admin.appointment.index-admin-appointment', compact('booking'));
    }

    public function booking(Request $request){

        $this->validate($request, [
            'psikolog_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        $id_pemesanan = bin2hex(random_bytes(2));
    
        // validasi id_pemesanan sudah ada atau belum
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
}

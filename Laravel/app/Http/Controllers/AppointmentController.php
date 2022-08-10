<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\konsultasi;
use App\Models\psikolog;

class AppointmentController extends Controller
{
    public function index(psikolog $slug)
    {
        if($slug->max == 1){
            return redirect('/appointment');
        }
        else{
            $psikolog = $slug;
            return view('user.appointment', compact('psikolog'));
        }
    }

    public function booking(Konsultasi $konsultasi, Request $request){
        // dapatkan semua request lalu update ke database
        $konsultasi->psikolog_id = $request->psikolog_id;
        $konsultasi->user_id = $request->user_id;
        $konsultasi->tanggal = $request->tanggal;
        $konsultasi->waktu = $request->jam;
        $konsultasi->save();
        return redirect('/konsultasi');
    }

}

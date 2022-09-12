<?php

namespace App\Http\Controllers;
use App\Models\landingPage;
use App\Models\testimoni;
use App\Models\psikolog;
use Illuminate\Http\Request;
use App\Models\konsultasi;
use App\Models\user;
use App\Models\hasilTes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landingPages = landingPage::all()[0];
        $testimoni = testimoni::with('user')->get();
        $psikolog = psikolog::with('user')->get();
        $totalKonsultasi = konsultasi::count();
        $totalPsikolog = user::where('role', 'psikolog')->count();
        $totalTes  =  hasilTes::count();

        return view('home', compact('landingPages','testimoni','psikolog','totalKonsultasi','totalPsikolog', 'totalTes'));
    }

    public function teams(){
        return view('teams');
    }

    public function tes(){
        return view('team-detail');
    }
}

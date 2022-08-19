<?php

namespace App\Http\Controllers;
use App\Models\landingPage;
use App\Models\testimoni;
use App\Models\psikolog;
use Illuminate\Http\Request;

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
        return view('home', compact('landingPages','testimoni','psikolog'));
    }
}

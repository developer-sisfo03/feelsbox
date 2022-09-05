<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Konsultasi;
use App\Models\User;

class IndexAdminController extends Controller
{
    public function index(){

        $data = [];

        // ambil data konsultasi serta urutkan berdasarkan status 
        $konsultasi = Konsultasi::orderBy('status', 'asc')->paginate(5);

        foreach($konsultasi as $kons){
            $kons->client_id = User::where('id', $kons->client_id)->first();
            $kons->psikolog_id = User::where('id', $kons->psikolog_id)->first();
        }
        // return $konsultasi;

        return view('admin.index', compact('konsultasi'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Konsultasi;
use App\Models\User;

class IndexAdminController extends Controller
{
    public function index(){

        // konsultasi paginatination 2 page
        $konsultasi = konsultasi::paginate(2);

        foreach($konsultasi as $kons){
            $kons->client_id = User::where('id', $kons->client_id)->first();
            $kons->psikolog_id = User::where('id', $kons->psikolog_id)->first();
        }
        return view('admin.index', compact('konsultasi'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalPsikolog;

class jadwalPsikologController extends Controller
{
    //
    public function schedule(request $request) 
    {
        $jadwalPsikolog = jadwalPsikolog::get(['tanggal']);
        $jadwal = jadwalPsikolog::all();
        $date = $request['tanggal'];
        $availtime = '';
        foreach ($jadwalPsikolog as $key => $value) {
            // print_r($value->tanggal);
            if ($value->tanggal == $date) {
                foreach ($jadwal as $j) {
                    $availtime = $j::where('tanggal', $date)->get(['jam']);
                    return $availtime;
                }
            }
        }
        // return $jadwalPsikolog;

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Konsultasi;
use App\Models\User;

class IndexAdminController extends Controller
{
    public function index(){

        $tanggalKonsultasi = konsultasi::orderBy('tanggal', 'asc')->get();

        $usiaClient = [];

        foreach ($tanggalKonsultasi as $key => $value) {
            $usiaClient[] = $value->client_id;
        }

        // hapus data klien yang sama
        $usiaClient = array_unique($usiaClient);
        $usiaClient = array_values($usiaClient);
        
        $jenisKelamin = [];

        foreach($usiaClient as $key => $value){
            // dapatkan usia user sesuai tanggal lahir
            $usiaClient[$key] = User::where('id', $value)->first();
            $usiaClient[$key] = $usiaClient[$key]->tanggal_lahir;            
            $usiaClient[$key] = date_diff(date_create($usiaClient[$key]), date_create('today'))->y;
        }

        $laki_laki = 0;
        $perempuan = 0;
        $lainya = 0;

        // dapatkan jenis kelamin
        foreach($tanggalKonsultasi as $key => $value){
            $jenisKelamin[$key] = User::where('id', $value->id)->first();
            $jenisKelamin[$key] = $jenisKelamin[$key]->jenis_kelamin;
            
            // tambahkan array jenis kelamin ke array usia

            if($jenisKelamin[$key] == 'Laki-laki'){
                $laki_laki++;
            }elseif($jenisKelamin[$key] == 'Wanita'){
                $perempuan++;

            }else{
                $lainya++;
            }
        }

        // tambahkan varibel laki_laki, perempuan, lainya ke array usia
        $jenisKelamin = array_merge([$laki_laki], [$perempuan], [$lainya]);

        $tanggalKonsultasi = $tanggalKonsultasi->unique('tanggal');
        $tanggalKonsultasi = $tanggalKonsultasi->values()->all();
        
        foreach($tanggalKonsultasi as $key => $value){
            $tanggalKonsultasi[$key] = $value->tanggal;
        }

        $dataKonsultasi = [];
        foreach ($tanggalKonsultasi as $key => $value) {
            $dataKonsultasi[$key] = konsultasi::where('tanggal', $value)->count();
            $tanggalKonsultasi[$key] = date('d M Y', strtotime($tanggalKonsultasi[$key]));
        }

        // ambil data konsultasi serta urutkan berdasarkan status 
        $konsultasi = Konsultasi::orderBy('status', 'asc')->paginate(5);

        foreach($konsultasi as $kons){
            $kons->client_id = User::where('id', $kons->client_id)->first();
            $kons->psikolog_id = User::where('id', $kons->psikolog_id)->first();
        }
        // return $konsultasi;

        return view('admin.index', compact('konsultasi', 'tanggalKonsultasi', 'dataKonsultasi', 'jenisKelamin'));
    }
}

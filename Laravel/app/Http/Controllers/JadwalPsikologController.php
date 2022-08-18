<?php

namespace App\Http\Controllers;

use App\Models\jadwalPsikolog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\psikolog;

class JadwalPsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $id = Auth::user()->id;
        $psikolog = psikolog::where('user_id', $id)->first();
        // temukan jadwal sesuai id dan urutkan sesuai tanggal
        $jadwalPsikolog = jadwalPsikolog::where('user_id', $psikolog->user_id)->orderBy('tanggal', 'asc')->get();
        return view('psikolog.jadwal.index-jadwal-psikolog', compact('jadwalPsikolog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $id = Auth::user()->id;
        $psikolog = psikolog::where('user_id', $id)->first();
        return view('psikolog.jadwal.create-jadwal-psikolog', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jadwalPsikolog = new jadwalPsikolog;
        $jadwalPsikolog->psikolog_id = $request->psikolog_id;
        $jadwalPsikolog->tanggal = $request->tanggal;
        $jadwalPsikolog->jam = $request->jam;
        $jadwalPsikolog->save();
        return redirect('/psikolog/jadwal')->with('success', 'Jadwal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalPsikolog  $jadwalPsikolog
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPsikolog $jadwalPsikolog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalPsikolog  $jadwalPsikolog
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPsikolog $jadwalPsikolog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalPsikolog  $jadwalPsikolog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalPsikolog $jadwalPsikolog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalPsikolog  $jadwalPsikolog
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalPsikolog $jadwalPsikolog, Request $request)
    {
        //
        // return 'teks';
        // delete data jadwalPsikolog by id
        $id = $request['id'];
        // return $id;
        $jadwalPsikolog = jadwalPsikolog::where('id', $id);
        // return $jadwalPsikolog;
        $jadwalPsikolog->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function jadwal(Request $request){
        // parameter get
        $jadwal = jadwalPsikolog::with('user')->where('tanggal', $request->tanggal)->get();
        // tambahksn csrf token
        $csrf_token = csrf_token();
        // return $csrf_token;

        return compact('jadwal', 'csrf_token');
    }
}

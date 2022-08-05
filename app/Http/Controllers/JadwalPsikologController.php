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
        $jadwalPsikolog = jadwalPsikolog::where('psikolog_id', $psikolog->id)->get();
        return view('psikolog.jadwal.jadwal-psikolog', compact('jadwalPsikolog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psikolog.jadwal.create-jadwal-psikolog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $date = $request['tanggal'];
        $time = $request['jam'];
        $psikologid = $request['id'];
        
        $jadwalPsikolog = new jadwalPsikolog;
        $jadwalPsikolog->psikolog_id = $psikologid;
        $jadwalPsikolog->tanggal = $date;
        $jadwalPsikolog->jam = $time;
        $jadwalPsikolog->save();
        
        return 'success';
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
}

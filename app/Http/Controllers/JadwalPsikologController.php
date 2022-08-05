<?php

namespace App\Http\Controllers;

use App\Models\JadwalPsikolog;
use Illuminate\Http\Request;

class JadwalPsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('psikolog.jadwal.jadwal-psikolog');
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
    public function destroy(JadwalPsikolog $jadwalPsikolog)
    {
        //
    }
}

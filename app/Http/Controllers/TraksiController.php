<?php

namespace App\Http\Controllers;

use App\Models\traksi;
use App\Http\Requests\StoretraksiRequest;
use App\Http\Requests\UpdatetraksiRequest;

class TraksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretraksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretraksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\traksi  $traksi
     * @return \Illuminate\Http\Response
     */
    public function show(traksi $traksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\traksi  $traksi
     * @return \Illuminate\Http\Response
     */
    public function edit(traksi $traksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetraksiRequest  $request
     * @param  \App\Models\traksi  $traksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetraksiRequest $request, traksi $traksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\traksi  $traksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(traksi $traksi)
    {
        //
    }
}

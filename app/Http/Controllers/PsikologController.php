<?php

namespace App\Http\Controllers;

use App\Models\psikolog;
use App\Http\Requests\StorepsikologRequest;
use App\Http\Requests\UpdatepsikologRequest;

class PsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psikolog = psikolog::with('user')->get();
        if(auth()->user()->role == 'admin'){
            return view('admin.psikolog.index', compact('psikolog'));
        }else{
            return view('user.psikolog', compact('psikolog'));
        }
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
     * @param  \App\Http\Requests\StorepsikologRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepsikologRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function show(psikolog $psikolog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function edit(psikolog $psikolog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepsikologRequest  $request
     * @param  \App\Models\psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepsikologRequest $request, psikolog $psikolog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function destroy(psikolog $psikolog)
    {
        //
    }

}

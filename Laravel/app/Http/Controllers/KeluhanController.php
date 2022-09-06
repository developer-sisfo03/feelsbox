<?php

namespace App\Http\Controllers;

use App\Models\keluhan;
use App\Http\Requests\StorekeluhanRequest;
use App\Http\Requests\UpdatekeluhanRequest;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // keluhan dengan user
        $keluhans = keluhan::with('user')->get();
        if(auth()->user()->role == 'admin'){
            return view('admin.keluhan', compact('keluhans'));
        }else{
            return view('user.keluhan', compact('keluhans'));
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
     * @param  \App\Http\Requests\StorekeluhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekeluhanRequest $request)
    {
        $id = $request['id'];
        $isi = $request['keluhan'];

        $keluhan = new keluhan;

        $keluhan->user_id = $id;
        $keluhan->keluhan = $isi;

        $keluhan->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(keluhan $keluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(keluhan $keluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekeluhanRequest  $request
     * @param  \App\Models\keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekeluhanRequest $request, keluhan $keluhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(keluhan $keluhan)
    {
        //
    }
}

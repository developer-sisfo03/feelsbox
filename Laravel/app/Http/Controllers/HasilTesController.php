<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\hasilTes;
use App\Http\Requests\StorehasilTesRequest;
use App\Http\Requests\UpdatehasilTesRequest;
use App\Http\Requests\StoretesMentalRequest;

class HasilTesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (Auth::user()->role == 'admin') {
            $hasilTes = hasilTes::with('user')->get();
            return view('admin.hasil-tes.index-hasil-tes', compact('hasilTes'));
        } elseif (Auth::user()->role == 'user') {
            return view('user.hasil-tes', [
                'hasilTes' => hasilTes::where('user_id', Auth::user()->id)->get()
            ]);
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
     * @param  \App\Http\Requests\StorehasilTesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehasilTesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hasilTes  $hasilTes
     * @return \Illuminate\Http\Response
     */
    public function show(hasilTes $hasilTes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hasilTes  $hasilTes
     * @return \Illuminate\Http\Response
     */
    public function edit(hasilTes $hasilTes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehasilTesRequest  $request
     * @param  \App\Models\hasilTes  $hasilTes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehasilTesRequest $request, hasilTes $hasilTes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hasilTes  $hasilTes
     * @return \Illuminate\Http\Response
     */
    public function destroy(hasilTes $hasilTes)
    {
        //
    }
}

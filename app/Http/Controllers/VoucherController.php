<?php

namespace App\Http\Controllers;

use App\Models\voucher;
use App\Http\Requests\StorevoucherRequest;
use App\Http\Requests\UpdatevoucherRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        // $id = voucher::get()->sortBy('id')->first();
        $id = voucher::all()->pluck('id')->first();
        $voucher = voucher::where('id', $id)->first();
        // return $voucher;
        $now = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        $duedate = Carbon::parse($voucher->masa_berlaku)->format('Y-m-d H:i:s');

        // if (Carbon::parse($now)->gt($duedate)) {
        //     $voucher->delete();
        //     return 'delete success';
        // } else {
        //     return 'waktu masih tersisa';
        // }
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
     * @param  \App\Http\Requests\StorevoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevoucherRequest $request)
    {
        //
        $nama = $request['nama'];
        $kode = $request['kode'];
        $expired = $request['expired'];

        $voucher = new voucher;
        $voucher->nama = $nama;
        $voucher->kode = $kode;
        $voucher->masa_berlaku = $expired;
        $voucher->save();
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevoucherRequest  $request
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevoucherRequest $request, voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(voucher $voucher)
    {
        //
        $voucher = voucher::find($id);
        $now = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        $duedate = Carbon::parse($voucher->masa_berlaku)->format('Y-m-d H:i:s');

        if (Carbon::parse($now)->gt($duedate)) {
            $voucher->delete();
            return 'delete success';
        }
    }
}

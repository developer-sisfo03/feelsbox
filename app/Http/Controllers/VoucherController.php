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
        // tampilkan halaman index 
        $this->hapus();
        $vouchers = voucher::all();
        return view('admin.voucher.index-voucher', compact('vouchers'));
        // buat fungsi yang dapat menghapus semua voucher yang sudah lewat masa_berlaku
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // tampilkan halaman create-voucher.blade.php
        return view('admin.voucher.create-voucher');
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
        return redirect()->route('voucher.index');
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
    public function destroy(UpdatevoucherRequest $request, voucher $voucher)
    {
        //
        // $vouchers = voucher::all();
        $id = $request['id'];
        $voucher = voucher::where('id', $id)->first();
        // return $voucher;
        $voucher->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    public function hapus() {
        $voucher = voucher::all();
        foreach ($voucher as $vouchers) {
            $date = Carbon::parse($vouchers->masa_berlaku)->format('Y-m-d');
            $now = Carbon::now('Asia/Jakarta')->format('Y-m-d');
            if (Carbon::parse($now)->gt($date)) {
                $vouchers->delete();
                // return 'delete success';
            } else {
                // echo 'masih berlaku';
            }
        }
        // return 'bisa';
    }
}

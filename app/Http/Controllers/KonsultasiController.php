<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use App\Models\psikolog;
use App\Http\Requests\StorekonsultasiRequest;
use App\Http\Requests\UpdatekonsultasiRequest;
use App\Http\Controllers\GoogleCalenderController;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $konsultasi = konsultasi::with('psikolog')->where('user_id', auth()->user()->id)->with('user')->get();
            return view('user.konsultasi.index-konsultasi', compact('konsultasi'));
        }elseif (auth()->user()->role == 'admin') {
            $konsultasi = konsultasi::with('psikolog')->with('user')->get();
            return view('admin.konsultasi.index-konsultasi', compact('konsultasi'));
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
     * @param  \App\Http\Requests\StorekonsultasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekonsultasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(konsultasi $konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(konsultasi $konsultasi)
    {
        if (auth()->user()->role == 'user') {
            return view('user.konsultasi.edit-konsultasi', compact('konsultasi'));
        }   elseif (auth()->user()->role == 'admin') {
            return view('admin.konsultasi.edit-konsultasi', compact('konsultasi'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekonsultasiRequest  $request
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekonsultasiRequest $request, konsultasi $konsultasi)
    {
        $googleCalendar = new GoogleCalenderController;
        if (auth()->user()->role == 'user') {
            $konsultasi->waktu = $request->jam;
            $konsultasi->tanggal = $request->tanggal;
            $konsultasi->update();
            return redirect('/konsultasi')->with('success', 'Data berhasil diubah');
        }   elseif (auth()->user()->role == 'admin') {
            if($request->status == 'accept'){
                $konsultasi = konsultasi::where('id',$request->id)->with('user')->first();
                $psikolog = psikolog::where('id', $konsultasi->psikolog_id)->with('user')->get();
                $konsultasi->status = 1;
                $konsultasi->update();

                $data = $konsultasi;
                $data['psikolog'] = $psikolog;
                $googleCalendar->createEvent($data);
                return redirect('/admin/konsultasi')->with('success', 'Data berhasil diubah');
            }elseif($request->status == 'cancel'){
                $konsultasi = konsultasi::where('id',$request->id)->with('user')->first();
                
                $googleCalendar->deleteEvent($konsultasi);
                $konsultasi->status = 0;
                $konsultasi->link = "";
                $konsultasi->calendar_id = "";
                $konsultasi->update();
                return redirect('/admin/konsultasi')->with('success', 'Data berhasil diubah');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(konsultasi $konsultasi)
    {
        if (auth()->user()->role == 'user') {
            $konsultasi->delete();
            return redirect('/konsultasi')->with('success', 'Data berhasil dihapus');
        }   elseif (auth()->user()->role == 'admin') {
            $konsultasi->delete();
            return redirect()->route('admin.konsultasi.index')->with('success', 'Data berhasil dihapus');
        }
    }
}

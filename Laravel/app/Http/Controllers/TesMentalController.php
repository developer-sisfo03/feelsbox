<?php

namespace App\Http\Controllers;

use App\Models\tesMental;
use App\Http\Requests\StoretesMentalRequest;
use App\Http\Requests\UpdatetesMentalRequest;
use App\Models\hasilTes;
use Carbon\Carbon;
use Illuminate\Http\Request;


class TesMentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // batasi user agar tidak mengerjakan tes mental dalam jangka waktu 2 minggu setelah hasil tes user tersimpan dalam database hasil_tes table, jika sudah lewat 2 minggu maka izinkan user untuk mengerjakan lagi tes mental
        if(auth()->user()->role == 'admin'){
            if($request->edit == 'true'){
                $tesMental = tesMental::find($request->id);
                // UPDATE DATA TES MENTAL
                $tesMental->update($request->all());
                return redirect()->back()->with('success', 'Data tes mental berhasil diupdate');
            }
            if($request->id){
                $tesMental = tesMental::find($request->id);
                return view('admin.tes-mental.edit-tes-mental', compact('tesMental'));
            }
            $tesMental = tesMental::all();
            return view('admin.tes-mental.index-tes-mental', compact('tesMental'));
        }else{
            $hasilTes = hasilTes::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
            if ($hasilTes == null) {
                return view('user.tes-mental', [
                    'tesMentals' => tesMental::all()
                ]);
            }

            $date = Carbon::parse($hasilTes->waktu)->format('Y-m-d H:i:s');
            $now = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');

            if (Carbon::parse($now)->gte($date)) {
                return view('user.tes-mental', [
                    'tesMentals' => tesMental::all()
                ]);
            
            } else {
                $daysleft = Carbon::parse($now)->diffInDays(Carbon::parse($date));
                $hoursleft = Carbon::parse($now)->diffInHours(Carbon::parse($date));
                if ($daysleft > 0) {
                    return redirect('back-again')->with('warning','sisa waktu sampai dapat mengerjakan tes mental Lagi : ' . $daysleft . ' hari');
                } else {
                    return redirect('back-again')->with('warning','sisa waktu sampai dapat mengerjakan tes mental Lagi : ' . $hoursleft . ' jam');
                }
            } 
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
     * @param  \App\Http\Requests\StoretesMentalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretesMentalRequest $request)
    {
        $date = Carbon::now('Asia/Jakarta')->addDays(14)->format('Y-m-d H:i:s');
        $array_keys = array_keys($request->all());
        $indikator = '';
        $i = 0;
        $k = 0;
        $j = [];
        $bdi = [];
        $bdiresult = '';
        $bdiscore = 0;
        
        
        foreach ($request->all() as $key => $value) {                        
            $arr = explode('_', $key); 
            if ($arr[1] != $indikator) {
                $indikator = $arr[1];
                $j[$indikator] = 0;
            }
            if ($arr[1] == $indikator) {
                if ($value == 'Ya') {
                    $j[$indikator]+=1;
                    $i = $j['self-awareness'];
                    $k = $j[$indikator];
                } elseif ($value >= 0 && $value <= 3) {
                    array_push($bdi, $value);
                }
            } 
        }

        if ($i >= 5 && $k >= 1) {
            // echo 'kamu harus ke psikiater';
            // echo '<br>';
        }

        if (array_sum($bdi) <= 10) {
            $bdiresult = 'Suasana perasaan normal';
            $bdiscore = array_sum($bdi);
        } elseif (array_sum($bdi) >= 11 && array_sum($bdi) <= 16) {
            $bdiresult = 'Perasaan Murung';
            $bdiscore = array_sum($bdi);
        } elseif (array_sum($bdi) >= 17 && array_sum($bdi) <= 20) {
            $bdiresult = 'Batas Depresi';
            $bdiscore = array_sum($bdi);
        } elseif (array_sum($bdi) >= 21 && array_sum($bdi) <= 30) {
            $bdiresult = 'Depresi Ringan';
            $bdiscore = array_sum($bdi);
        } elseif (array_sum($bdi) >= 31 && array_sum($bdi) <= 40) {
            $bdiresult = 'Depresi Sedang';
            $bdiscore = array_sum($bdi);
        } elseif (array_sum($bdi) > 40) {
            $bdiresult = 'Depresi Berat';
            $bdiscore = array_sum($bdi);
        }
        
        $hasilTes = new hasilTes;
        $hasilTes->user_id = auth()->user()->id;
        $hasilTes->nilai = $bdiscore;
        $hasilTes->kesimpulan = $bdiresult;
        $hasilTes->waktu = $date;
        $hasilTes->save();
        return view('user.success-tes');
        
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tesMental  $tesMental
     * @return \Illuminate\Http\Response
     */
    public function show(tesMental $tesMental)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tesMental  $tesMental
     * @return \Illuminate\Http\Response
     */
    public function edit(tesMental $tesMental)
    {
        return $tesMental;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetesMentalRequest  $request
     * @param  \App\Models\tesMental  $tesMental
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetesMentalRequest $request, tesMental $tesMental)
    {
        $tesMental->update($request->all());
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tesMental  $tesMental
     * @return \Illuminate\Http\Response
     */
    public function destroy(tesMental $tesMental)
    {
        return $tesMental->delete();
    }
}

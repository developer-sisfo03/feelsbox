<?php

namespace App\Http\Controllers;
// import  request
use Illuminate\Http\Request;
use App\Models\psikolog;
use App\Http\Requests\StorepsikologRequest;
use App\Http\Requests\UpdatepsikologRequest;
use App\Models\jadwalPsikolog;
use App\Models\User;
use App\Models\konsultasi;

class PsikologController extends Controller
{
    public function home(){
        $auth = auth()->user()->id;

        $tanggalKonsultasi = konsultasi::where('psikolog_id', $auth)->orderBy('tanggal', 'asc')->get();

        $usiaClient = [];

        foreach ($tanggalKonsultasi as $key => $value) {
            $usiaClient[] = $value->client_id;
        }

        // hapus data klien yang sama
        $usiaClient = array_unique($usiaClient);
        $usiaClient = array_values($usiaClient);
        
        $jenisKelamin = [];

        foreach($usiaClient as $key => $value){
            // dapatkan usia user sesuai tanggal lahir
            $usiaClient[$key] = User::where('id', $value)->first();
            $usiaClient[$key] = $usiaClient[$key]->tanggal_lahir;            
            $usiaClient[$key] = date_diff(date_create($usiaClient[$key]), date_create('today'))->y;
        }

        $laki_laki = 0;
        $perempuan = 0;
        $lainya = 0;

        // dapatkan jenis kelamin
        foreach($tanggalKonsultasi as $key => $value){
            $jenisKelamin[$key] = User::where('id', $value->id)->first();
            $jenisKelamin[$key] = $jenisKelamin[$key]->jenis_kelamin;
            
            // tambahkan array jenis kelamin ke array usia

            if($jenisKelamin[$key] == 'Laki-laki'){
                $laki_laki++;
            }elseif($jenisKelamin[$key] == 'Wanita'){
                $perempuan++;

            }else{
                $lainya++;
            }
        }

        // tambahkan varibel laki_laki, perempuan, lainya ke array usia
        $jenisKelamin = array_merge([$laki_laki], [$perempuan], [$lainya]);

        $tanggalKonsultasi = $tanggalKonsultasi->unique('tanggal');
        $tanggalKonsultasi = $tanggalKonsultasi->values()->all();
        
        foreach($tanggalKonsultasi as $key => $value){
            $tanggalKonsultasi[$key] = $value->tanggal;
        }

        $dataKonsultasi = [];
        foreach ($tanggalKonsultasi as $key => $value) {
            $dataKonsultasi[$key] = konsultasi::where('psikolog_id', $auth)->where('tanggal', $value)->count();
            $tanggalKonsultasi[$key] = date('d M Y', strtotime($tanggalKonsultasi[$key]));
        }



        return view('psikolog.index-psikolog', compact('dataKonsultasi', 'tanggalKonsultasi', 'usiaClient', 'jenisKelamin'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->check() == false ) {
            $jadwalPsikolog = jadwalPsikolog::orderBy('tanggal', 'asc')->get();
        
            $tanggal = [];
            $tg = "";
            foreach($jadwalPsikolog as $jadwal){
                $tg = $jadwal->tanggal;
                $tg = date('d F Y', strtotime($tg));
                if(!in_array($tg, $tanggal)){
                    $tanggal[] = $tg;
                }
            }
    
            return view('booking', compact('tanggal'));
        }

        if(auth()->user()->role == "user" ){
            $jadwalPsikolog = jadwalPsikolog::orderBy('tanggal', 'asc')->get();
        
            $tanggal = [];
            $tg = "";
            foreach($jadwalPsikolog as $jadwal){
                $tg = $jadwal->tanggal;
                $tg = date('d F Y', strtotime($tg));
                if(!in_array($tg, $tanggal)){
                    $tanggal[] = $tg;
                }
            }
    
            return view('booking', compact('tanggal'));
        }
        
        if(auth()->user()->role == 'admin'){
            $psikolog = User::where('verified', '1')->where('role', 'psikolog')->get();
            return view('admin.psikolog.index-psikolog-admin', compact('psikolog'));
        }

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepsikologRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepsikologRequest $request)
    {
        return "cek";
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

    public function verified($id)
    {
        $psikolog = User::find($id);
        $psikolog->verified = '1';
        $psikolog->save();
        return redirect()->back();
    }

    public function verifikasi(){
        $psikolog = User::where('role', 'psikolog')->get();
        return view('admin.psikolog.verified-psikolog-admin', compact('psikolog'));
    }

}

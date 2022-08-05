<?php

namespace App\Http\Controllers;
// import  request
use Illuminate\Http\Request;
use App\Models\psikolog;
use App\Http\Requests\StorepsikologRequest;
use App\Http\Requests\UpdatepsikologRequest;
use App\Models\jadwalPsikolog;
use App\Models\User;

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
            return view('admin.psikolog.index-psikolog-admin', compact('psikolog'));
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

    public function verified($id)
    {
        $psikolog = psikolog::find($id);
        $psikolog->verified = '1';
        $psikolog->save();
        return redirect()->back();
    }

    public function user()
    {
        $id  = auth()->user();
        $user =  User::find($id)->first();
        $psikolog = psikolog::where('user_id', $user->id)->first();
        return view('psikolog.profile.index-profile-psikolog', compact('user', 'psikolog'));
    }

    public function setting(Request $request){
        $id  = auth()->user();
        $user =  User::find($id)->first();
        $psikolog = psikolog::where('user_id', $user->id)->first();
        return view('psikolog.profile.edit-profile-psikolog', compact('user', 'psikolog'));
    }

}

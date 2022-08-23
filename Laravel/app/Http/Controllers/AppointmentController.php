<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $role = $user->role;

        if($role == 'psikolog'){
            $booking = konsultasi::where('status', 'ongoing')->where('psikolog_id', $id)->get();
            foreach($booking as $book){
                $book->client_id = User::where('id', $book->client_id)->first();
                $book->psikolog_id = User::where('id', $book->psikolog_id)->first();
            }

            return view('psikolog.appointment.index-psikolog-appointment', compact('booking'));

        }elseif($role == 'user'){
            $booking = konsultasi::where('status', 'ongoing')->where('client_id', $id)->get();
            foreach($booking as $book){
                $book->psikolog_id = User::where('id', $book->psikolog_id)->first();
            }
            return view('user.appointment-user', compact('booking'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

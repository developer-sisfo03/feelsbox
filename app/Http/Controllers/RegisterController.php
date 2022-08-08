<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

use App\Models\psikolog;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(){
        $countryCode = "62";

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->role = request('role');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->tanggal_lahir = request('tanggal_lahir');
        $user->domisili = request('domisili');

        $phone = preg_replace('/^0/', $countryCode, request('phone'));
        $user->phone = $phone;
        $user->save();

        try{
            Http::post(env('LINK_WA').'welcome', [
            'username' => $user->name,
            'phone' => $user->phone,
            ])->json();

            return redirect('/login');
        }
        catch(\Exception $e){
            return redirect('/register')->with('error', 'Gagal mendaftar');
        }
    }

    // $user = new User;
    // $user->name = request('name');
    // $user->email = request('email');
    // $user->password = bcrypt(request('password'));
    // $user->role = 'user';
    // $user->jenis_kelamin = request('jenis_kelamin');
    // $user->tanggal_lahir = request('tanggal_lahir');
    // $user->domisili = request('domisili');
    // $user->save();
    // return redirect('/login');
}

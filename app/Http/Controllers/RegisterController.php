<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\psikolog;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->role = request('role');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->tanggal_lahir = request('tanggal_lahir');
        $user->domisili = request('domisili');
        $user->save();
        if($request->role == 'psikolog'){
            $user = User::where('email', request('email'))->first();
            $psikolog = new psikolog;
            $psikolog->user_id = $user->id;
            $psikolog->slug = Str::slug(request('name'));
            $psikolog->save();
        }
        return redirect('/login');
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

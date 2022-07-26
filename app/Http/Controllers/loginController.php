<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }else{
                return redirect('/user');
            }
        }
        
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}

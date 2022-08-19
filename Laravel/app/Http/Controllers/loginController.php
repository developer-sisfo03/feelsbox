<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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
            }elseif(Auth::user()->role == 'user'){
                return redirect('/user');
            }elseif(Auth::user()->role == 'psikolog'){
                $psikolog = User::where('id', Auth::user()->id)->first();
                if($psikolog->verified == '1'){
                    return redirect('/psikolog');
                }else{
                   Auth::logout();
                    return redirect('/login')->with('error', 'Akun psikolog belum diverifikasi silahkan hubungi Admin');
                }
            }
        }else{
            return back()->with('error', 'Login Gagal, Email atau Password Salah');
        }
        
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}

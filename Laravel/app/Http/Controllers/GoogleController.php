<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect() {
        // hubungkan google caldendar dengan google account
        return Socialite::driver('google')->scopes(['https://www.googleapis.com/auth/calendar'])->redirect();
    }

    public function handleGoogleCallback(Request $request) {

        $user = Socialite::driver('google')->user();
        dd ($user);
        $findUser = User::where('google', $user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/');
        } else {
            $id = $user->id;
            
            $newUser = new User;
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            // $newUser->password = 'aaa';
            $newUser->save();

            Auth::login($newUser);
            return redirect('/');
        }
    }

}

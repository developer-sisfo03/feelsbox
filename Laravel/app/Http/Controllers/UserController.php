<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.index-user', compact('user'));
    }
}

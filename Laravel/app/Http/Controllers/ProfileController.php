<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function user(){
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('profile.index-profile', compact('user'));
    }

    public function edit(){
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('profile.edit-profile', compact('user'));
    }

    public function update(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        
        $user->update($request->all());

        if($request->hasFile('image')){
            if(isset($request->oldImage)){
                $oldImage = $request->oldImage;
                $path = public_path('storage/'.$oldImage);
                unlink($path);
            }

            $path = $request->file('image')->store('profile');
            $user->image = $path;
        }

        if($request->password != null){
            $user->password = Hash::make($request->password);
        }else{
            $user->password = $user->password;
        }

        $user->save();

        return redirect()->route('profile');
    }
}

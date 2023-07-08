<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
           
        ]);
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password
        ]);
        
        return redirect('/')->with('succes', "Account successfully registered.");
    }
}

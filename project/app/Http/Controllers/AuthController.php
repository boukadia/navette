<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(request $request){
        $request ->validate([
            'name'=>'required',
            'role'=>'required',
            'email'=>['required','email',"unique:users"],
            'password'=>'required|min:6'
        ]);

        // User::create($request->all())
        // User::create($request->only('name','email','password','role'));
    }
}

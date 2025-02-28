<?php

namespace App\Http\Controllers;
use App\Models\User; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Parser\Shortcut\HashParser;

class UserController extends Controller
{
    public function index(){
        // $user=User::all();
        $user=new User();
        $user->index();
        return view("user");
    }
    public function registerForm(){
    
        return view("register");
    }
    public function register(request $request){
    
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        // $users->password=password_hash($request['password'],);
         $users->password= Hash::make($request['password']);
        $users->roleId=$request->roleId;
        $users->save();

    }
    public function login(request $request){
        $req = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:2'
        ]);
      
        if (Auth::attempt($req)) {

return redirect("/dashboard");        }

    }
    public function loginForm(){
        return view("login");
    }
}
        
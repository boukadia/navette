<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Parser\Shortcut\HashParser;

class UserController extends Controller
{
    public function index()
    {
        // $user=User::all();
        $user = new User();
        $user->index();
        return view("user");
    }
    public function registerForm()
    {
        $roles=Role::all();

        return view("register",["roles"=>$roles]);
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|email',
            'password' => 'required|min:2',
            'role_id' => 'required',
        ]);
        // dd($request['role_id']);

        // $users = new User();
        // $users->name = $request->name;
        // $users->email = $request->email;
        // // $users->password=password_hash($request['password'],);
        // $users->password = Hash::make($request['password']);
        // $users->role_id = $request["role_id"];

        // dd($users->updateOrCreate());
        //     // $users=User::create(["name"=>$request->name,
        //     // "email"=>$request->email,
        //     // "password"=> Hash::make($request['password']),
        //     // "role_id"=>$request['role_id']
        // // ]);

        User::updateOrCreate([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role_id' => $validatedData['role_id'],
        ]);

        return redirect('/login')->with('success', 'Inscription');
    }
    public function login(request $request)
    {
        $req = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:2'
        ]);

        if (Auth::attempt($req)) {

            return redirect("/dashboard");
        }


        // ===================autre methode======================
        // auth::attempt();                                     =
        // if(auth::check()){                                   =
        //     return redirect('/dashboard');                   =
        // }                                                    =
        // else{                                                =
        //     return redirect('/login');                       =
        // }                                                    =
        // ======================================================

    }
    public function loginForm()
    {
        return view("login");
    }
    public function logOut()
    {
        Auth::logout();
        return redirect("/login");
    }
}

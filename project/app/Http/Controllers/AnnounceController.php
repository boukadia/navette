<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounceController extends Controller
{
    public function index(request $request)
    {

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }
        if ($user->roleId == 1) {
            $announces = Announce::all();
            return view("index", ["announces" => $announces]);
        } else if($user->roleId == 2){
            $announces = Announce::where("user_id", $user->id)->get();
            return view("dashboardSociete", ["announces" => $announces]);
        }
        else{
            $announces = Announce::all();
            return view("dashboardAdmin", ["announces" => $announces]);
        }
    }
}

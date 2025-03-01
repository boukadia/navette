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

        if ($user->email == "mustapaha.boukadia@gmail.com") {
            $announces = Announce::all();
            return view("dashboardAdmin", ["announces" => $announces]);
        }
    
        if ($user->roleId == 1) { 
            $announces = Announce::all();
            return view("index", ["announces" => $announces]);
        } 
        
        if ($user->roleId == 2) { 
            $announces = Announce::where("user_id", $user->id)->get();
            return view("dashboardSociete", ["announces" => $announces]);
        }
        return redirect("/login"); 
        // return redirect()->route('home')->with('error', 'Accès refusé.');

    }
    public function create(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255', 

        'description' => 'required|string|min:6|confirmed', 
        'dateDebut' => 'required|date',
        'dateFin' => 'required|date',
        'heure-depart' => 'required|date_format:H:i',
        'heure-arrive' => 'required|date_format:H:i',
    ]);

    $user = Auth::user();
    Announce::create([
        "title" => $request->title,
        "description" => $request->description,
        "dateDebut" => $request->dateDebut,
        "dateFin" => $request->dateFin,
        "heure-depart" => $request['heure-depart'],
        "heure-arrive" => $request['heure-arrive'],
        "user_id" => $user->id,
    ]);
    return redirect("/dashboard"); 
   
    // return redirect()->route('dashboard')->with('success', 'Annonce créée avec succès.');
}

    public function form(){
        return view("formAnnounce");
    }
}

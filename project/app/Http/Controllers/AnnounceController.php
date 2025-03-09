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
        if ($user) {


            if ($user->email === "admin@gmail.com") {
                $announces = Announce::all();
                return view("dashboardAdmin", ["announces" => $announces]);
            }

            if ($user->role_id == 2) {
                $announces = Announce::all();
                return view("index", ["announces" => $announces]);
            }


            if ($user->role_id == 1) {
                $announces = Announce::where("user_id", $user->id)->get();
                return view("dashboardSociete", ["announces" => $announces]);
            }
            return redirect("/login");
            // return redirect()->route('home')->with('error', 'Accès refusé.');
        } else {
            $announces = Announce::all();
            return view("index", ["announces" => $announces]);
        }
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',

            'description' => 'required|string|min:6',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
            'heure-depart' => 'required|date_format:H:i',
            'heure-arrive' => 'required|date_format:H:i',
        ]);;
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

    public function edit($id)
    {
        $announce = Announce::find($id);
        if (!$announce) {
            return redirect()->route('index')->with('error', 'Article introuvable');
        } else {
            return view("edit", ["announce" => $announce]);
        }
    }
    public function update(request $request, $id)
    {
        // dd($request);
        Announce::where("id", $id)->update([
            "title" => $request->title,
            "description" => $request->description,
            "dateDebut" => $request->dateDebut,
            "dateFin" => $request->dateFin,
            "heure-depart" => $request["heure-depart"],
            "heure-arrive" => $request["heure-arrive"],

        ]);
    }
    public function delete($id)
    {
        Announce::where('id', $id)->delete();
    }
    // public function delete ($id){
    //     $announce=Announce::find($id);
    //     if($announce){ }
    // }
    public function form()
    {
        return view("formAnnounce");
    }
}

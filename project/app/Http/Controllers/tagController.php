<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('index', compact('tags'));
    }

    public function create(Request $request)
    {
        dd($request->roles);
        // return view('tags');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);

        Tag::create($request->all());
        return redirect("/dashboard");
    }

    public function show(Tag $tag)
    {
        return view('tag', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,' . $tag->id . '|max:255',
        ]);

        $tag->update($request->all());
        return redirect()->route('tags.index')->with('success', 'Tag mis à jour avec succès.');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Tag supprimé avec succès.');
    }
    public function test()
    {
        $user = User::find(1); // Trouver l'utilisateur avec ID = 1
    
        if (!$user) {
            return response()->json(['error' => 'Utilisateur non trouvé'], 404);
        }
    
        $roles = Role::all();
        $permissions = Permission::all();
    
        $userPermissions = $user->roles->flatMap->permissions->pluck('name')->unique();
    
        dd($userPermissions);
    }
    
}



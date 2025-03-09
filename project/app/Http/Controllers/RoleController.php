<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view('roleAll', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request);
        $roles=Role::create(["name"=>$request->name]);
        if($request->has("permissions")){
            $roles->permissions()->attach($request->permissions);
        }
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $permissions=Permission::all();
        return view("role",["permissions"=>$permissions]);
    }

    /**
     * Display the specified resource.
     */
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        
        return view('editRole', ["role"=>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
        ]);

        // $role->update($request->all());
        $role->update($request->only('name'));

        return redirect()->route('roleAll')->with('success', 'Rôle mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roleAll')->with('success', 'Rôle supprimé');
    }
}



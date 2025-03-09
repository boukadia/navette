<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use App\Models\User;
use Closure;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class authe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // // dd(Route::getCurrentRoute()->uri());
        $route = (Route::currentRouteName());
        $user = Auth::user();
        // // dd($user->role_id);
        // ($permession=Permission::where($user->role_id));
        // ($permissions = $request->user()->role->permission);
        // foreach($permissions as $per){
        //         if($per->name==$route){
        //             return $next($request);
        //         }
        //         else {
        //             return redirect("/register");
        //         }
        // } 

        // Vérifier si l'utilisateur existe et a un rôle
        if (!$user || !$user->role) {
            return redirect("/login");
        }

        $permissions = $user->role->permissions ?? [];


        foreach ($permissions as $permission) {
            if ($permission->name === $route) {
                return $next($request);
            }
        }

        return redirect("/register");










        
        // if (!is_countable($permissions)) {
        //     return redirect("/register");
        // }
        // if ( !$user->role || $user->role->id ) {
        //     abort(403, 'Access Denied: You do not have the required role.');
        // }

        //         if (!$user->role->permissions->contains('name', $permission)) {
        //             abort(403, 'Access Denied: You do not have the required permission.');
        //         }



    }
}

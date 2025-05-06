<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use Auth;

class ifUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
            $role = Role::where('id', auth()->user()->role_id)->first();
            if($role->id == 2){
                return $next($request);
            }
        }
        return redirect(url('/'));
    }
}
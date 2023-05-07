<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $role): Response
    {
        if(!auth()->check() or auth()->user()->role !== $role){
            switch($role){
                case "admin"  : toastr()->error('please login with Admin Account!!'); return redirect("/admin/login");
                case "vendor" : return redirect("/vendor/login");
            }
        }
        
        return $next($request);
    }
}

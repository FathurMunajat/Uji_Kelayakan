<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isGuest
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() == false) {
           
            return $next($request);
        } else {
            
            return redirect('/dashboard')->with('failed', 'Anda sudah login!!');
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //echo session()->has('idUsuario');
        //return $next($request); // permite continuar
        //return redirect('/home/login');

        if ($request && session() && session()->has('idUsuario')){
            return $next($request); // permite continuar
        }else{
            return redirect('/home/login');
        }


    }
}

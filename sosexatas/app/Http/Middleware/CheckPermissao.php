<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermissao
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
        if ($request && session() && session()->has('tipoUsuario') && session()->get('tipoUsuario')==0){
            return $next($request); // permite continuar
        }else{
            return redirect('/home');
        }
    }
}

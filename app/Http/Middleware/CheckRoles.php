<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {     
        if(Auth::check()){
            if(auth()->user()->hasRoles($roles)){                   
                return $next($request);
            }                           
            return abort(404, 'Pagina no encontrada');                      
        }else{  
            return abort(404, 'Pagina no encontrada');
        }
    }
}

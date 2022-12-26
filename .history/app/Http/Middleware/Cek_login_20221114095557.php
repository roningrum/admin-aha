<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        return $next($request);
        if(Auth::check()){
            return redirect('login');
        }
        $user = Auth::user();

        if($user->level == $role){
           
        }
        
        return redirect('login')->with('error', "Maaf, kamu tidak memiliki akses");
    
    }
}

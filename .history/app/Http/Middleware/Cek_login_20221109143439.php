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
    public function handle($request, Closure $next, $role)
    {
        if(!$request->user()->hasRole($role)){
            return redirect('login');
        }
        return $next($request);
        // if(!Auth::check()){
        //     return redirect('login');
        // }
        // else{
        //     return redirect('/');
        // }
        // $user = Auth::user();

        // if($user->level == $role){
        //     return $next($request);
        // }
        // else{
        //     return redirect('/');
        // }

        // return redirect('login')->with('error', "Maaf, kamu tidak memiliki akses");
    
    }
}

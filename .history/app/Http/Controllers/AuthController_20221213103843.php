<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Psy\Command\ListCommand\FunctionEnumerator;
use App\Post;
use App\User;

class AuthController extends Controller
{

    // public function __construct() {
    //     $this->middleware('cek_login');
    // }

    public function index(){
        return view('login');
    }

    public function proses_login(Request $request){
        request()->validate(
            [
                'username'=>'required',
                'password'=>'required',
            ]
        );
        $credential = $request->only('username', 'password');
        if(Auth::attempt($credential)){
            if( $user = Auth::user()){
                if($user->level =='admin'){
                    return redirect()->intended('admin');
                } else if($user->level =='editor'){
                    return redirect()->intended('editor');
                }
            }
            return redirect('login');
        }
      
    }

    public function show(Request $request){
        return $request->user();
    }

    public function dashboard(){
        if(Auth::check()){
            $posts_count= Post::where('user_id', auth()->user()->id)->count();
            $user_count= User::count();
        return view('dashboard.dashboard',[
            'posts'=>$posts_count,
            'user_count'=>$user_count]);
        }
        return redirect('login');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}

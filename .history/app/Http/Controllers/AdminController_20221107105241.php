<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboard.dashboard',[
            'total_post'=> Post::where('user_id', auth()->user()->id)->count(),
            'total_user'=>User::all()->count()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AdminController extends Controller
{
    //
    public function index(){
        $total_post = Post::where('user_id', auth()->user()->id)->count();
        $total_user = User::all()->count();
        return view('dashboard.dashboard',[
            'totalPosts'=> $total_post,
            'totalUser'=> $total_user
        ]);
    }
}

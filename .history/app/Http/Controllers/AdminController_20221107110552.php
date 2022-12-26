<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $posts_count= Post::where('user_id', auth()->user()->id)->count();
        return view('dashboard.dashboard',[
            'posts'=>]);
    }
}

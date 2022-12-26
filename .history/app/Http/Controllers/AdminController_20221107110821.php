<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboard.dashboard',[
            'posts'=>$posts_count]);
    }
}

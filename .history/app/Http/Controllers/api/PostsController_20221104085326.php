<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        // return $this->sendResponse()
    }
}

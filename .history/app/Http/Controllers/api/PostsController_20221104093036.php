<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //buat baca 
    public function index(){
        $posts = Post::with([
            "category"
        ])->all();
        return new ApiResource(true, 'data', $posts);
        // return $this->sendResponse()
    }
    
}

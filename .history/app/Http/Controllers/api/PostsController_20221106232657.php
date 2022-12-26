<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //buat baca 
    public function show(){
        $posts = Post::with([
            "category",
            "user"
        ])->get();
        return new ApiResource(true, 'data', $posts);
        // return $this->sendResponse()
    }
    
}

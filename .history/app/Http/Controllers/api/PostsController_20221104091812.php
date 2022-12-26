<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return new ApiResource(true, 'data', $posts);
        // return $this->sendResponse()
    }
}

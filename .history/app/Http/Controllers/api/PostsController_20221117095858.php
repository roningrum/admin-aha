<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    //buat baca 
    public function index(){
        $posts = Post::with([
            "category",
            "user"
        ])->get();
        return new ApiResource(true, 'data', $posts);
        // return $this->sendResponse()
    }

    public function detail($slug){
        $blog_query = Post::with(['user', 'category'])->where('slug',$slug)->first();
        if($blog_query){
            return new ApiResource(true, 'data', $blog_query);
        }
        else{
            return new ApiResource(false, 'not found',[]);
        }
    }

    public function category(){
        $category = Category::all();
        dd($category);
        // return new ApiResource(true, 'data', $category);
    }
    
}

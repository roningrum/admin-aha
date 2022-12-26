<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function list( Request $request){
        $blog_query = Post::with(['user', 'category']);
        if($request -> keyword){
            $blog_query->where('title', 'LIKE', '%'.$request->keyword.'%');
        }

        if($request->category){
            $blog_query->wherehAS('category', function($query) use($request){
                $query->where('slug',);
            });
        }

        $blogs = $blog_query->get();
        return response()->json([
            'message'=>'Sukses',
            'data'=>$blogs
        ],200);
    }
}

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
            $blog_query->whereHas('category', function($query) use($request){
                $query->where('slug',$request->category);
            });
        }

        if($request->user_id){
            $blog_query->where('user_id', $request->user_id);
        }
        
        if($request->sortBy && in_array($request->sortBy,['id', 'published_at'])){
            $sortBy = $request->sortBy;
        } else{
            $sortBy='id';
        }

        if($request->sortOrder && in_array($request->sortOrder,['asc', 'desc'])){
            $sortOrder = $request->sortOrder;
        } else{
            $sortOrder='desc';
        }
        
        //pagination
        if($request->perPage){
            $perPage= $request->perPage;
        }
        else{
            $perPage=5;
        }

        if($request->paginate){
            $blogs = $blog_query->orderBY($sortBy, $sortOrder)->paginate($perPage);
        }
        else{
            $blogs = $blog_query->orderBY($sortBy, $sortOrder)->get();
        }

        return response()->json([
            'message'=>'Sukses',
            'data'=>$blogs
        ],200);

    }

    public function details($id){
        $blog_query = Post::with(['user', 'category'])->where('id',$id)->first();
        if($blog_query){
            return response()->json([
                'message'=>'Sukses',
                'data'=>$blog_query
            ],200);
        }
        else{
            return response()->json([
                'message'=>'Not Found',
            ],401);
        }
    }
}

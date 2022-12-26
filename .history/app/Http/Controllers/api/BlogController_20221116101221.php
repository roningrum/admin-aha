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
            $blogs = $blog_query->orderBY($sortBy, $sortOrder)->paginate();
        }
        else{
            $blogs = $blog_query->orderBY($sortBy, $sortOrder)->get();
        }

        
      
        return response()->json([
            'message'=>'Sukses',
            'data'=>$blogs
        ],200);
    }
}

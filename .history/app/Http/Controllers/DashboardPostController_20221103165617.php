<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use Exception;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard.post.posts',[
        //     'title' => "post",
        //     'active'=> "post",
        //     'posts'=>Post::all()
        // ]);
    //     $data = Post::first();
    //     return response()->json(
    //         [
    //             'title'=>$data['title'],
    //             'image'=>Storage::url($data['img_blog'])
    //     ]
    // );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.post.create',[
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' =>'required',
            'category_id' =>'required',
            'img_blog'=>'image|file|max:1024',
            'body'=>'required',
        ]);
        if($request->file('img_blog')){
            $validatedData['img_blog']= $request->file('img_blog')->store('assets/image', 'public');
        }

        $validatedData['slug']=Str::slug($request->title);
        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= Str::limit(strip_tags($request->body, 200));
        $validatedData['published_at']=now();

        try{
            Post::create($validatedData);
            return redirect('/dashboard/posts')->with('success', 'Artikel baru berhasil ditambahkan');  
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'silakan cek kembali');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('dashboard.post.show', [
            'posts' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit', [
            'post' => $post,
            'categories'=> Category::all()
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $rules =[
            'title' =>'required|max:255',
            // 'slug' => 'required|unique:posts',
            'category_id' =>'required',
            'body'=>'required',
            'img_blog'=>'image|file|max:1024'
        ];
        
        $validatedData = $request->validate($rules);
           
        if($request->file('img_blog')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['img_blog']= $request->file('img_blog')->store('assets/image');
        }

        $validatedData['slug']= Str::slug($request->title);;
        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= Str::limit(strip_tags($request->body, 200));

        // var_dump($validatedData);
        // die();

        Post::where('id', $post->id)
        ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Artikel baru berhasil diubah');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->img_blog){
            Storage::delete($post->img_blog);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Artikel berhasil dihapus');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}

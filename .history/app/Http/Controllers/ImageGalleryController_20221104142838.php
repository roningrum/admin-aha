<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard.image.gallery',[
        //     'gallery'=>ImageGallery::where('user_id',auth()->user()->id)->get(),
        // ]);
        return view('dashboard.image.image',[
            'gallery'=>ImageGallery::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.image.upload');
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
        $validatedData = $request ->validate([
            'title' => 'required',
            'image'=>'image|file|max:5024',
        ]);
        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('assets/image', 'public');
        }
        $validatedData['user_id']= auth()->user()->id;
        ImageGallery::create($validatedData);
        return redirect('dashboard/galeri')->with('success', 'Gambar berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ImageGallery $imageGallery)
    {
        //
        return view('dashboard.image.gallery',[
            'image'=>$imageGallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = ImageGallery::findOrFail($id);
        return view('dashboard.image.edit',[
            'image'=>$item
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules =[
            'title' =>'required|max:255',
            'image'=>'image|file|max:5024'
        ];

        $validatedData = $request->validate($rules);
           
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('assets/image', 'public');
        }

        $validatedData['user_id']= auth()->user()->id;

        // var_dump($validatedData);
        // die();

        ImageGallery::where('id', $id)->update($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Gambar berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = ImageGallery::find($id);
        Storage::delete('public/'.$delete->image);
        // @unlink($image_path);

        ImageGallery::where("id", $delete->id)->delete();
        // Storage::delete($image_path);
        // Storage::disk('local')->delete('public', $delete->image);
        // $delete->delete();
        // $delete = ImageGallery::findOrFail($id);
        // if(Storage::delete($delete->image)){
        //     $delete -> delete();
        // }
        // ImageGallery::destroy($id);
        return redirect('/dashboard/galeri')->with('success', 'Artikel berhasil dihapus');
    }
}

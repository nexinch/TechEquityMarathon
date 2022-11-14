<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Activity;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        $image = Activity::latest()->take(3)->get();
        
        return view('maincomponent.gallery', compact('galleries', 'image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maincomponent.galleries');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=> 'sometimes',
            'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp',
        ]);
        
        $gallery = Gallery::create([
            'title' => $request->title,
            'image' => $request->image->store('uploads/gallery', 'public_resources'),
            'user_id' => Auth::user()->id,
        ]);

        Toastr::success('Image Created Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('gallery.index', compact('gallery'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::where('id', $id)->firstOrFail();

        Storage::delete([$gallery->image]);

        $gallery->delete();

        Toastr::success('Image Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('gallery.index');
    }
}

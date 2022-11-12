<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(9);

        return view('admin.news.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title'=> 'required',
            'description' => 'required',
            'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp',
        ]);
        
        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image->store('uploads/news', 'public_resources'),
            'user_id' => Auth::user()->id,
        ]);
        
        $blog->update([
            'slug' => Str::slug($request->title).'-'.$blog->id
        ]);

        Toastr::success('Article Created Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('news.show', $blog->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('admin.news.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('admin.news.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'image' => 'nullable|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp',
        ]);
        
        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title).'-'.$blog->id
        ]);

        if($request->file('image')) {
            $blog->update([
                'image' => $request->image->store('uploads/news', 'public_resources'),
            ]);
        }

        Toastr::success('Article Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('news.show', $blog->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        foreach ($blog->comments as $comment) {
            $comment->delete();
        }

        Storage::delete([$blog->image, $blog->document]);

        $blog->delete();

        Toastr::success('Article Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('news.index');
    }
}

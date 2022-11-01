<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            // "blog" => Blog::all()
            "blog" => Blog::latest()->get()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('post', [
            "title" => "Single Post",
            // "post" => Blog::find($slug)
            "post" => $blog
        ]);
    }
}

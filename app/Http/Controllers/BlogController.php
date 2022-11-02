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
            "title" => "All Blog",
            "active" => "blog",
            // "blog" => Blog::all()
            "blog" => Blog::latest()->get()
            // "blog" => Blog::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "blog",
            // "post" => Blog::find($slug)
            "post" => $blog
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    //
    public function index()
    {
        // $blog = Blog::latest();

        // if (request('search')) {
        //     $blog->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In. ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By. ' . $author->name;
        }

        return view('blog', [
            "title" => "All Blog" . $title,
            "active" => "blog",
            // "blog" => Blog::all()
            // "blog" => Blog::latest()->get()
            // "blog" => Blog::latest()->filter(Request(['search', 'category', 'author']))->get()
            "blog" => Blog::latest()->filter(Request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // "blog" => $blog->get()
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

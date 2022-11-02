<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
        "name" => "Alvyn Papalia"
    ]);
});


Route::get('/blog', [BlogController::class, 'index']);

// 
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post $category->name",
        "active" => "blog",
        'blog' => $category->blog->load('category', 'author'),
        'category' => $category->name
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Blog Categories',
        "active" => "blog",
        'categories' => Category::all()
    ]);
});


// 
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Post by : $author->name",
        "active" => "blog",
        // 'blog' => $author->blog,
        'blog' => $author->blog->load('category', 'author'),
    ]);
});

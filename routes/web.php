<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function() {

    // $posts = Post::with('category', 'author')->latest()->get();

    return view('posts', ['title' => 'Blogs', 'posts' => Post::all()]);
});

Route::get('/posts/{id}', function(Post $id) {

    return view('post', ['title' => 'Single Post', 'post' => $id]);
});

Route::get('/author/{user:username}', function(User $user) {

    // $posts = $user->posts->load(['category', 'author']);

    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category}', function(Category $category) {

    // $posts = $category->posts->load(['category', 'author']);

    return view('posts', ['title' => count($category->posts) . ' Articles Category of ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About', 'nama' => 'Misono Mika']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});

// Route::get('/tambah-user', PenggunaController::class, 'index');
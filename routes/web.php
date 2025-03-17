<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{id}', function($id) {

    $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About', 'nama' => 'Misono Mika']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});

// Route::get('/tambah-user', PenggunaController::class, 'index');
<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use PharIo\Manifest\Author;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// tampilkan semua post
Route::get('/posts', [PostsController::class, 'index'])->name('posts');

// tampilkan post yang di pilih
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('post');

// Tampilkan post berdasarkan username author
Route::get('/author/{user:username}', [PostsController::class, 'indexByAuthor']);

// Tampilkan post berdasarkan kategori
Route::get('/category/{category}', [PostsController::class, 'indexByCategory']);

// Route::get('/category/{category}', function(Category $category) {

//     return view('posts', ['title' => count($category->posts) . ' Articles Category of ' . $category->name, 'posts' => $category->posts]);
// });

Route::get('/about', function() {
    return view('about', ['title' => 'About', 'nama' => 'Misono Mika']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});
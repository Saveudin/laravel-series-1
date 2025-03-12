<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function() {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About', 'nama' => 'Misono Mika']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});

// Route::get('/tambah-user', PenggunaController::class, 'index');
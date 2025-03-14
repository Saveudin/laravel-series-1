<?php

use Illuminate\Support\Arr;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Misono Mika',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, ipsam distinctio temporibus officia repellat autem. Quos dolore doloribus ex, nulla consectetur tempora sint cum pariatur quia aspernatur, minus aut ratione!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Onikata Kayoko',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae eveniet consequatur quaerat, iusto sunt vel possimus doloremque esse, dignissimos quisquam iure consectetur odit dolorem. Repellendus quia accusantium est numquam?'
        ]
    ]]);
});

Route::get('/posts/{id}', function($id) {
    $posts = [[
        'id' => 1,
        'title' => 'Judul Artikel 1',
        'author' => 'Misono Mika',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, ipsam distinctio temporibus officia repellat autem. Quos dolore doloribus ex, nulla consectetur tempora sint cum pariatur quia aspernatur, minus aut ratione!'
    ],
    [
        'id' => 2,
        'title' => 'Judul Artikel 2',
        'author' => 'Onikata Kayoko',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae eveniet consequatur quaerat, iusto sunt vel possimus doloremque esse, dignissimos quisquam iure consectetur odit dolorem. Repellendus quia accusantium est numquam?'
    ]];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About', 'nama' => 'Misono Mika']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});

// Route::get('/tambah-user', PenggunaController::class, 'index');
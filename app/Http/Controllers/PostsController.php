<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request('search')){
            $posts = Post::with('category', 'author')->where('title', 'like', '%' . request('search') . '%')->get();
        }
        else{
            $posts = Post::with('category', 'author')->get();
        }
        return view('posts', ['title' => 'Blog', 'posts' => $posts]);
    }

    public function indexByAuthor(User $user){
        $posts = $user->posts;
        return view('posts', ['title' => 'Articles By '. $user->name, 'posts' => $posts]);
    }

    public function indexByCategory(Category $category){
        return view('posts', ['title' => 'Articles Category of ' . $category->name, 'posts' => $category->posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

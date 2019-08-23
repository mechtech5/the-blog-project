<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context =  ['posts' => $posts]
        return view('admin.posts.index', $context);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        return redirect('admin.posts');
    }

    public function show(Post $post)
    {
        $context = ['post' => $post];
        return view('admin.posts.show', $context);
    }

    public function edit(Post $post)
    {
        $context = ['post' => $post];
        return view('admin.posts.edit', $context);
    }

    public function update(Post $post)
    {
        return redirect('admin.posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('admin.posts');
    }
}

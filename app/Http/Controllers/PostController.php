<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return inertia('Home', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function show($id)
    {
        return inertia('Post', [
            'post' => Post::findOrFail($id)
        ]);
    }
}

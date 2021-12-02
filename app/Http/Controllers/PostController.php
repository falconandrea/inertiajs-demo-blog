<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return inertia('Home', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return inertia('Post', [
            'post' => $post,
            'comments' => $post->comments
        ]);
    }
}

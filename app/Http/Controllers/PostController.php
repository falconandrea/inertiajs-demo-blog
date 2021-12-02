<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Request;

class PostController extends Controller
{
    public function index()
    {
        return inertia('Home', [
            'posts' => Post::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('title', 'like', '%' . $search . '%');
                })
                ->latest()
                ->paginate(3)
                ->withQueryString(),
            'filters' => Request::only(['search'])
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

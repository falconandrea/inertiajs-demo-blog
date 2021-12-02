<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|max:255|required',
            'comment' => 'required|string',
            'post_id' => 'required|integer|exists:posts,id'
        ]);

        Post::findOrFail($data['post_id'])->comments()->create($data);

        return redirect('/post/' . $data['post_id']);
    }
}

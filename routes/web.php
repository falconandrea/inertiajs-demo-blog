<?php

use App\Models\Post;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('Home', [
        'posts' => Post::latest()->get(),
    ]);
});

Route::get('/post/{id}', function ($id) {
    $posts = Inertia::getShared('posts');
    $post = Arr::where($posts, function ($value, $key) use ($id) {
        return $value['id'] == $id;
    });
    return inertia('Post', [
        'post' => reset($post)
    ]);
});

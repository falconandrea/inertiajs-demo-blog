<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PostController::class, 'index']);
Route::get('/about', function () {
    return Inertia('About');
});
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/comments', [CommentController::class, 'store']);

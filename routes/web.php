<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/comments', [CommentController::class, 'store']);

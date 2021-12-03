<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PostController::class, 'index']);
Route::get('/about', function () {
    return Inertia('About');
});
Route::get('/post', [PostController::class, 'create'])->middleware('auth');
Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::patch('/post/{id}', [PostController::class, 'update'])->middleware('auth');
Route::post('/post', [PostController::class, 'store'])->middleware('auth');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware('auth');

Route::post('/comments', [CommentController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("post",[PostController::class, 'index'])->name("post.index");
Route::get("/post/create", [PostController::class, 'create'])->name("post.create");
Route::post("/post/store", [PostController::class, 'store'])->name("post.store");
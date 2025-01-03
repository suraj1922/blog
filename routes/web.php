<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("post",[PostController::class, 'index'])->name("post.index");
// Route::get("/post/create", [PostController::class, 'create'])->name("post.create");
// Route::post("/post/store", [PostController::class, 'store'])->name("post.store");

Route::get("user",[UserController::class, 'getUser']);
Route::get("about", [UserController::class, 'aboutUser']);
Route::get("name/{name}",[UserController::class, 'getUserName']);
Route::get('admin',[UserController::class,'adminlogin']);

// Route::get('/testMe', function () {
//     return view('testMe');
// });

Route::get('testMe',[TestController::class, 'testMe']);
Route::get('admin-home',[TestController::class, 'adminHome']);
Route::get('user-about/{name}',[TestController::class, 'userAbout']);

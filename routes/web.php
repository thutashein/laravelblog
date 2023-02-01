<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::get('/', [BlogController::class, "index"]);
Route::get("/blogs/{blog:slug}", [BlogController::class, "show"])->where("id", "[A-z\d\-]+");
Route::get("/categories/{category:slug}", [CategoryController::class, "index"])->where("id", "[A-z\d\-]+");
Route::get("/userblog/{userBlog}", [UserController::class, "index"])->where("id", "[A-z\d\-]+");

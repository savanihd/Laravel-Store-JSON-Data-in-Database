<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("products/create", [ProductController::class, "create"]);
Route::get("products/search", [ProductController::class, "search"]);

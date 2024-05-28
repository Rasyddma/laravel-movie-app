<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function () {
    return view('product');
});

Route::get('movies', function () {
    return view('movies.index');
});

Route::get('genres', function () {
    return view('genres.index');
});

Route::get('reviews', function () {
    return view('reviews.index');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);

Route::get('/reviews', [ReviewController::class, 'index']);
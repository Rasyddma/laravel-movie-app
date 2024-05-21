<?php

use App\Http\Controllers\reviewController;
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

Route::get('Genres', function () {
    return view('Genres.pilihan');
});

Route::get('reviews', function () {
    return view('reviews.penilaian');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/Genres', [GenreController::class, 'pilihan']);

Route::get('/reviews', [reviewController::class, 'penilaian']);
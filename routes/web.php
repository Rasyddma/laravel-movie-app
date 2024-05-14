<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
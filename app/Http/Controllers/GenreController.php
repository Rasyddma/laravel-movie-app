<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function pilihan()
    {
        $Genre = new Genre();
        $Genres = $Genre->getAllGenres();

        return view('Genres.pilihan', ['Genres' => $Genres]);
    }
}

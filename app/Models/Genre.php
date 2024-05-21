<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $Genres = [
        [
            'id' => 01,
            'Name' => 'Jojo Bizarre Adventure',
            'Gambar2' => 'movie-01.jpg',
            'Deskription' => 'Jojo Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength'
        ],

        [
            'id' => 02,
            'Name' => 'Noragami',
            'Gambar2' => 'movie-02.jpg',
            'Deskription' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        
        [
            'id' => 03,
            'Name' => 'Wind Breaker',
            'Gambar2' => 'movie-03.jpg',
            'Deskription' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ],
        
        
        [
            'id' => 04,
            'Name' => 'Spy X Family',
            'Gambar2' => 'movie-04.jpg',
            'Deskription' => '
            A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together.'
        ],
    ];

    public function getAllGenres()
    {
        return $this->Genres;
    }
}

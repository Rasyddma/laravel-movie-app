<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 01,
            'Movie' => 'Jojo Bizarre Adventure',
            'Gambar3' => 'movie-01.jpg',
            'user'  =>  'Ayass',
            'rating' => '7,7  IMDb',
            'Date' => '16-10-2021'
        ],

        [
            'id' => 02,
            'Movie' => 'Noragami',
            'Gambar3' => 'movie-02.jpg',
            'user'  =>  'Saepudin',
            'rating' => '9,6  iQYI',
            'Date' => '16-10-2021'

        ],
        
        [
            'id' => 03,
            'Movie' => 'Wind Breaker',
            'Gambar3' => 'movie-03.jpg',
            'user'  =>  'kina',
            'rating' => '7,7 IMDb',
            'Date' => '10-8-23'
            
        ],
        
        
        [
            'id' => 04,
            'Movie' => 'Spy X Family',
            'Gambar3' => 'movie-04.jpg',
            'user'  =>  'Asha',
            'rating' => '8,3 IMDb',
            'Date' => '12-3-2023'
        ],
    ];

    public function getAllreviews()
    {
        return $this->reviews;
    }
}

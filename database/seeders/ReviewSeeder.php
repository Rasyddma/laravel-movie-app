<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run() :void
    {
        Review::create([
            'id' => 01,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user'  =>  'Ayass',
            'rating' => '7,7  IMDb',
            'date' => '16-10-2021'
        ]);

        Review::create([
            'id' => 02,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user'  =>  'Rika',
            'rating' => '9,6  iQYI',
            'date' => '16-10-2021'
        ]);
         
        Review::create([
            'id' => 03,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user'  =>  'kina',
            'rating' => '7,7 IMDb',
            'date' => '10-8-23'
        ]);

        Review::create([
            'id' => 04,
            'title' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'user'  =>  'Asha',
            'rating' => '8,3 IMDb',
            'date' => '12-3-2023'
        ]);
        Review::create([
            'id' => 04,
            'title' => 'Naruto',
            'poster' => 'naruto-1.jpg',
            'user'  =>  'sadi',
            'rating' => '8,3 IMDb',
            'date' => '18-3-2023'
        ]);
    }
}

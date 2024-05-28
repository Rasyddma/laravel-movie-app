<?php

namespace Database\Seeders;


use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run() :void
    {
        Genre::create([
              'id' => 1,
              'name' => 'Jojo Bizarre Adventure',
              'description' => 'Jojo Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength'
        ]);

        Genre::create([
            'id' => 2,
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ]);

        Genre::create([
            'id' => 3,
            'name' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ]);

        Genre::create([
            'id' => 4,
            'name' => 'Spy X Family',
            'description' => 'A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together.'
        ]);

        Genre::create([
            'id'=>5,
            'name' => 'Animasi',
            'description' => 'Kisah dalam SpongeBob Squarepants berpusat pada kehidupan makhluk laut di kota Bikini Bottom, nama yang diambil dari bebatuan karang Bikini Atoll di Samudera Pasifik',
        ]);

       
    }
}

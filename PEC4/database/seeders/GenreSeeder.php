<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
       {
           $genres = [
               'Sandbox',
               'Adventure',
               'Roguelike',
               'Racing',
               'Fighting',
               'Puzzle',
               'Terror',
               'FPS',
               'MOBA',
               'Arcade',
           ];
           foreach ($genres as $genre) {
               Genre::firstOrCreate(['name' => $genre]);
           }
       }
}

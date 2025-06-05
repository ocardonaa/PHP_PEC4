<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Videogame;
use App\Models\Genre;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = Genre::factory()->count(10)->create();
        Videogame::factory()
            ->count(40)
            ->create()
            ->each(function ($videogame) use ($genres) {
                $videogame->genres()->attach(
                    $genres->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
    }
}

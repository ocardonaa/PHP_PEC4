<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Videogame;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videogame>
 */
class VideogameFactory extends Factory
{
    protected $model = Videogame::class;
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'developer' => $this->faker->word,
            'release_year' => $this->faker->year(),
            'game_mode' => $this->faker->randomElement(['un jugador', 'multijugador']),
            'platform' => $this->faker->randomElement(['PlayStation', 'Xbox', 'Nintendo Switch', 'PC', 'Arcade Machine']),
            'cover_image' => 'cover/' . $this->faker->word . '.webp',
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'title' => $this->faker->unique()->word,
            'name' => $this->faker->name($gender),
            'console' => $this->faker->randomElement(["PlayStation 5", "Xbox Series X|S", "Nintendo Switch", "PlayStation 4", "Xbox One", "Nintendo 3DS", "PlayStation Vita", "Wii U", "PlayStation 3", "Xbox 360"]),
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomFloat(1,20,30,40),
            'image' => $this->faker->randomElement(['game1.jpg', 'game2.jpg', 'game3.jpg', 'game4.jpg']),
            'pegi' => $this->faker->randomElement(['3','7','12','16','18']),
        ];
    }
}

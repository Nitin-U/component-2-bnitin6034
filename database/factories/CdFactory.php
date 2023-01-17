<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cd;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cd>
 */
class CdFactory extends Factory
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
            'band' => $this->faker->randomElement(["The Beatles", "Led Zeppelin", "The Rolling Stones", "Pink Floyd", "Queen", "U2", "Metallica", "AC/DC", "The Eagles", "Nirvana"]),
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomFloat(1,20,30,40),
            'image' => $this->faker->randomElement(['cd1.jpg', 'cd2.jpg', 'cd3.jpg', 'cd4.jpg']),
            'playlength' => $this->faker->numberBetween($min = 2, $max = 59),
        ];
    }
}
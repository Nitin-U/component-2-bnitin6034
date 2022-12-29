<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    //protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'title' => $this->faker->title,
            'firstname' => $this->faker->firstName($gender),
            'surname' => $this->faker->lastName,
            'price' => $this->faker->randomNumber(2),
            'pages' => $this->faker->randomNumber(3),
            'category' => $this->faker->randomElement(['book', 'cd' ,'game']),
        ];
    }
}

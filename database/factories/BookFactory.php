<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'title' => $this->faker->randomElement(['Oliver Twist', 'Origin of Species', 'A Week with Gandhi', 'A Woman\'s Life', 'Aadhe Adhure', 'Adventures of Sherlock Holmes', 'Adventures of Tom Sawyer', 'Ain - i - Akbari', 'Akbarnama', 'Alice in Wonderland']),
            'firstname' => $this->faker->firstName($gender),
            'surname' => $this->faker->lastName,
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomFloat(1,20,30,40),
            'image' => $this->faker->randomElement(['book1.jpg', 'book2.jpg', 'book3.jpg']),
            'pages' => $this->faker->numberBetween($min = 100, $max = 500),
        ];
    }
}
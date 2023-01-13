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
            'firstname' => $this->faker->firstName($gender),
            'surname' => $this->faker->lastName,
            //'price' => $this->faker->numberBetween($min = 9.99, $max = 99.99),
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomFloat(1,20,30,40),
            'category' => $this->faker->randomElement(['book', 'cd' ,'game']),
        ];
    }

    public function makeBook()
    {
        return $this->state(function (array $attributes) {
            return [
                'title' => $this->faker->randomElement(['Oliver Twist', 'Origin of Species', 'A Week with Gandhi', 'A Woman\'s Life', 'Aadhe Adhure', 'Adventures of Sherlock Holmes', 'Adventures of Tom Sawyer', 'Ain - i - Akbari', 'Akbarnama', 'Alice in Wonderland']),
                'image' => $this->faker->randomElement(['book1.jpg', 'book2.jpg', 'book3.jpg']),
                'pages' => $this->faker->numberBetween($min = 100, $max = 500),
                'category' => 'book',
            ];
        });
    }

    public function makeCd()
    {
        return $this->state(function (array $attributes) {
            return [
                'title' => $this->faker->randomElement(['Led Zeppelin IV', 'Bad', 'Bat Out of Hell', 'Jagged Little Pill', 'Dirty Dancing', 'Falling into You', 'Metallica', 'Let\'s Talk About Love', 'Legend: The Best of Bob Marley & The Wailers', 'Appetite for Destruction']),
                'image' => $this->faker->randomElement(['cd1.jpg', 'cd2.jpg', 'cd3.jpg']),
                'pages' => $this->faker->numberBetween($min = 2, $max = 59),
                'category' => 'Cd',
            ];
        });
    }

    public function makeGame()
    {
        return $this->state(function (array $attributes) {
            return [
                'title' => $this->faker->randomElement(['Call of Duty', 'Half-Life 2', 'Tom Clancy\'s Ghost Recon Advanced Warfighter', 'BioShock', 'Super Mario Galaxy', 'Batman: Arkham Asylum', 'Mass Effect 2', 'Portal 2', 'Dishonored', 'The Last of Us']),
                'image' => $this->faker->randomElement(['game1.jpg', 'game2.jpg', 'game3.jpg']),
                'pages' => $this->faker->randomElement(['3','7','12','16','18']),
                'category' => 'Game',
            ];
        });
    }
}
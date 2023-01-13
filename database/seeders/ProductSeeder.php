<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->makeBook()->count(100)->create();
        Product::factory()->makeCd()->count(100)->create();
        Product::factory()->makeGame()->count(100)->create();
    }
}

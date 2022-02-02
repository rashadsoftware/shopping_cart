<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker as Faker;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
            DB::table('products')->insert([
                'name' => $faker->name(),
                'category'=>'Loyal Keenig',
                'description' => $faker->text(),
                'photo' => rand(1,10).'.jpg',
                'price' => rand(10,150),
                'quantity' => rand(0,15),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodects;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 1; $i < 11; $i++){
            $product = new Prodects;
            $product->name = $faker->name;
            $product->price = '100';
            $product->quentity ='10';
            $product->created_at = $faker->date;
            $product->save();
        }
    }
}

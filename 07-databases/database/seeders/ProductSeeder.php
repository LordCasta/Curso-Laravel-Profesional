<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        Product::factory()->count(20)->create();

//        Product::create([
//            'name' => 'Example',
//            'short_description' => 'lorem ipsum',
//            'description' => 'lorem ipsum dolor sit amet',
//            'price' => 100,
//        ]);
//        Product::create([
//            'name' => 'Example2',
//            'short_description' => 'lorem ipsum 2',
//            'description' => 'lorem ipsum dolor sit amet 2',
//            'price' => 40,
//        ]);
//        Product::create([
//            'name' => 'Example 3',
//            'short_description' => 'lorem ipsum 3',
//            'description' => 'lorem ipsum dolor sit amet 3',
//            'price' => 65,
//        ]);
    }
}

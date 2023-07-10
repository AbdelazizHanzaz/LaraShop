<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Product::factory()->count(10)->create();
        //Product::factory()->count(10)->create();
    }
}

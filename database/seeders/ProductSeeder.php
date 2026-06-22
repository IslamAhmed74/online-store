<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['3', 'red shirt', '400'],
            ['1', 'black hody', '350'],
            ['2', 'blue tshirt', '300']
        ];
        foreach ($products as $product)
            Product::create([
                'category_id' => $product[0],
                'name' => $product[1],
                'p_price' => $product[2]
        ]);
    }
}

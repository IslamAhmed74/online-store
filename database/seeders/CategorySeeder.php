<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['hodies' , 'oversize'],
            ['tshirt' , 'summer'],
            ['shirt' , 'classic']
        ];
        foreach ($categories as $category){
            Category::create([
                'Name' => $category[0],
                'Discription' =>$category[1]
            ]);
        }
    }
}

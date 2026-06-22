<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            ['4', '700', 'pending'],
            ['3', '650', 'completed']
        ];
        foreach ($orders as $order)
            Order::create([
            'user_id' =>$order[0],
            'total_price' => $order[1],
            'status'=> $order[2]
        ]);
    }
}

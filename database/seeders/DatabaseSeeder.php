<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Offices::factory()->count(50)->create();
        \App\Models\employee::factory()->count(500)->create();
        \App\Models\ProductLines::factory()->count(6)->create();
        \App\Models\Products::factory()->count(1500)->create();
        \App\Models\customer::factory()->count(50)->create();
        \App\Models\Payments::factory()->count(50)->create();
        \App\Models\Orders::factory()->count(50)->create();
        \App\Models\OrderDetails::factory()->count(50)->create();
        
    }
}

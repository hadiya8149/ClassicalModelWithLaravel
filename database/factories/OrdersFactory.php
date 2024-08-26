<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = ['shipped', 'processing'];
        return [
            'orderNumber'=>fake()->uuid(),
            'orderDate'=>fake()->date( ),
            'requiredDate'=>fake()->date(),
            'shippedDate'=>fake()->date(),
            'status'=>$status[array_rand($status, 1)],
            'comments'=>fake()->paragraph(),
            'customerNumber'=>\App\Models\customer::inRandomOrder()->first()->customerNumber
        ];
    }
}

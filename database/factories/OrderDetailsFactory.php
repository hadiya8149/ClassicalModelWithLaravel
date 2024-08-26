<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetails>
 */
class OrderDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'productCode'=>\App\Models\Products::inRandomOrder()->first()->productCode,
            'quantityOrdered'=>random_int(1,50),
            'priceEach'=>random_int(200,10000),
            'orderNumber'=>\App\Models\Orders::inRandomOrder()->first()->orderNumber,

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payments>
 */
class PaymentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customerNumber'=>\App\Models\customer::inRandomOrder()->first()->customerNumber,
            'checkNumber'=>fake()->bothify("????-########"),
            'paymentDate'=>fake()->date(),
            'amount'=>random_int(1000, 10000),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customerNumber' => fake()->uuid(),
            'customerName' => fake()->company(),
            'contactLastName' => fake()->lastName(),
            'contactFirstName' => fake()->firstName(),
            'phone' => fake()->phoneNumber(),
            'addressLine1' => fake()->streetAddress(),
            'addressLine2' => fake()->secondaryAddress(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'postalCode' => fake()->postcode(),
            'country' => fake()->country(),
            'salesRepEmployeeNumber' => \App\Models\Employee::inRandomOrder()->first()->employeeNumber,
            'creditLimit' => fake()->randomFloat(2, 10000, 1000000),
        ];
    }
}

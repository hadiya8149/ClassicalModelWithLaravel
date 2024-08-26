<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OfficesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'officeCode' => fake()->unique()->randomNumber(5),
            'city' => fake()->city(),
            'phone' => fake()->phoneNumber(),
            'addressLine1' => fake()->streetAddress(),
            'addressLine2' => fake()->secondaryAddress(),
            'state' => fake()->state(),
            'postalCode' => fake()->postcode(),
            'territory' => fake()->randomElement(['APAC', 'EMEA', 'NA', 'LATAM']),
        ];
    }
}

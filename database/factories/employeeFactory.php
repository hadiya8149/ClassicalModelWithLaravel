<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class employeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employeeNumber'=>fake()->uuid(),
            'lastName'=>fake()->lastName(),
            'firstName'=>fake()->firstName(),
            'extension'=>fake()->bothify('###'),
            'email'=>fake()->email(),
            'officeCode'=>\App\Models\Offices::inRandomOrder()->first()->officeCode,
            // 'reportsTo'=>,
            'jobTitle'=>fake()->jobTitle()

        ];
    }
}

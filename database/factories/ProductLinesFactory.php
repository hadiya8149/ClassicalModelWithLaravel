<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductLinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $productlines =  ['Classical Cars', 'motorcycles', 'bikes', 'luxury cars', 'watches', 'accessories', 'perfumes', 'sports cars', 'sports bike', 'bicycle', 'wheels', 'rings', 'bracelets'];
        return [
        'productLine'=>$productlines[array_rand($productlines, 1)],
        'textDescription'=>fake()->paragraph,
        'htmlDescription'=>fake()->realText(200, 3),
        // 'image'=>fake()->image(public_path('images'), 640, 480)
        'photo'=>public_path("images/3abf9719ea082ce5b12a0d8e6457c528.png")
        ];
    }
}

<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'productCode'=>fake()->uuid(),
            'productName'=>fake()->word(),
            'productLine'=>\App\Models\ProductLines::inRandomOrder()->first()->productLine,
            'productVendor'=>fake()->word(),
            'productDescription'=>fake()->paragraph,
            'quantityInStock'=>rand(100,1000),
            'buyPrice'=>rand(1000,10000),
            'MSRP'=>rand(500,9999)
        ];
    }
}

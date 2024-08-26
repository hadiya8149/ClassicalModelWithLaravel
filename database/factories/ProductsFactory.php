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
            // to get rid of the error seed manually by giving productline
            'productCode'=>fake()->uuid(),
            'productName'=>fake()->word,
            'productLine'=>'bikes',
            'productVendor'=>fake()->word,
            'productDescription'=>fake()->paragraph,
            'quantityInStock'=>rand(100,1000),
            'buyPrice'=>rand(1000,10000),
            'MSRP'=>rand(500,9999)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Enum\Product\Status;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = Category::inRandomOrder()->first() ?? Category::factory()->create();
        $seller   = Seller::inRandomOrder()->first() ?? Seller::factory()->create();

        return [
            'category_id' => $category->id,
            'name'        => $this->faker->randomElement(['Monitor', 'Keyboard', 'Mouse', 'MacBook Pro', 'MacBook Air']),
            'description' => $this->faker->paragraph(),
            'status'      => Status::AVAILABLE,
            'seller_id'   => $seller->id,
        ];
    }
}

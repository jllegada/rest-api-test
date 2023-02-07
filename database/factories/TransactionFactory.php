<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $buyer   = Buyer::inRandomOrder()->first() ?? Buyer::factory()->create();
        $product = Product::inRandomOrder()->first() ?? Product::factory()->create();

        return [
            'buyer_id'   => $buyer->id,
            'product_id' => $product->id,
            'quantity'   => rand(1, 5),
            'price'      => rand(99, 9999),
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buyer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Buyer::factory(5)->create();
        Seller::factory(5)->create();
        Category::factory(5)->create();
        Product::factory(10)->create();
        Transaction::factory(25)->create();
    }
}

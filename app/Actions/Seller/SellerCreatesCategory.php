<?php

namespace App\Actions\Seller;

use App\Models\Category;

class SellerCreatesCategory
{
    public function execute(array $attributes): Category
    {
        $category = Category::create($attributes);

        return $category;
    }
}

<?php

namespace App\Actions\Seller;

use App\Models\Category;

class SellerUpdatesCategory
{
    public function execute(Category $category, array $attributes): Category
    {
        $category->update($attributes);

        return $category;
    }
}

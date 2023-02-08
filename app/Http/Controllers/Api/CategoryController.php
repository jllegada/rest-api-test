<?php

namespace App\Http\Controllers\Api;

use App\Actions\Seller\{SellerCreatesCategory, SellerUpdatesCategory};
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\{StoreRequest, UpdateRequest};
use App\Http\Resources\{CategoryCollection, CategoryResource};
use App\Models\Category;
use Illuminate\Http\{Request, Response};

class CategoryController extends Controller
{
    public function index(Request $request): CategoryCollection
    {
        $categories = Category::query()->get();

        return new CategoryCollection($categories);
    }

    public function store(StoreRequest $request, SellerCreatesCategory $creates): CategoryResource
    {
        $category = $creates->execute($request->validated());

        return new CategoryResource($category);
    }

    public function show(Request $request, Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }

    public function update(UpdateRequest $request, Category $category, SellerUpdatesCategory $updates): CategoryResource
    {
        $category = $updates->execute($category, $request->validated());

        return new CategoryResource($category);
    }

    public function destroy(Request $request, Category $category): Response
    {
        $category->delete();

        return response()->noContent();
    }
}

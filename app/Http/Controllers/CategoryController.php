<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;

class CategoryController extends Controller
{

    public function index(Category $category){
        return Inertia::render('Category', [
            'category_name' => $category->name,
            'products' => Product::query()->where('category_id', $category->id)->get()
        ]);
    }
}

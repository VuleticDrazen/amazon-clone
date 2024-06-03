<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class CategoryController extends Controller
{

    public function index($categoryId, $categoryName): InertiaResponse
    {
        return Inertia::render('Category', [
            'category_name' => $categoryName,
            'products' => Product::query()->where('category_id', $categoryId)->get()
        ]);
    }

    public static function getAll()
    {
        $url = config('app.rural_shop_cms_url') . '/categories';
        $response = Http::get($url);

        return json_decode($response->body(), true)['data'];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class CategoryController extends Controller
{

    public function index($categoryId, $categoryName): InertiaResponse
    {
        $url = config('app.rural_shop_cms_url') . '/ads?category_id=' . $categoryId;
        $ads = Http::get($url);

        return Inertia::render('Category', [
            'category_name' => $categoryName,
            'products' => json_decode($ads, true)['data']
        ]);
    }

    public static function getAll()
    {
        $url = config('app.rural_shop_cms_url') . '/categories';
        $response = Http::get($url);

        return json_decode($response->body(), true)['data'];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search', null);
        $page = $request->input('page', 1);
        $perPage = 9;
        $url = config('app.rural_shop_cms_url') . '/ads?page=' . $page . '&search=' . $search . '&per_page=' . $perPage;
        $ads = Http::get($url);

        return Inertia::render('Ads/Index', [
            'products' => json_decode($ads),
            'search' => $search,
        ]);
    }

    public static function randomAds()
    {
        $url = config('app.rural_shop_cms_url') . '/ads';
        $response = Http::get($url);

        $ads = json_decode($response->body(), true)['data'];

        shuffle($ads);

        return array_slice($ads, 0, 8);

    }

    public static function getByCategoryId($categoryId)
    {
        $url = config('app.rural_shop_cms_url') . '/ads' . '&category_id=' . $categoryId;
        $response = Http::get($url);
        $ads = json_decode($response->body(), true)['data'];
        dd($ads);
    }
    public function show(Product $product)
    {
        return Inertia::render('Product', [
            'product' => $product
        ]);
    }
}

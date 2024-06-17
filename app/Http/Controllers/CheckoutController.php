<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    public function index()
    {
        return Inertia::render('Checkout');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $orderingUrl = config('app.rural_shop_ordering_url') . '/orders';
        $response = Http::post($orderingUrl, $request->validated());

        if ($response->successful()) {
            dd($response);
        } else {
            dd($response->body(), $response->status());
        }
    }
}

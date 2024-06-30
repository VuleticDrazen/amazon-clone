<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    public function index()
    {
        return Inertia::render('Checkout');
    }

    public function store(CheckoutRequest $request): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        $orderingUrl = config('app.rural_shop_ordering_url') . '/orders';
        $response = Http::post($orderingUrl, $request->validated());


        if ($response->successful()) {
            return response()->json(['message'=>'Uspješno ste kreirali porudžbinu!']);
        } else {
            return response()->json(['message'=>'Došlo je do greške.'], 500);
        }
    }

}

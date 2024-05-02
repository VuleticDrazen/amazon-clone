<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class AddressController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Address/Index');
    }

    /**
     * @return Response
     */
    public function create(): Response
    {
        return Inertia::render('Address/Add');
    }

    /**
     * @param StoreAddressRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAddressRequest $request): RedirectResponse
    {
        Address::query()->create($request->validated());

        return redirect()->route('address.index');
    }

    /**
     * @param Address $address
     * @return void
     */
    public function destroy(Address $address): void
    {
        $address->delete();
    }
}

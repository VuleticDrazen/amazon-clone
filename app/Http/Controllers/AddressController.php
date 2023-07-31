<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AddressController extends Controller
{
    public function index()
    {
        return Inertia::render('Address/Index');
    }

    public function create()
    {
        return Inertia::render('Address/Add');
    }
}

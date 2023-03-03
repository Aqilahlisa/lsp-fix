<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $product = Product::all();
        return view('welcome', compact(['product']));
    }
}

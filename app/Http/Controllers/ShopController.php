<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        // pagination
        $products = Product::paginate(6);
        return view('shop.index', compact('products'));
    }

    public function show()
    {

        return view('shop.show');
    }
}

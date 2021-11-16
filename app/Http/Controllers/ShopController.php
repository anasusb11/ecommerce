<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($id = null)
    {
        $categories = Category::all();

        // $products = Product::all();
        // pagination
        $products = Product::paginate(6);
        return view('shop.index', compact('products', 'categories', 'id'));
    }

    public function show($id)
    {

        $product = Product::findOrFail($id);
        return view('shop.show', compact('product'));
    }
    public function category($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(6);
        return view('shop.index', compact('products', 'categories', 'id'));
    }
}

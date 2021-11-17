<?php

namespace App\Http\Controllers;

use App\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('cart.index', compact('carts'));
    }

    public function store(Request $request)
    {

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => 1
        ]);

        return redirect('/cart');
    }

    public function update(Request $request, $id)
    {

        Cart::where('id', $id)->update([
            'qty' => $request->quantity
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}

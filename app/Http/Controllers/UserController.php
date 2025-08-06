<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function showProducts()
    {
        $products = json_decode(File::get(public_path('data/products.json')), true);
        return view('product', compact('products'));
    }

    public function addToCart($id)
    {
        $products = session()->get('products', []);
        $cart = session()->get('cart', []);

        if (isset($products[$id])) {
            $cart[$id] = $products[$id];
            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        return response()->json($cart);
    }

    public function checkout()
    {
        session()->forget('cart');
        return "Checkout berhasil!";
    }
}

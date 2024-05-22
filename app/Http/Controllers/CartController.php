<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('cart.index');
    }

    public function showCart()
    {
        $customer = auth()->guard('customer')->user();
        $cartItems = Cart::where('customer_id', $customer->id)->get();

        return view('cart.index', compact('cartItems'));
    }
}

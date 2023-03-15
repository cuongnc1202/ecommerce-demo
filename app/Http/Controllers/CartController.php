<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function view(Product $prod)
    {
       return view('cart.view');
    }
    public function add(Product $prod)
    {
        $cart = new Cart();
        dd($cart->add($prod));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
    }
    public function store(Request $request)
    {
        Cart::create([
            'price'=> $request->price
        ]);
    }
}

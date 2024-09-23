<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Notifications\CartNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductCard extends Component
{

    public $price = 120;
    public function store ()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        $cart = Cart::create([
            'price' => $this->price
        ]);
        $user = Auth::user();
        $user->notify(new CartNotification($cart));
        request()->session()->flash('success','product added to cart');
    }
    public function render()
    {
        return view('livewire.product-card');
    }
}

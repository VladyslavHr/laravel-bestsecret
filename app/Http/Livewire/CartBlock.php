<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Http\Services\Cart;

class CartBlock extends Component
{

    public $products;

    public function render()
    {
        $this->cart = session('cart', []);
        $this->products = Product::whereIn('id', array_keys($this->cart))
        ->get(['id', 'code', 'title', 'price', 'old_price', 'sale', 'sub_category', 'amount', 'image_default']);
        debug($this->products);

        return view('livewire.cart-block');
    }
}

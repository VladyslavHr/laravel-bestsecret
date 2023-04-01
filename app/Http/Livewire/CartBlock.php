<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Services\Cart;

class CartBlock extends Component
{

    public $products;
    public $product;
    public $totalPrice = 0;
    public $savingMoney = 0;
    public $oldTotalPrice = 0;
    public $deliverySum = 0;
    public $productCount = 1;

    public function render()
    {
        $this->cart = session('cart', []);
        $this->products = Product::whereIn('id', array_keys($this->cart))
        ->get(['id', 'code', 'title', 'price', 'old_price', 'sale', 'sub_category', 'amount', 'image_default']);
        // debug($this->products);
        // debug($this->cart);

        $this->totalPrice = Cart::getTotalSum();
        $this->savingMoney = Cart::getSavingMoney();
        $this->oldTotalPrice = Cart::getOldSum();
        $this->deliverySum = Cart::getDeliverySum();

        return view('livewire.cart-block');
    }

    public function changeCount($id, $action)
    {

        // $this->product = Product::where('id', $id);

        // debug($this->product);

        $this->productCount = (int)$this->productCount;

        $this->productCount += (int)$action;

        if ($this->productCount < 0) {
            $this->productCount = 0;
        }

        // if ($this->productCount >= $this->product->amount) {
        //     $this->productCount = $this->product->amount;
        // }
    }

    public function removeItem($id)
    {
        $this->cart = session('cart', []);

        unset($this->cart[$id]);

        session(['cart' => $this->cart]);

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
    }

    public function removeCart()
    {
        session()->forget('cart');

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
    }
}

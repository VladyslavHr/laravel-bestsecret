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
        $this->products = Cart::getProducts();
        $this->totalPrice = Cart::getTotalSum();
        $this->savingMoney = Cart::getSavingMoney();
        $this->oldTotalPrice = Cart::getOldSum();
        $this->deliverySum = Cart::getDeliverySum();

        return view('livewire.cart-block');
    }

    public function changeCount($productId, $productSize, $action)
    {
        $product = Product::find($productId);
        $minCount = 1;
        $maxCount = $product->amount ?? 1;
        $currentCount = Cart::getProductSizeCount($productId, $productSize);

        $expectedCount = $currentCount + $action;

        if ($expectedCount <= $maxCount && $expectedCount >= $minCount) {
            Cart::addProduct($productId,  $action, $productSize);
        }

    }

    public function removeItem($id)
    {
        Cart::removeProduct($id);

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
    }

    public function removeCart()
    {
        session()->forget('cart');

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
    }
}

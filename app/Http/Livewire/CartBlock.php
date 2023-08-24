<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Product,Size};
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
    public $totalPricePay = 0;
    // public $productSum = 0;

    public function render()
    {
        $this->products = Cart::getProducts();
        debug($this->products);
        $this->totalPrice = Cart::getTotalSum();
        $this->savingMoney = Cart::getSavingMoney();
        $this->oldTotalPrice = Cart::getOldSum();
        $this->deliverySum = Cart::getDeliverySum();
        $this->totalPricePay = Cart::getTotalSumPay();
        // $this->productSum = Cart::getProductSum();

        return view('livewire.cart-block');
    }

    public function changeCount($productId, $productSizeId, $action)
    {
        // debug($productId, $productSizeId, $action);
        $product = Product::find($productId);
        $productSize = Size::find($productSizeId);
        // debug($product, $productSize);
        $minCount = 1;
        // $maxCount = $product->amount ?? 1;
        $maxCount = $productSize->quantity;
        $currentCount = Cart::getProductSizeCount($productId, $productSizeId);
        // debug($currentCount);

        $expectedCount = $currentCount + $action;
        // debug($expectedCount);

        if ($expectedCount <= $maxCount && $expectedCount >= $minCount) {
            debug('if add product');
            Cart::addProduct($productId,  $action, $productSizeId);
        }

    }

    // public function removeItem($id)
    // {
    //     Cart::removeProduct($id);

    //     $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
    // }

    public function removeItem($productId, $sizeId)
    {
        Cart::removeProduct($productId, $sizeId);

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
        // $this->products = Cart::getProducts();

    }

    public function removeCart()
    {
        session()->forget('cart');

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());
    }

}

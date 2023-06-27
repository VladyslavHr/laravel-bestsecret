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
        // Необходимо обновить $this->products и добавить $this->productCount для каждого продукта
        $this->products = Cart::getProducts()->map(function ($product) {
            $product->productCount = $this->productCount;
            // return $product;
        });
        // $this->products = Cart::getProducts();
        $this->totalPrice = Cart::getTotalSum();
        $this->savingMoney = Cart::getSavingMoney();
        $this->oldTotalPrice = Cart::getOldSum();
        $this->deliverySum = Cart::getDeliverySum();

        return view('livewire.cart-block');
    }

    public function changeCount($productId, $key, $action)
    {
        $cart = session('cart', []);

        if (!isset($cart[$productId][$key])) {
            $cart[$productId][$key] = [];
        }

        if (!is_array($cart[$productId][$key])) {
            $cart[$productId][$key] = ['productCount' => $cart[$productId][$key]];
        }

        if (isset($cart[$productId][$key]['productCount'])) {
            $productCount = $cart[$productId][$key]['productCount'];
        } else {
            $productCount = 0;
        }

        $newCount = $productCount + (int) $action;

        if ($newCount < 0) {
            $newCount = 0;
        }

        // Получите максимальное количество продукта из базы данных
        $product = Product::find($productId);
        $maxCount = $product->amount ?? 1; // Учесть значение null и считать его как 1

        if ($newCount > $maxCount) {
            $newCount = $maxCount;
        }

        $cart[$productId][$key]['productCount'] = $newCount;
        session(['cart' => $cart]);
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

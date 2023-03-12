<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Product};
use App\Services\Cart;

class AddToCartButton extends Component
{
      // public ?int $productCartCount;
    // public $product_count = [];
    public $addToCartCount = 1;
    public $product;
    public bool $showCartLink = false;

    public function addToCart(): void
    {
        $this->changeCount(0);

        $cart = Cart::addProduct($this->product->id, 1);

        $this->productCartCount = $cart[$this->product->id];

        $this->showCartLink = $this->productCartCount > 0;

        // Cart::getTotalCount()

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());

    }

    public function changeCount($action)
    {
        $this->addToCartCount = (int)$this->addToCartCount;

        $this->addToCartCount += $action;

        if ($this->addToCartCount < 0) {
            $this->addToCartCount = 0;
        }

        if ($this->addToCartCount >= $this->product->amount) {
            $this->addToCartCount = $this->product->amount;
        }
    }

    public function mount()
    {
        $this->productCartCount = Cart::getProductCount($this->product->id);

        $this->showCartLink = $this->productCartCount > 0;
    }

    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}

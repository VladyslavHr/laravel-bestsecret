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
    public $sizes;
    public $choosenSize = 'choose';
    public bool $showCartLink = false;
    public $sizesSelectClass = '';

    public function addToCart(): void
    {
        if ($this->choosenSize === 'choose') {
            $this->sizesSelectClass = 'is-invalid';
            return;
        }

        $this->changeCount(0);

        Cart::addProduct($this->product->id, 1, $this->choosenSize);

        $this->productCartCount = Cart::getProductCount($this->product->id);

        $this->showCartLink = $this->productCartCount > 0;

        // Cart::getTotalCount()

        $this->emit('cartTotalCountUpdated', Cart::getTotalCount());

    }

    public function updatedChoosenSize($value)
    {
        if ($value !== 'choose') {
            $this->sizesSelectClass = '';
        }
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
        debug($this->choosenSize);
        return view('livewire.add-to-cart-button');
    }
}

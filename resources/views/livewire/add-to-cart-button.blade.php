<div>
    <div class="add-to-cart-button-wrap">
        <button class="btn position-relative add-to-cart-button " type="button"
        {{-- @if ($product->quantity <= 0) disabled @endif --}}
            wire:click="addToCart">
            ADD TO CART
            <span class="cart-count-porduct">{{ $productCartCount }}</span>
        </button>
        {{-- {{ $cart[$product->id] ?? '' }} --}}

        @if ($showCartLink)
            <a href="{{ route('carts.index') }}" class="btn product-show-link-to-card" >
                CART
                <span class="cart-count-porduct">{{ $cart[$product->code] ?? '' }}</span>
            </a>
        @endif
    </div>
</div>

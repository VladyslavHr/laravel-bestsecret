<div>
    {{-- <select wire:model="choosenSize" class="form-select my-3 {{ $sizesSelectClass }}">
        <option value="choose">Select your size</option>
        @foreach ($sizes as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select> --}}

    <select wire:model="choosenSize" class="form-select my-3 {{ $sizesSelectClass }}">
        <option value="choose">Select your size</option>
        @foreach ($productSizes as $item)
            <option value="{{ $item->id }}">{{ $item->size }}</option>
        @endforeach
    </select>

    <div class="add-to-cart-button-wrap">
        <button class="btn position-relative add-to-cart-button" type="button"
        {{-- @if ($product->quantity <= 0) disabled @endif --}}
            wire:click="addToCart">
            ADD TO CART
            <span class="cart-count-porduct">{{ $productCartCount }}</span>
        </button>
        {{-- {{ $cart[$product->id] ?? '' }} --}}

        @if ($showCartLink)
            <a href="{{ route('carts.index', ['locale' => app()->getLocale()]) }}" class="btn product-show-link-to-card" >
                CART
                <span class="cart-count-porduct">{{ Cart::getTotalCount() }}</span>
            </a>
        @endif
    </div>
</div>

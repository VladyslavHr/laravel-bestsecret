<div>
    <div class="row">
        @if (Cart::isEmpty())
        <div class="py-5 text-center">
            <h1 class="pb-5">Your cart is empty, got the shop to full your cart.</h1>
            <a class="link-to-pick-ticket fs-4" href="{{ route('home.index') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                To the shop
            </a>
        </div>
        @else
        <form action="" class="col-lg-8">
            @csrf
                <div class="col-lg-12 text-end" onclick="if(!confirm('Cleare cart?')) return false || event.stopImmediatePropagation()" wire:click="removeCart()">
                    <button class="btn cleare-cart" type="button" >Cleare cart</button>
                </div>
                @foreach ($products as $product)
                    <div class="row py-3 align-items-center" wire:key="{{ $product->sizeId }}">
                        <a href="{{ route('products.show', $product->code) }}" class="col-lg-2">
                            <img style="width: 100%" src="{{ $product->image_default }}" alt="">
                        </a>
                        <div class="col-lg-3">
                            @if (number_format($product->new_sale > 5))
                            <div class="pt-3">
                                <span class="product-sale-percent">
                                    -{{ number_format($product->new_sale) }} %
                                </span>
                            </div>
                            @endif
                            <div class="pt-3">
                                <h4>
                                    {{$product->title}}
                                </h4>
                            </div>
                            <div class="pt-3">
                                {{$product->sub_category}}
                            </div>
                        </div>
                        {{-- <div class="col-lg-1">
                            {{$product->size}}
                        </div> --}}
                        <div class="col-lg-3">
                            {{-- <span>{{ $product->size->size }}</span> --}}
                            {{-- <span>{{ $product->sizes->first()->size }}</span> --}}
                            <span>{{ $product->size }}</span>
                            <span>{{ $product->sizes->first()->quantity }}</span>

                            {{-- <select name="size" id="size_select" class="form-select">

                            </select> --}}
                        </div>
                        <div class="col-lg-1">
                            {{-- <input type="number" wire:model="productCount" min="0" max="{{ $product->amount }}" /> --}}
                            {{-- <div class=" d-flex" style="width: 100%">
                                <button type="button" class="btn cart-prod-qnt-chng" wire:click="changeCount({{$product->id}}, 'amount', -1)">-</button>
                                <span class="cart-product-count">{{ $productCount }}</span>
                                <button type="button" class="btn cart-prod-qnt-chng" wire:click="changeCount({{$product->id}}, 'amount', 1)">+</button>
                            </div> --}}

                            <div class="d-flex" style="width: 100%">
                                <button type="button" class="btn cart-prod-qnt-chng" wire:click="changeCount({{ $product->id }}, '{{ $product->sizeId }}', -1)">-</button>
                                <span class="cart-product-count">{{ $product->cart_amount }}</span>
                                <button type="button" class="btn cart-prod-qnt-chng" wire:click="changeCount({{ $product->id }}, '{{ $product->sizeId }}', 1)">+</button>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            @if ($product->new_sale > 5)
                            <div class="text-center ">
                                <span class="product-cross-price">
                                    {{ number_format($product->old_price, 0, ',', ' ') }} Kč
                                </span>
                            </div>
                            <div class="text-center pt-2 product-price">
                                <strong>{{ number_format($product->marged_price, 0, ',', ' ') }} Kč</strong>
                            </div>
                            @else
                            <div class="text-center price-ws pt-3">
                                <strong>{{ number_format($product->new_price, 0, ',', ' ') }} Kč</strong>
                                {{-- <strong>{{ number_format($product->old_price, 0, ',', ' ') }} Kč</strong> --}}
                            </div>
                            @endif
                        </div>
                        {{-- <div class="col-lg-1 " wire:click="removeItem('{{ $product->id }}')">
                            <span class="btn btn-warning delete-item-cart-button delete-item-cart-product">
                                X
                            </span>
                        </div> --}}
                        <div class="col-lg-1" wire:click="removeItem({{ $product->id }}, '{{ $product->sizeId }}')">
                            <span class="btn btn-warning delete-item-cart-button delete-item-cart-product">
                                X
                            </span>
                        </div>
                    </div>
                @endforeach
        </form>

        <div class="col-lg-4">
            <div class="order-summary-wrap">
                <h3>Order summery</h3>
                @if ($savingMoney != 0)
                    <span class="savings text-danger">
                        <b>
                        You're saving
                        {{ number_format($savingMoney, 0, ',', ' ') }} KČ
                        </b>
                    </span>
                @endif
                <div class="d-flex justify-content-between pt-3">
                    <span>
                        Regular price:
                    </span>
                    <span>
                        {{ number_format($oldTotalPrice, 0, ',', ' ') }} KČ
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>
                        Total price:
                    </span>
                    <span>
                        <b>
                            {{  number_format($totalPrice, 0, ',', ' ') }} KČ
                        </b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>
                        Shipping costs:
                    </span>
                    <span>
                        <b>
                           {{ number_format($deliverySum, 0, ',', ' ') }} KČ
                        </b>
                    </span>
                </div>
                <div class="pt-3">
                    Total price
                </div>
                <div class="fs-5 pt-2">
                    <b>
                        {{ number_format($totalPricePay, 0, ',', ' ') }} KČ
                        {{-- {{ number_format($totalPrice, 0, ',', ' ') }} KČ --}}
                    </b>
                </div>
                <div class="order-link mt-4">
                    <a href="{{ route('orders.confirm') }}" >
                        CONTINUE
                    </a>
                </div>
            </div>

            <div class="order-summary-bottom">
                <div class="total">
                    <span>
                        Total price
                    </span>
                    <span>
                        {{ number_format($totalPrice, 0, ',', ' ') }} KČ
                    </span>
                </div>
                <div class="order-link-small">
                    <a href="{{ route('orders.confirm') }}" >
                        CONTINUE
                    </a>
                </div>
            </div>
        </div>
        @endif

    </div>

</div>



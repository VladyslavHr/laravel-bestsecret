<div>
    <div class="row">
        @if (!$cart)
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
                    <div class="row py-3 align-items-center">
                        <a href="{{ route('products.show', $product->code) }}" class="col-lg-2">
                            <img style="width: 100%" src="{{ $product->image_default }}" alt="">
                        </a>
                        <div class="col-lg-3">
                            @if (number_format(100 - (((($product->price * 0.30) + $product->price) / $product->old_price) * 100)) > 5)
                            <div class="pt-3">
                                <span class="product-sale-percent">
                                    -{{ number_format(100 - (((($product->price * 0.30) + $product->price) / $product->old_price) * 100)) }} %
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
                            <select name="size" id="size_select" class="form-select">
                                {{-- @foreach ($size as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <div class=" d-flex" style="width: 100%">
                                <button type="button" class="btn cart-prod-qnt-chng" wire:click="changeCount({{$product->id}}, 'amount', -1)">-</button>
                                <span class="cart-product-count">{{ $productCount }}</span>
                                <button type="button" class="btn cart-prod-qnt-chng" wire:click="changeCount({{$product->id}}, 'amount', 1)">+</button>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            @if (number_format(100 - (((($product->price * 0.30) + $product->price) / $product->old_price) * 100)) > 5)
                            <div class="text-center ">
                                <span class="product-cross-price">
                                    {{ number_format($product->old_price, 0, ',', ' ') }} Kč
                                </span>
                            </div>
                            <div class="text-center pt-2 product-price">
                                <strong>{{ number_format(($product->price * 0.30) + $product->price, 0, ',', ' ') }} Kč</strong>
                            </div>
                            @else
                            <div class="text-center price-ws pt-3">
                                <strong>{{ number_format($product->old_price, 0, ',', ' ') }} Kč</strong>
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-1 " wire:click="removeItem('{{ $product->id }}')">
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
                <span class="savings text-danger">
                    <b>
                    You're saving
                    {{ number_format($savingMoney, 0, ',', ' ') }} KČ
                    </b>
                </span>
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
                        {{  number_format($totalPrice, 0, ',', ' ') }} KČ
                    </b>
                </div>
                <div class="order-link mt-4">
                    <a href="#" >
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
                        452 145 KČ
                    </span>
                </div>
                <div class="order-link-small">
                    <a href="#" >
                        CONTINUE
                    </a>
                </div>
            </div>
        </div>
        @endif

    </div>

</div>



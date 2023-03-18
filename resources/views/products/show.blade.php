@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ url()->previous() }}">
        Back
        <i class="bi bi-backspace-fill"></i>
    </a>
    <div class="row">
        <div class="col-lg-7">
            <div class="carousel-wrap">
                @include('components.fancybox')
            </div>
        </div>
        <div class="col-lg-5">
            <h3>{{ $product->title }}</h3>
            <div>{{ $product->sub_category }}</div>
            <div>Color: {{ $color_string }}</div>

            @if ($product->sale > 5)
            <div class="price-and-sale">
                <span class="show-old-price-cross me-3">{{ number_format($product->old_price, 0, ',', ' ') }} CZK</span>
                <span class="show-product-sale">-{{ number_format($product->sale) }} %</span>
            </div>
            <div class="show-price">
                {{ number_format($product->price, 0, ',', ' ')  }} CZK
            </div>
            @else
            <div class="show-price-ws py-3">
                {{ number_format($product->old_price, 0, ',', ' ')  }} CZK
            </div>
            @endif
            <h5>Find more ...</h5>
            <ul class="product-categories-links">
                <li>
                    <a href="{{ route('products.titles', $product->title) }}">
                        {{ $product->title }}
                    </a>
                </li>
                <li>
                    @if ($product->category === 'women_accessoires')
                    <a href="{{ route('forWomen.index') }}?store_category={{ $product->store_category }}&sub_category={{ $product->sub_category }}">
                        {{ $product->sub_category }}
                    </a>
                    @endif
                    @if ($product->category === 'men_accessoires')
                    <a href="{{ route('forMen.index') }}?store_category={{ $product->store_category }}&sub_category={{ $product->sub_category }}">
                        {{ $product->sub_category }}
                    </a>
                    @endif
                </li>
                <li>
                    @if ($product->category === 'women_accessoires')
                    <a href="{{ route('forWomen.index') }}?store_category={{ $product->store_category }}">
                        {{ $product->store_category }}
                    </a>
                    @endif
                    @if ($product->category === 'men_accessoires')
                    <a href="{{ route('forMen.index') }}?store_category={{ $product->store_category }}">
                        {{ $product->sub_category }}
                    </a>
                    @endif
                </li>
            </ul>
            <span>
                <p>
                    {{-- Prices include VAT - excluding shipping
                    Retail price converted from the European sales price in Euro.
                    See payment information
                    Delivery time: 4-9 working days --}}
                </p>
            </span>
            <span>
                item number: {{ $product->code }}
            </span>

            <select name="size" id="size_select" class="form-select my-3">
                @foreach ($size as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>

            @livewire('add-to-cart-button', ['product' => $product])

            <div class="description pt-3">
                {!! $product->description !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>

</div>
@endsection


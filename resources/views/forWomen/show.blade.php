@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            @include('components.fancybox')
        </div>
        <div class="col-lg-4">
            <h3>{{ $product->title }}</h3>
            <span>{{ $product->sub_category }}</span>
            <div class="price-and-sale">
                <span>{{ $product->old_price }} CZK</span>
                <span>{{ $product->sale }} %</span>
            </div>
            <div class="price text-danger">
                {{ $product->price }} CZK
            </div>
            <span>
                <p>
                    Prices include VAT - excluding shipping
                    Retail price converted from the European sales price in Euro.
                    See payment information
                    Delivery time: 4-9 working days
                </p>
            </span>
            <span>
                item number: {{ $product->code }}
            </span>

            <select name="" id="" class="form-select">
                @foreach ($size as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>

            <div class="add-to-cart">
                <button class="btn add-to-cart-button">
                    ADD TO CART
                </button>
            </div>

            <div class="description">
                {{ $product->description }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>
</div>
@endsection

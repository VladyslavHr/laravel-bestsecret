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

            <select name="size" id="size_select" class="form-select my-3">
                @foreach ($size as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>

            @livewire('add-to-cart-button', ['product' => $product])

            <div class="description pt-3">
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

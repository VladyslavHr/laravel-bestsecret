@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            {{-- <a href="{{ session(['returnUrl' => url()->previous()]) }}"> --}}
            <a href="{{ url()->previous() }}">
                Back
                <i class="bi bi-backspace-fill"></i>
            </a>
        </div>
    </div>
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
            <div class="price-and-sale">
                <span class="show-old-price-cross me-3">{{ number_format($product->old_price, 0, ',', ' ') }} CZK</span>
                <span class="show-product-sale">-{{ number_format($product->sale) }} %</span>
            </div>
            <div class="show-price">
                {{ number_format($product->price, 0, ',', ' ')  }} CZK
            </div>

            <h5>Find more ...</h5>
            <ul class="product-categories-links">
                <li>
                    <a href="">
                        {{ $product->title }}</li>
                    </a>
                <li>
                    <a href="">
                        {{ $product->sub_category }}</li>
                    </a>
                <li>
                    <a href="">
                        {{ $product->store_category }}</li>
                    </a>
            </ul>
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
        <div class="col-lg-3">
            {{ $same_products }}
        </div>
    </div>
</div>

@endsection

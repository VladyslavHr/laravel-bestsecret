@extends('layouts.app')

@section('content')




<div class="container">
    {{-- <div class="row">
        @foreach ($store_categories as $category)
        <div class="col-lg-3">
            <h2>{{ $category }}</h2>
        </div>
        @endforeach
    </div> --}}
    <div class="row">
        <div class="col-lg-3">
            <ul>
                @foreach ($store_categories as $category)
                <li>
                    <a href="#">
                        {{ $category }}
                    </a>
                </li>
                @endforeach

            </ul>
        </div>
        @foreach ($men_products as $product)
        <div class="col-lg-3">
            <a href="" target="__blank">
                <img style="width: 100%" src="{{ $product->image_default }}" alt="">
                <h2>{{ $product->title }}</h2>
                <p>{{ $product->code }}</p>
                <div class="">
                    {{ $product->sub_description }}
                </div>
                <div class="text-danger">
                    {{-- {{ $product->old_price }} --}}
                    @if (strlen($product->old_price <= 3))
                    {{   number_format($product->old_price, 0, ' ', '') }} Kč

                    @else
                    {{   number_format($product->old_price, 3, ' ', '') }} Kč

                    @endif


                    {{-- {{   number_format($product->old_price, 3, ' ', '') }} Kč --}}
                </div>
                <div class="">
                    {{ $product->sale }} %
                </div>
                <div class="">
                    {{-- @if (strlen($product->price >= 3))
                    {{   number_format($product->price, 0, ' ') }} Kč
                    @else
                    {{   number_format($product->price, 3, ' ') }} Kč
                    @endif --}}
                    {{ $product->price }}
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

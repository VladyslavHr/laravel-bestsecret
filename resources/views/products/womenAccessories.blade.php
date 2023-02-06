@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($women_products as $product)
        <div class="col-lg-3">
            <a href="" target="__blank">
                <img style="width: 100%" src="{{ $product->image_default }}" alt="">
                <h2>{{ $product->title }}</h2>
                <p>{{ $product->code }}</p>
                <div class="">
                    {{ $product->sub_description }}
                </div>
                <div class="text-danger">
                    {{   number_format($product->old_price, 3, ' ', '') }} Kč
                </div>
                <div class="">
                    {{ $product->sale }} %
                </div>
                <div class="">
                    {{   number_format($product->price, 3, ' ', '') }} Kč
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

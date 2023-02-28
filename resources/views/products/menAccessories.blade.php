@extends('layouts.app')

@section('content')


<div class="container py-5">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shoes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Accessories</a>
        </li>
    </ul>
    <div class="row py-5">
        <div class="col-lg-12 text-end">
            {{ $men_products->links() }}
        </div>
    </div>
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
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <a href="{{ route('products.show', $product->code) }}">
                <img style="width: 100%" src="{{ $product->image_default }}" alt="">
                <h2>{{ $product->title }}</h2>
                <p>{{ $product->code }}</p>
                <div class="">
                    {{ $product->sub_description }}
                </div>
                <div class="text-danger">
                    {{ number_format($product->old_price, 0, ',', ' ') }} Kč
                </div>
                <div class="">
                    {{ $product->sale }} %
                </div>
                <div class="">
                    {{ number_format($product->price, 0, ',', ' ') }} Kč
                </div>
            </a>
        </div>
        @endforeach

    </div>
    <div class="row py-5">
        <div class="col-lg-12 text-end">
            {{ $men_products->links() }}
        </div>
    </div>
</div>
@endsection

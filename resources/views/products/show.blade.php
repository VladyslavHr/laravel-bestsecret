@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <a href="{{ url()->previous() }}">
        Back
        <i class="bi bi-backspace-fill"></i>
    </a> --}}
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

            @if ($product->new_sale > 5)
            <div class="price-and-sale">
                <span class="show-old-price-cross me-3">{{ number_format($product->old_price, 0, ',', ' ') }} CZK</span>
                <span class="show-product-sale">-{{ number_format($product->new_sale) }} %</span>
            </div>
            <div class="show-price">
                {{ number_format($product->marged_price, 0, ',', ' ')  }} CZK
            </div>
            @else
            <div class="show-price-ws py-3">
                {{-- {{ number_format($product->old_price, 0, ',', ' ')  }} CZK --}}
                {{ number_format($product->new_price, 0, ',', ' ')  }} CZK
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
                    <a href="{{ route('forWomen.index') }}?store_category={{ urlencode($product->store_category) }}&sub_category={{ urlencode($product->sub_category) }}">
                        {{ $product->sub_category }}
                    </a>
                    @endif
                    @if ($product->category === 'men_accessoires')
                    <a href="{{ route('forMen.index') }}?store_category={{ urlencode($product->store_category) }}&sub_category={{ urlencode($product->sub_category) }}">
                        {{ $product->sub_category }}
                    </a>
                    @endif
                </li>
                <li>
                    @if ($product->category === 'women_accessoires')
                    <a href="{{ route('forWomen.index') }}?store_category={{ urlencode($product->store_category) }}">
                        {{ $product->store_category }}
                    </a>
                    @endif
                    @if ($product->category === 'men_accessoires')
                    <a href="{{ route('forMen.index') }}?store_category={{ urlencode($product->store_category) }}">
                        {{ $product->store_category }}
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

            @livewire('add-to-cart-button', ['product' => $product, 'sizes' => $sizes, 'productSizes' => $productSizes])

                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                CHART SIZE
            </button>

            <div class="description pt-3">
                {!! $product->description !!}
            </div>
        </div>
    </div>
    <div class="row py-5">
        @if (isset($otherColors) && $otherColors->count() > 1)
        <div class="home-demo">
            <h3 class="pb-2">Other colors you may like</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($otherColors as $product)
                <div class="item">
                    <a href="{{ route('products.show', $product->code) }}" class="product-link">
                        <img src="{{ $product->image_default }}" class="" alt="">
                        <h4>{{ $product->category_name }}</h4>
                        <h4>{{ $product->color_name }}</h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">CHART SIZE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="select-wrap">
                    <input type="hidden" id="product_code_val" value="{{ $product->code }}" oninput="chart_select()">
                    <div class="gender-select pt-3">
                        <select class="form-select" id="gender_select" onchange="chart_select()">
                            <option value="women">Women</option>
                            <option value="men">Men</option>
                        </select>
                    </div>
                    <div class="category-select pt-3">
                        <select class="form-select" id="category_select" onchange="chart_select()">
                            <option value="belts">Belts</option>
                            <option value="rings">Rings</option>
                            <option value="hats">Hats/Caps</option>
                            <option value="gloves">Gloves</option>
                        </select>
                    </div>
                </div>
                <div class="chart-size" id="chart_size_result">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>


</div>

<script>
    $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 4,
    margin: 10,
    loop: true,
    nav: true
  });
});
</script>
@endsection


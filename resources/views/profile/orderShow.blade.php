@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center">Welcome to Your Profile {{ $user->name }} {{ $user->last_name }}</h1>
    @include('profile.blocks.nav')

    <h3 class="text-center py-3">Your order</h3>

    <div class="row">
        <div class="col-lg-4">
            <div class="fs-bs sub-color">From: {{ $order->created_at->format('d-m-Y') }}</div>
            <div class="fs-bs sub-color">Order: {{ $order->numeric_series }}</div>
            <h4>Delivery address</h4>
            <div>{{ $order->name }} {{ $order->last_name}}</div>
            <div>{{ $order->street }} {{ $order->add_address }}</div>
            <div>{{ $order->post_code }} {{ $order->city }}</div>
            <div>{{ $order->firm }} {{ $order->identification_num }}</div>

            <h4>Billing address</h4>
            <div>{{ $order->name_bill }} {{ $order->last_name_bill}}</div>
            <div>{{ $order->street_bill }} {{ $order->add_address_bill }}</div>
            <div>{{ $order->post_code_bill }} {{ $order->city_bill }}</div>
            <div>{{ $order->firm_bill }} {{ $order->identification_num_bill }}</div>
            <h4>Total sum:</h4>
            <div class="fs-bs"><b>{{ number_format($order->total_price, 0, ',', ' ') }}</b> CZK</div>
        </div>
        <div class="col-lg-8">
            <h4>{{ $order->delivery_status }}</h4>
            <div class="sub-color">From: {{ $order->created_at->format('d-m-Y') }}</div>

            @foreach ($order->items as $item)
            <div class="row py-5">
                <div class="col-lg-2">
                    <img src="{{ $item->product->image_default }}" alt="" style="width: 100%">
                </div>
                <div class="col-lg-10">
                    <div>{{ $item->product->title }}</div>
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="sub-color">Item number</span>
                            <span><b>{{ $item->product_code }}</b></span>
                        </div>
                        <div class="col-lg-6">
                            <span><b>{{ $item->product->color }}</b></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="sub-color">Size:</span>
                            <span><b>{{ $item->product->size }}</b></span>
                        </div>
                        <div class="col-lg-6">
                            <span><b>{{number_format($item->product_new_sum, 0, ',', ' ') }} CZK</b></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection

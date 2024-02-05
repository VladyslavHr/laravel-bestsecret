@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center">Welcome to Your Profile {{ $user->name }} {{ $user->last_name }}</h1>

    @include('profile.blocks.nav')

    @foreach ($user->orders as $order)
        <div class="row py-5">
            <div class="col-lg-6 fs-bs">
                <div>
                    <b>
                        Delivery Status: {{ $order->delivery_status }}
                        <i class="bi bi-check-lg text-success fs-4"></i>
                    </b>
                </div>
                <div><b>Order: {{ $order->numeric_series }}</b></div>
                <div class="sub-color">From: {{ $order->created_at->format('d-m-Y') }}</div>
            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('profile.orderShow', ['user' => $user, 'order' => $order]) }}" class="btn-link-main">
                    Detail
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row">
            @foreach ($order->items as $item)
                <a class="col-lg-2" href="{{ route('profile.orderShow', ['user' => $user, 'order' => $order]) }}">
                    <img src="{{ $item->product->image_default }}" alt="" style="width: 100%">
                </a>
            @endforeach
        </div>
    @endforeach


</div>

@endsection

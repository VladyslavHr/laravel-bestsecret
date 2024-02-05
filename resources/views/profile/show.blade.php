@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center">Welcome to Your Profile {{ $user->name }} {{ $user->last_name }}</h1>

    @include('profile.blocks.nav')

    <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th class="text-center" scope="col">Order number</th>
                <th class="text-center" scope="col">Payment status</th>
                <th class="text-center" scope="col">Total price</th>
                <th class="text-center" scope="col">Product quantity</th>
                <th class="text-center" scope="col">Delivery status</th>
                <th class="text-center" scope="col">Created</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user->orders as $order)
                    <tr>
                        <th class="text-center" scope="row">
                            <a href="#">
                                {{ $order->numeric_series }}
                            </a>
                        </th>
                        <td class="text-center">{{ $order->payment_status }}</td>
                        <td class="text-center">{{ number_format($order->total_price, 0, ',', ' ') }} CZK</td>
                        <td class="text-center">{{ $order->product_quantity }}</td>
                        <td class="text-center">{{ $order->delivery_status }}</td>
                        <td class="text-center">{{ $order->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <h3 class="py-5">Contact information</h3>
    <div class="row">
        <div class="col-lg-3">
            <span class="sub-color">Name</span>
            <div class="main-color py-1"><b>{{ $user->name }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Last name</span>
            <div class="main-color py-1"><b>{{ $user->last_name }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Email</span>
            <div class="main-color py-1"><b>{{ $user->email }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Phone</span>
            <div class="main-color py-1"><b>{{ $user->phone }}</b></div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <span class="sub-color">Street</span>
            <div class="main-color py-1"><b>{{ $user->street }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Additional street</span>
            <div class="main-color py-1"><b>{{ $user->add_address }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Post code</span>
            <div class="main-color py-1"><b>{{ $user->post_code }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">City</span>
            <div class="main-color py-1"><b>{{ $user->city }}</b></div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <span class="sub-color">Firm</span>
            <div class="main-color py-1"><b>{{ $user->firm }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Identification number</span>
            <div class="main-color py-1"><b>{{ $user->identification_num }}</b></div>
        </div>
        {{-- <div class="col-lg-3">
            <span>Post code</span>
            <div>{{ $user->post_code }}</div>
        </div>
        <div class="col-lg-3">
            <span>City</span>
            <div>{{ $user->city }}</div>
        </div> --}}
    </div>

    <h3 class="py-5">Billing adress</h3>
    <div class="row">
        <div class="col-lg-3">
            <span class="sub-color">Firm</span>
            <div class="main-color py-1"><b>{{ $user->firm_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Identification number</span>
            <div class="main-color py-1"><b>{{ $user->identification_num_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Name</span>
            <div class="main-color py-1"><b>{{ $user->name_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Last name</span>
            <div class="main-color py-1"><b>{{ $user->last_name_bill }}</b></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <span class="sub-color">Email</span>
            <div class="main-color py-1"><b>{{ $user->email_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">phone</span>
            <div class="main-color py-1"><b>{{ $user->phone_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Street</span>
            <div class="main-color py-1"><b>{{ $user->street_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">Additional adress</span>
            <div class="main-color py-1"><b>{{ $user->add_address_bill }}</b></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <span class="sub-color">Post code</span>
            <div class="main-color py-1"><b>{{ $user->post_code_bill }}</b></div>
        </div>
        <div class="col-lg-3">
            <span class="sub-color">City</span>
            <div class="main-color py-1"><b>{{ $user->city_bill }}</b></div>
        </div>

    </div>


</div>

@endsection

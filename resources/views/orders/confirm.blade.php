@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div id="pageloader_order">
        <img class="preloader-img" src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
    </div>
    <form action="{{ route('orders.create') }}" method="POST" class="row preloader-overlay" id="order_submit">
        @csrf
        <div  class="col-lg-7">
            <div class="pb-5 d-flex justify-content-evenly">
                <div class="">
                    <input class="form-check-input " type="checkbox" name="firm_buy" name="firm_buy" id="firm_buy" value="1" @if(old('firm_buy')) checked @endif onclick="choose_firm()">
                    <label class="form-check-label" for="firm_buy">Buy on firm</label>
                </div>
                <div class="">
                    <input class="form-check-input" type="checkbox" name="bill_equal_address" id="bill_equal_address" value="1" @if(old('bill_equal_address')) checked @endif onclick="choose_equal_address()">
                    <label class="form-check-label" for="bill_equal_address">Billing same as delivery address</label>
                </div>
            </div>
            <div class="row">
                <h3>Shipping address</h3>
                <div class="col-lg-6">
                    <label for="firm" class="firm-show-js">Firm</label>
                    <input class="form-control @error('firm') is-invalid @enderror firm-show-js" type="text" id="firm" name="firm" value="{{ old('firm') }}">
                    <div class="invalid-feedback">
                        @error ('firm') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="identification_num" class="identification-num-show-js">Identification number</label>
                    <input class="form-control @error('identification_num') is-invalid @enderror identification-num-show-js" type="text" pattern="[0-9]{8}" id="identification_num" name="identification_num" value="{{ old('identification_num') }}">
                    <div class="invalid-feedback">
                        @error ('identification_num') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        @error ('name') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="last_name">Last Name</label>
                    <input class="form-control @error('last_name') is-invalid @enderror" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
                    <div class="invalid-feedback">
                        @error ('last_name') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="email">E-mail</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}">
                    <div class="invalid-feedback">
                        @error ('email') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="phone">Phone number</label>
                    <input class="form-control @error('phone') is-invalid @enderror" type="tel" id="phone" name="phone" pattern="[0-9]{9}" placeholder="123456789" maxlength="9" value="{{ old('phone') }}">
                    <div class="invalid-feedback">
                        @error ('phone') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="street">Street and house number</label>
                    <input class="form-control @error('street') is-invalid @enderror" type="text" id="street" name="street" value="{{ old('street') }}">
                    <div class="invalid-feedback">
                        @error ('street') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="add_address">Additional address (optional)</label>
                    <input class="form-control @error('add_address') is-invalid @enderror" type="text" id="add_address" name="add_address" value="{{ old('add_address') }}">
                    <div class="invalid-feedback">
                        @error ('add_address') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="post_code">Postcode</label>
                    <input class="form-control @error('post_code') is-invalid @enderror" type="text" id="post_code" name="post_code" pattern="[0-9]{5}" placeholder="XXXXX" value="{{ old('post_code') }}">
                    <div class="invalid-feedback">
                        @error ('post_code') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="city">City</label>
                    <input class="form-control @error('city') is-invalid @enderror" type="text" id="city" name="city" value="{{ old('city') }}">
                    <div class="invalid-feedback">
                        @error ('city') {{$message}}@enderror
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" id="billing_address_js">
                <h3>Billing address</h3>
                <div class="col-lg-6">
                    <label for="firm_bill">Firm</label>
                    <input class="form-control @error('firm_bill') is-invalid @enderror" type="text" id="firm_bill" name="firm_bill" value="{{ old('firm_bill') }}">
                    <div class="invalid-feedback">
                        @error ('firm_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="identification_num_bill">Identification number</label>
                    <input class="form-control @error('identification_num_bill') is-invalid @enderror" type="text" id="identification_num_bill" name="identification_num_bill" value="{{ old('identification_num_bill') }}">
                    <div class="invalid-feedback">
                        @error ('identification_num_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="name_bill">Name</label>
                    <input class="form-control @error('name_bill') is-invalid @enderror" type="text" id="name_bill" name="name_bill" value="{{ old('name_bill') }}">
                    <div class="invalid-feedback">
                        @error ('name_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="last_name_bill">Last Name</label>
                    <input class="form-control @error('last_name_bill') is-invalid @enderror" type="text" id="last_name_bill" name="last_name_bill" value="{{ old('last_name_bill') }}">
                    <div class="invalid-feedback">
                        @error ('last_name_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="email_bill">E-mail</label>
                    <input class="form-control @error('email_bill') is-invalid @enderror" type="text" id="email_bill" name="email_bill" value="{{ old('email_bill') }}">
                    <div class="invalid-feedback">
                        @error ('email_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="phone_bill">Phone number</label>
                    <input class="form-control @error('phone_bill') is-invalid @enderror" type="tel" id="phone_bill" name="phone_bill" pattern="[0-9]{9}" placeholder="123456789" value="{{ old('phone_bill') }}">
                    <div class="invalid-feedback">
                        @error ('phone_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="street_bill">Street and house number</label>
                    <input class="form-control @error('street_bill') is-invalid @enderror" type="text" id="street_bill" name="street_bill" value="{{ old('street_bill') }}">
                    <div class="invalid-feedback">
                        @error ('street_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="add_address_bill">Additional address (optional)</label>
                    <input class="form-control" type="text" id="add_address_bill" name="add_address_bill" value="{{ old('add_address_bill') }}">
                </div>
                <div class="col-lg-6 py-2">
                    <label for="post_code_bill">Postcode</label>
                    <input class="form-control @error('post_code_bill') is-invalid @enderror" type="text" id="post_code_bill" name="post_code_bill" pattern="[0-9]{5}" placeholder="XXXXX" value="{{ old('post_code_bill') }}">
                    <div class="invalid-feedback">
                        @error ('post_code_bill') {{$message}}@enderror
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <label for="city_bill">City</label>
                    <input class="form-control @error('city_bill') is-invalid @enderror" type="text" id="city_bill" name="city_bill" value="{{ old('city_bill') }}">
                    <div class="invalid-feedback">
                        @error ('city_bill') {{$message}}@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
                <div class="order-summary-pay-wrap">
                    <div class="order-summary-pay">
                        <h3>Order summery</h3>
                        @if ($savingMoney != 0)
                            <span class="savings text-danger">
                                <b>
                                You're saving
                                {{ number_format($savingMoney, 0, ',', ' ') }} KČ
                                </b>
                            </span>
                        @endif
                        <div class="d-flex justify-content-between pt-3">
                            <span>
                                Regular price:
                            </span>
                            <span>
                                {{ number_format($oldTotalPrice, 0, ',', ' ') }} KČ
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>
                                Total price:
                            </span>
                            <span>
                                <b>
                                    {{  number_format($totalPrice, 0, ',', ' ') }} KČ
                                </b>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>
                                Shipping costs:
                            </span>
                            <span>
                                <b>
                                {{ number_format($deliverySum, 0, ',', ' ') }} KČ
                                </b>
                            </span>
                        </div>
                        <div class="pt-3">
                            Total price
                        </div>
                        <div class="fs-5 pt-2">
                            <b>
                                {{ number_format($totalPricePay, 0, ',', ' ') }} KČ
                            </b>
                        </div>
                    </div>
                    <button class="order-buy-now mt-2 mb-5" type="submit">BUY NOW</button>
                </div>

                <div class="order-summary-bottom">
                    <div class="total">
                        <span>
                            Total price
                        </span>
                        <span>
                            {{ number_format($totalPrice, 0, ',', ' ') }} KČ
                        </span>
                    </div>
                    <div class="order-link-small">
                        <a href="#" >
                            BUY NOW
                        </a>
                    </div>
                </div>

            <h3 class="pt-3">Your order items</h3>
            @foreach ($products as $product)
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <img src="{{ $product->image_default }}" alt="" style="width: 100%"></div>
                <div class="col-lg-2">{{ $product->title }}</div>
                <div class="col-lg-3">{{ $product->code }}</div>
                <div class="col-lg-2">{{ $product->size }}</div>
                <div class="col-lg-2">{{ $product->color }}</div>
            </div>
            @endforeach
        </div>
    </form>
</div>

@endsection

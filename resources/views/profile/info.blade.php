@extends('layouts.app')

@section('content')

@include('layouts.blocks.errors')

<div class="container py-5">
    <h1 class="text-center">Welcome to Your Profile {{ $user->name }} {{ $user->last_name }}</h1>

    @include('profile.blocks.nav')

    <form action="{{ route('profile.infoUpdate', $user) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="py-5">Contact information</h3>
            </div>
            <div class="col-lg-6">
                <label for="">Billing address same as contact information</label>
                <input type="checkbox" name="same_address" class="box-main" {{ old('same_address', $user->same_address) ? 'checked' : '' }}>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="user_create_name" class="form-label">Name</label>
                <input name="name" value="{{ $user->name }}" type="text" class="form-control @error ('name') is-invalid @enderror" id="user_create_name">
                <span class="form-text">Please write the Name. (required)</span>
                <div class="invalid-feedback">
                    @error ('name') {{$message}}@enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_last_name" class="form-label">Last name</label>
                <input name="last_name" value="{{ $user->last_name }}" type="text" class="form-control @error ('last_name') is-invalid @enderror" id="user_create_last_name">
                <span class="form-text">Please write the Last name. (required)</span>
                <div class="invalid-feedback">
                    @error ('last_name') {{$message}}@enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_email" class="form-label">E-mail</label>
                <input name="email" value="{{ $user->email }}" type="email" class="form-control @error ('email') is-invalid @enderror" id="user_create_email">
                <span class="form-text">Please write the E-mail. (required)</span>
                <div class="invalid-feedback">
                    @error ('email') {{$message}}@enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_phone" class="form-label">Phone</label>
                <input name="phone" value="{{ $user->phone }}" type="phone" class="form-control @error ('phone') is-invalid @enderror" id="user_create_phone" placeholder="(Country code) (number)">
                <span class="form-text">Please write the Phone number.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_street" class="form-label">Street</label>
                <input name="street" value="{{ $user->street }}" type="street" class="form-control" id="user_create_street">
                <span class="form-text">Please write the Street.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_add_address" class="form-label">Additional address</label>
                <input name="add_address" value="{{ $user->add_address }}" type="add_address" class="form-control" id="user_create_add_address">
                <span class="form-text">Please write the Additional address.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_post_code" class="form-label">Post code</label>
                <input name="post_code" value="{{ $user->post_code }}" type="post_code" class="form-control" id="user_create_post_code">
                <span class="form-text">Please write the Post code.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_city" class="form-label">City</label>
                <input name="city" value="{{ $user->city }}" type="city" class="form-control" id="user_create_city">
                <span class="form-text">Please write the City.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_firm" class="form-label">Firm</label>
                <input name="firm" value="{{ $user->firm }}" type="firm" class="form-control" id="user_create_firm">
                <span class="form-text">Please write the Firm.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_identification_num" class="form-label">Identification number</label>
                <input name="identification_num" value="{{ $user->identification_num }}" type="identification_num" class="form-control" id="user_create_identification_num">
                <span class="form-text">Please write the Identification number.</span>
            </div>


            <h3 class="py-5">Billing address</h3>
            <div class="col-md-6 mb-3">
                <label for="user_create_firm_bill" class="form-label">Firm</label>
                <input name="firm_bill" value="{{ $user->firm_bill }}" type="firm_bill" class="form-control" id="user_create_firm_bill">
                <span class="form-text">Please write the Firm.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_identification_num_bill" class="form-label">Identification number</label>
                <input name="identification_num_bill" value="{{ $user->identification_num_bill }}" type="identification_num_bill" class="form-control" id="user_create_identification_num_bill">
                <span class="form-text">Please write the Identification number.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_name_bill" class="form-label">Name</label>
                <input name="name_bill" value="{{ $user->name_bill }}" type="name_bill" class="form-control" id="user_create_name_bill">
                <span class="form-text">Please write the Name.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_last_name_bill" class="form-label">Last name</label>
                <input name="last_name_bill" value="{{ $user->last_name_bill }}" type="last_name_bill" class="form-control" id="user_create_last_name_bill">
                <span class="form-text">Please write the Last name.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_email_bill" class="form-label">E-mail</label>
                <input name="email_bill" value="{{ $user->email_bill }}" type="email_bill" class="form-control" id="user_create_email_bill">
                <span class="form-text">Please write the E-mail.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_phone_bill" class="form-label">Phone</label>
                <input name="phone_bill" value="{{ $user->phone_bill }}" type="phone_bill" class="form-control" id="user_create_phone_bill">
                <span class="form-text">Please write the Phone.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_street_bill" class="form-label">Street</label>
                <input name="street_bill" value="{{ $user->street_bill }}" type="street_bill" class="form-control" id="user_create_street_bill">
                <span class="form-text">Please write the Street.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_add_address_bill" class="form-label">Additional address</label>
                <input name="add_address_bill" value="{{ $user->add_address_bill }}" type="add_address_bill" class="form-control" id="user_create_add_address_bill">
                <span class="form-text">Please write the Additional address.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_post_code_bill" class="form-label">Post code</label>
                <input name="post_code_bill" value="{{ $user->post_code_bill }}" type="post_code_bill" class="form-control" id="user_create_post_code_bill">
                <span class="form-text">Please write the Post code.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_create_city_bill" class="form-label">City</label>
                <input name="city_bill" value="{{ $user->city_bill }}" type="city_bill" class="form-control" id="user_create_city_bill">
                <span class="form-text">Please write the City.</span>
            </div>
        </div>
        <button type="submit" class="btn float-end btn-main">Update</button>



    </form>


</div>

@endsection

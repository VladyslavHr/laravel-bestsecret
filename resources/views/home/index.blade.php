@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <a href="{{ route('forMen.index') }}">
                {{ strtoupper('For Men')}}
            </a>
        </div>
        <div class="col-lg-6">
            <a href="{{ route('forWomen.index') }}">
                {{ strtoupper('For Women') }}
            </a>
        </div>
    </div>

    {{-- <div class="row">
        @foreach ($brands as $brand)
            <div class="col-lg-3">
                {{ $brand }}
            </div>
        @endforeach
    </div> --}}
    {{-- <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

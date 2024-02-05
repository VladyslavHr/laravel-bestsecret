@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <a href="{{ route('forWomen.index', ['locale' => app()->getLocale()]) }}">
                {{ strtoupper('For Women') }}
            </a>
        </div>
        <div class="col-lg-6">
            <a href="{{ route('forMen.index', ['locale' => app()->getLocale()]) }}">
                {{ strtoupper('For Men')}}
            </a>
        </div>
    </div>
    <div class="row">
        @foreach ($brands as $brand)
            <div class="col-lg-3">{{ $brand }}</div>
        @endforeach
    </div>
</div>
@endsection

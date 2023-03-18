@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($brands as $brand)
            <div class="col-lg-4">
                <a href="{{ route('brands.show', $brand) }}">
                    {{ $brand }}
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection

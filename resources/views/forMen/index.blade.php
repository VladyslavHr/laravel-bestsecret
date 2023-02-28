@extends('layouts.app')

@section('content')

<div class="container">
    @livewire('for-men-list-block', ['products' => $products])
    {{-- @livewire('product-list-block', ['products' => $products],) --}}
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    @livewire('store-category', ['products' => $products])
</div>

@endsection

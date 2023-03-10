@extends('layouts.app')

@section('content')

<div class="container">
    {{-- @livewire('sub-category', ['sub_category' => $sub_category]) --}}
    @livewire('sub-category', ['products' => $products])
</div>

@endsection

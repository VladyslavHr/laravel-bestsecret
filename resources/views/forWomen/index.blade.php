@extends('layouts.app')

@section('content')

<div class="container">
    @livewire('for-women-list-block', ['products' => $products])
</div>

@endsection

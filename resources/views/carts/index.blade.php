@extends('layouts.app')

@section('content')

<div class="container">
    @livewire('cart-block')
    {{-- @livewire('component', ['user' => $user], key($user->id)) --}}
</div>

@endsection

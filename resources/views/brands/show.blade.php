@extends('layouts.app')

@section('content')

<div class="container">
    @livewire('brand-show', ['brand' => $brand])
</div>

@endsection

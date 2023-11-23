@extends('layouts.app')

@section('content')

<div class="container">
    {{-- @if ($order->status == 'paid') --}}
    <div class="py-5">
        {{-- <h1 class="text-center pt-5">Děkujeme Vám za nakup!</h1> --}}
        <h1 class="text-center pt-5">Thank you for your order!</h1>
        {{-- <h3 class="text-center pt-5">Čislo Vaší objednavky: <b>{{ $order->numeric_series }}</b></h3> --}}
        <h3 class="text-center pt-5">Number of your order: <b>{{ $order->numeric_series }}</b></h3>

        {{-- @foreach ($order->items as $item) --}}
            <div class="text-center fs-5 pt-3">
                    {{-- @if ($loop->first) --}}
                        <p>
                            {{-- Vaše objednavka bude zaslana na vaš email, a muzet stahnou pres link. --}}
                            Information about your order we will sent by email, or you can download it by this link
                            <a href="">PDF</a>
                            {{-- <a href="{{ route('pdf.ticket', $order->id) }}">PDF</a> --}}
                        </p>
                    {{-- @endif --}}
                    {{-- @if ($loop->first)
                        <p>
                            Děkujeme vam za nakup, potvrzení dostanete emilem.
                        </p>
                    @endif --}}
            </div>
        {{-- @endforeach --}}
    </div>
{{-- @else --}}
    {{-- <div class="py-5">
        <h3 class="text-center pt-5">
            Je nám líto, něco se pokazilo, zkuste to prosím znovu.
        </h3>
        <h3 class="text-center pt-5">
            <a href="{{ route('checkout.index') }}">Zpět do košíku</a>
        </h3>
    </div> --}}
{{-- @endif --}}

</div>

@endsection

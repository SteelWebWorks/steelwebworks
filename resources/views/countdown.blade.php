@extends('app');
@section('content')
    <div class="flex flex-row" id="countdown-container">
        <img data-number="0" src="{{ asset('images/numbers/number_0.png') }}" alt="">
        <img data-number="1" src="{{ asset('images/numbers/number_0.png') }}" alt="">
        <img src="{{ asset('images/numbers/colon.png') }}" alt="">
        <img data-number="2" src="{{ asset('images/numbers/number_0.png') }}" alt="">
        <img data-number="3" src="{{ asset('images/numbers/number_0.png') }}" alt="">
    </div>
@endsection

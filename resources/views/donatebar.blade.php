@extends('app')
@section('styles')
    @vite(['resources/css/donatebar.css', 'resources/js/kofi.js'])
@endsection
@section('content')
    <div class="donatebar-container w-full h-full">
        <div class="w-full h-full static">
            <div class="donatebar-filler h-full absolute bottom-0 left-0" style="width: 0%"></div>
            <div class="donatebar-glass w-full h-full absolute bottom-0 left-0"></div>
            <div class="donatebar-text-container w-full h-full absolute bottom-0 left-0">
                <div class="donatebar-text static container m-auto h-full text-9xl flex justify-center">
                    <span id="name" class="mr-4"></span>
                    @if ($data['goal'] == $data['amount'])
                        <span>Goal Reached</span>
                    @else
                        <span>{{ $data['name'] }}</span>
                        (<span id="amount">{{ $data['amount'] }}</span>€/
                        <span id="goal">{{ $data['goal'] }}</span>€)
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

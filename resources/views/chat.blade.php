@extends('app')

@section('styles')
    @vite(['resources/css/app.css'])
@endsection

@section('content')
    <div id="chat-container">
        <div class="chat-box">
            <div class="chat-box-header">
                <span class="chat-box-header-cog">
                    <img src="{{ asset('images/cogs/cog_small.svg') }}" alt="">
                </span>
            </div>
            <div class="chat-box-content">

            </div>
        </div>
    </div>
@endsection

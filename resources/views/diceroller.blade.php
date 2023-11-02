@extends('app')

@section('scripts')
    <script src="/javascript/cannon.min.js" type="text/javascript"></script>
    <script src="/javascript/three.min.js" type="text/javascript"></script>
    @vite(['resources/js/diceroller.js', 'resources/css/diceroller.css'])
@endsection

@section('content')
    <div id="diceroller-container">
        <div id="info_div" style="display: none">
            <div class="center_field" id="label_bg">
                <span id="label"></span>
            </div>
            <div class="center_field">
                <!--<div class="bottom_field">
                                                        <span id="labelhelp">click to continue or tap and drag again</span>
                                                    </div>-->
            </div>
        </div>
        <div id="selector_div" style="display: none">
            <div class="center_field">
            </div>
            <div class="center_field">
                <input type="text" id="set" value="4d6"><br />
                <button id="clear">clear</button>
                <button style="margin-left: 0.6em" id="throw">throw</button>
            </div>
        </div>
        <div id="canvas"></div>
    </div>
@endsection

@extends('tour.layout')

@section('sub-header')
    <link rel="stylesheet" href="{{ asset('css/cube.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r73/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

@stop

@section('title')
    &nbsp &nbsp &nbsp &nbsp Repetition &nbsp
    &nbsp <a href="/tour/plus"><i class="fa
            fa-arrow-circle-o-right"></i></a>
@stop

@section('sub-content')

    <div id="canvas" class="pure-u-1">
        {{--Source code for the Cube--}}
        {{--http://codepen.io/SoufianeLasri/pen/xwMOwG--}}
    </div>

    <div class="footer is-center pure-u-1"><p>Inspired by the snippet of <a
                    href="http://codepen.io/SoufianeLasri/pen/xwMOwG">Soufiane Lasri</a></p></div>

@stop

@section('end')
    <script src="{{ asset('js/cube.js') }}"></script>

@stop
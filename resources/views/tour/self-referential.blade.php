@extends('tour.layout')

@section('javascript')
    {{--<script>--}}
        $('#self-btn').click(function(){
            $child = '<iframe src="/" class="pure-u-1" style="height: 100vh;" sandbox="allow-scripts"></iframe>';
            $('#playground').replaceWith($child);
        });
    {{--</script>--}}
@stop

@section('title')
    <a href="/tour/minus"><i class="fa
            fa-arrow-circle-o-left"></i></a> &nbsp &nbsp Self-Referential &nbsp &nbsp <a href="/tour/plus"><i class="fa fa-arrow-circle-o-right"></i></a>
@stop

@section('sub-content')
    <div class="pure-u-1 splash" id="playground">
        <p>
            <a class="pure-button pure-button-primary is-center"
               id="self-btn">Click
                Me!</a>
        </p>

    </div>
@stop
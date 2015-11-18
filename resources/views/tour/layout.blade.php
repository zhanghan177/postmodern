@extends('layout')

@section('header')
    <script>
        {{--Update the current page in menu bar--}}
        $(document).ready(function () {
            $("#tour").addClass("pure-menu-selected");
            $("#tour").find('a').css("color", "white");
            @yield('javascript')
        })
    </script>

    @yield('sub-header')
@stop


@section('content')
    <div class="pure-g">
        <div style="margin: auto; position: absolute; top:
        62px; background-color: #1F8DD6; height: 100vh;" class="pure-u-1" >
            <div style="text-align: center; color:
            #dfdfc3;"><h1 class="splash-head">
                    @yield('title')
                </h1>
            </div>
            @yield('sub-content')


        </div>

    </div>

    @yield('end')
@stop
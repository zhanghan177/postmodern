@extends('tour.layout')

@section('javascript')
    $('#minimalist-btn').click(function(){
        $last = '<h1><a href="/tour/minus">Last</a>';
    $title = '&nbsp &nbsp Minimalist &nbsp &nbsp ';
    $next = '<a href="/tour/plus">Next</a>';
    $home = '&nbsp &nbsp<a href="/">Home</a></h1>';
    $new_content = $last.concat($title,$next,$home);
        $('body').replaceWith(
            $new_content
        );
    });
@stop

@section('title')
    <a href="/tour/minus"><i class="fa
            fa-arrow-circle-o-left"></i></a> &nbsp &nbsp Minimalist &nbsp
    &nbsp <a href="/tour/plus"><i class="fa
            fa-arrow-circle-o-right"></i></a>
@stop

@section('sub-content')
    <div class="pure-u-1 splash">
        <p>
            <a class="pure-button pure-button-primary is-center"
                    id="minimalist-btn">Click
                Me!
            </a>
        <div id="paper"></div>
        </p>

    </div>
@stop
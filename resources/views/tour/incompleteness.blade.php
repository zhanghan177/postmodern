@extends('tour.layout')

@section('javascript')
    var oriVal;
    $("#parentUL").on('dblclick', 'li', function () {
    oriVal = $(this).text();
    $(this).text("");
    $("<input type='text'>").appendTo(this).focus();
    });
    $("#parentUL").on('focusout', 'li > input', function () {
    var $this = $(this);
    $this.parent().text($this.val() || oriVal);
    $this.remove(); // Don't just hide, remove the element.
    });
    $('#add').click(function(){
    $("#parentUL").append('<li>Double-click to edit</li>');
    });
    @stop

@section('title')
    <a href="/tour/minus"><i class="fa
            fa-arrow-circle-o-left"></i></a> &nbsp &nbsp Incompleteness &nbsp
    &nbsp <a href="/tour/plus"><i class="fa
            fa-repeat"></i></a>
@stop

@section('sub-content')
    <div class="pure-u-1 splash" style="font-size: 200%;">
        <ul id='parentUL' class="splash-subhead">
            <li>Double-click to edit</li>
        </ul>
        <a href="#"><i class="fa fa-plus-circle" id="add"></i></a>

    </div>
@stop
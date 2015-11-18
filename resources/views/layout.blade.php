<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="A website to demonstrate postmodern characterizes">

    <title>Wat is Postmodern?</title>


    <link rel="stylesheet"
          href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


    <!--[if lte IE 8]>

    <!--<link rel="stylesheet"-->
    {{--href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">--}}

    {{--<![endif]-->--}}
    <!--[if gt IE 8]><!-->

    <link rel="stylesheet"
          href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

    <!--<![endif]-->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/custom-fa.css')}}">
    {{--jQuery--}}
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--[if lte IE 8]>
          <!--<link rel="stylesheet" href="asset('css/layouts/marketing-old-ie.css')">-->
    {{--<![endif]-->--}}
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="{{asset('css/layouts/marketing.css')}}">
    <!--<![endif]-->
    @yield('header')
</head>

<body>
<div class="pure-g">
    <div class="pure-u-1">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="/">Show Me Some Postmodernism</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item" id="home"><a href="/"
                                                        class="pure-menu-link">Home</a>
                </li>
                <li class="pure-menu-item" id="tour"><a href="/tour"
                                                        class="pure-menu-link">Tour</a>
                </li>
                <li class="pure-menu-item"><a href="/#feedback-form"
                                              class="pure-menu-link">Feedback</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@yield('content')


</body>
</html>


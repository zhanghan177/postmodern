@extends('layout')

{{--@section('container')--}}
{{--<div class="pure-g">--}}
{{--<div class="pure-u">Hello</div>--}}
{{--</div>--}}
{{--@stop--}}
@section('header')
    <script>
        {{--Update the current page in menu bar--}}
        $(document).ready(function () {
            $("#home").addClass("pure-menu-selected");
            $("#home").find('a').css("color", "white");
        })
    </script>

@stop

@section('content')

    <div class="splash-container">
        <div class="splash">
            <h1 class="splash-head">So...Postmodern...ism?</h1>

            <p class="splash-subhead">
                What do people talk about when they talk about post-modernism?
            </p>

            <p>
                <a href="/tour"
                   class="pure-button pure-button-primary">Show me now!</a>
            </p>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="content">
            <h2 class="content-head is-center">features about postmodernism</h2>

            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <a href="/tour/repetition">
                            <i class="fa fa-rocket"></i>
                            Repetition
                        </a>
                    </h3>


                    <p>
Do you want to see some endless repetition? Why not? It's a fun way to waste some time, isn't it?
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <a href="/tour/self-referential">
                            <i class="fa fa-mobile"></i>
                            Self-Referential
                        </a>
                    </h3>


                    <p>
Ready to dive into the eternal hell of self-references?
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <a href="/tour/minimalist">
                            <i class="fa fa-th-large"></i>
                            Minimalist
                        </a>
                    </h3>

                    <p>
I only live on what is absolutely necessary for me to live. Well, sometime I agree with you that it could have been done in a prettier way...
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <a href="/tour/incompleteness">
                            <i class="fa fa-check-square-o"></i>
                            Incompleteness
                        </a>
                    </h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac eros eu tellus finibus lobortis.(To be finished)
                    </p>
                </div>
            </div>
        </div>

        <div class="ribbon l-box-lrg pure-g">
            <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                <img src="{{asset('img/domo.png')}}" class="pure-img-responsive"
                     alt="Domo-kun"
                     width="152px" height="209px">
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                <h2 class="content-head content-head-ribbon">You should
                    scroll down, Trust me.</h2>

                <p>
                    Keep going down if you wish to get more information about
                    us. Moreover, don't hesitate to tell us what you think!
                </p>
            </div>
        </div>

        <div class="content">
            <h2 class="content-head is-center">Let Me Know If You Like (Or
                Dislike) This
                Website!
            </h2>

            <div class="pure-g">
                <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                    <form class="pure-form pure-form-stacked" id="feedback-form">
                        <fieldset>

                            <label for="name">Your Name</label>
                            <input id="name" type="text"
                                   placeholder="Your Name" class="pure-input-1">


                            <label for="email">Your Email</label>
                            <input id="email" type="email"
                                   placeholder="Your Email"
                                   class="pure-input-1">

                            <label for="feedback">Your Feedback</label>
                            <textarea id="feedback" type="text"
                                      placeholder="Your Feedback"
                                      class="pure-input-1"></textarea>

                            <button type="submit" class="pure-button
                            pure-button-disabled">Shoot Out!
                            </button>
                            (Not Open Yet. Reason Is <a href="/tour/incompleteness">Here</a>)
                        </fieldset>
                    </form>
                </div>

                <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                    <h4>Contact Us</h4>

                    <p>
                        You can check out my contact info at <a
                                href="http://zhanghan177.me">zhanghan177
                            .me</a>. Or you may also stop by my desk after class
                        if you
                        prefer.
                    </p>

                    <h4>More Information</h4>

                    <p>
                        This is a class project for <a
                                href="https://umich.instructure.com/courses/22165">ENGLISH
                            125</a> taught by Derek Frasure at the University of
                        Michigan. This
                        is a
                        really cool and fun section which focus on postmodern
                        arts and social issues.
                    </p>
                </div>
            </div>

        </div>

        <div class="footer l-box is-center">
            Build with <a href="http://purecss.io/">Pure</a> and <3
        </div>
    </div>
@stop
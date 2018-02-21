<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{-- Page title --}}
    <title>Shine Me - @yield('title')</title>

    <meta name="description" content="@yield('meta_description')" />
    <meta property="og:title" content="@yield('meta_property')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="robots" content="@yield('robots')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.min.css') }}" />
    <link href="{{ asset('front_end/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front_end/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front_end/css/jquery.typeahead.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front_end/css/transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_end/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_end/css/styles_m.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/slick/slick-theme.css') }}">
    @yield('style_sheet')

</head>
<body >
@php
use App\Pages;
$footer_content = new Pages();
$footer = $footer_content->getFooterContent();
$pages = Pages::where('status', 1)->orderBy('page_sequence', 'ASC')->get(['page_name','slug','page_sequence'])->toArray();
@endphp

@include('layout.section.top_navigation')

@yield('content')

@include('layout.section.footer')


<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center"><img src="//placehold.it/110" class="img-circle"><br>Login</h2>
            </div>
            <div class="modal-body row">
                <h6 class="text-center">COMPLETE THESE FIELDS TO SIGN UP</h6>
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg btn-block">Sign In</button>
                        <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <h6 class="text-center"><a href="">Privacy is important to us. Click here to read why.</a></h6>
            </div>
        </div>
    </div>
</div> -->
<!--scripts loaded here-->

<script src="{{ asset('front_end/js/jquery.min.js') }}"></script>
<script src="{{ asset('front_end/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_end/js/jquery.typeahead.js') }}"></script>
<script src="{{ asset('front_end/js/jquery-parallax.js') }}"></script>
<script src="{{ asset('front_end/js/scripts.js') }}"></script>
<script src="{{ asset('front_end/js/my_scripts.js') }}"></script>

{{--<script src="{{ asset('front_end/slick/slick.min.js') }}" type="text/javascript" charset="utf-8"></script>--}}
<script src="{{ asset('front_end/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>

@yield('javascript')

<script>

    var data = [{
        "name": "Business Major",
        "img": "search-img"
    }, {
        "name": "Financial Accounting Major",
        "img": "search-img"
    }, {
        "name": "Medicine Major",
        "img": "search-img"
    }, {
        "name": "Zoology Major",
        "img": "search-img"
    }, {
        "name": "Marketing Major",
        "img": "search-img"
    }];

    typeof $.typeahead === 'function' && $.typeahead({
        input: ".js-typeahead",
        minLength: 0,
        maxItem: 8,
        maxItemPerGroup: 6,
        order: "asc",
        hint: true,
        //cache: true,
        blurOnTab: false,
        searchOnFocus: true,
        emptyTemplate: 'no result for @{{query}}',
        correlativeTemplate: true,
        template: '<span>' +
        '<span class="team-logo">' +
        '<img src="front_end/img/@{{img}}.jpg">' +
        '</span>' +
        '<span class="name">@{{name}}</span>' +
        '</span>',
        source: {
            teams: {
                data: data
            }
        },
        debug: false
    });

</script>

<script>
    $(function () {
        var nav = $('.shines-header');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 83) {
                nav.addClass("fixed-nav");
            } else {
                nav.removeClass("fixed-nav");
            }
        });
    });
</script>

</body>
</html>
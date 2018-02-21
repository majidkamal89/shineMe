@extends('layout.layout')

{{-- Page title --}}
@section('title')
    Sitemap
@stop

@section('content')

    <section id="" class="container-fluid  inner-services sitemap">
        <div class="container">
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        <ul class="breadcrumb">
                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                            <li>sitemap</li>
                        </ul>
                        <div>
                            <h1 class="servicein-head">Sitemap</h1>
                        </div>
                        <ul class="u-sitemap">
                            <li>Homepage</li>
                            <li>About Us</li>
                            <li>General Message</li>
                            <li>Knowledge Categories
                                <p>Name Goes here  |  Name Goes here  |  Name Goes here  |  Name Goes here</p>
                            </li>
                            <li>Our Team</li>
                            <li>Our Services<p> Name Goes here  |  Name Goes here  |  Name Goes here  |  Name Goes here</p></li>
                            <li>News & Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sitemap-baner">  </div>
    </section><!--/page-services-1 section-->

@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".regular").slick({
                dots: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                nextArrow: $('.next_caro'),
                prevArrow: $('.previous_caro')
            });
        });
    </script>
@endsection

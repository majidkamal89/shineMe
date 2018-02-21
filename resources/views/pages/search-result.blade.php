@extends('layout.layout')

{{-- Page title --}}
@section('title')
    Search Result
@stop

@section('content')

    <section id="" class="search-results">
        <div class="container-fluid">
            <div class="container">
                <div class="homeour-service">
                    <div class="service-list">
                        <div class="service-in">
                            <ul class="breadcrumb">
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li>Search results</li>
                            </ul>
                            <div>
                                <h1 class="servicein-head">All Results About "Majors"</h1>
                            </div>
                            <ul class="u-search">
                                <li>Bussiness Majors</li>
                                <li>Financial Accounting Major</li>
                                <li>Marketing Major</li>
                                <li>Medicine Major</li>
                                <li>Zoology Major</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeservice-baner">
                <!-- <img src="img/manager.png" class="img-responsive"> -->
            </div>

        </div>
    </section><!--/news-event section-->

    <section class="container search-container">
        <div class="search-events-grid">
            <div class="homeservice-baner">
                <img src="{{ asset('front_end/img/search-event.png') }}" class="img-responsive">
            </div>
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        <h3 class="servicein-head">Business Major</h3>
                        <p class="servicein-desc">SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges. </p>
                        <p class="servicein-desc">Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.</p>
                    </div>
                </div>
            </div>
            <div class="service-buttons">
                <a href="{{ URL::to('/services-inner') }}"><button class="next_caro"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i> </button></a>
            </div>
        </div>
    </section><!--news  section-->

    <section class="container search-container">
        <div class="search-events-grid">
            <div class="homeservice-baner">
                <img src="{{ asset('front_end/img/search-event.png') }}" class="img-responsive">
            </div>
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        <h3 class="servicein-head">Financial Accounting Majore</h3>
                        <p class="servicein-desc">SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges. </p>
                        <p class="servicein-desc">Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.</p>
                    </div>
                </div>
            </div>
            <div class="service-buttons">
                <a href="#"><button class="next_caro"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i> </button></a>
            </div>
        </div>
    </section><!--news  section-->

    <section class="container search-container">
        <div class="search-events-grid">
            <div class="homeservice-baner">
                <img src="{{ asset('front_end/img/search-event.png') }}" class="img-responsive">
            </div>
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        <h3 class="servicein-head">Marketing Major</h3>
                        <p class="servicein-desc">SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges. </p>
                        <p class="servicein-desc">Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.</p>
                    </div>
                </div>
            </div>
            <div class="service-buttons">
                <a href="#"><button class="next_caro"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i> </button></a>
            </div>
        </div>
    </section><!--news  section-->

    <section class="container search-container">
        <div class="search-events-grid">
            <div class="homeservice-baner">
                <img src="{{ asset('front_end/img/search-event.png') }}" class="img-responsive">
            </div>
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        <h3 class="servicein-head">Medicine Major</h3>
                        <p class="servicein-desc">SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges. </p>
                        <p class="servicein-desc">Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.</p>
                    </div>
                </div>
            </div>
            <div class="service-buttons">
                <a href="#"><button class="next_caro"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i> </button></a>
            </div>
        </div>
    </section><!--news  section-->

    <section class="container search-container">
        <div class="search-events-grid">
            <div class="homeservice-baner">
                <img src="{{ asset('front_end/img/search-event.png') }}" class="img-responsive">
            </div>
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        <h3 class="servicein-head">Zoology Major</h3>
                        <p class="servicein-desc">SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges. </p>
                        <p class="servicein-desc">Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.</p>
                    </div>
                </div>
            </div>
            <div class="service-buttons">
                <a href="#"><button class="next_caro"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i> </button></a>
            </div>
        </div>
    </section><!--news  section-->

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

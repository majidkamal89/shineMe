@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'Our Team' !!}
@stop
@section('meta_description')
    {!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($page_data[0]->meta_property) ?? 'Our Team' !!}
@stop
@section('robots')
    {!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop

@section('style_sheet')

@endsection

@section('content')

    @if(!empty($page_data[0]))
    <section id="" class="our-team-bg our-team">
        <div class="container-fluid">
            <div class="container">
                <div class="homeour-service">
                    <div class="service-list">
                        <div class="service-in">
                            <ul class="breadcrumb">
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li>{!! ($page_data[0]->page_name) ?? 'Our Team' !!}</li>
                            </ul>
                            <h1 class="servicein-head-title">{!! ($page_data[0]->page_name) ?? 'Our Team' !!}</h1>
                            <div class=" servicein-desc">
                                <p>{!! ($page_data[0]->content_1) ?? '' !!}</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="homeservice-baner">
                <!-- <img src="img/manager.png" class="img-responsive"> -->
            </div>

        </div>
    </section><!--/page-services-1 section-->

    <section id="page-services" class="container-fluid searvices-home page-services news-event-inner our-team">
        <div class="container">
            <h3 class="servicein-head-h3">{!! ($page_data[0]->title_2) ?? '' !!}</h3>
            <div class="servicein-desc">
                <p>
                <div class="our-team-ul" style="padding-left:0;">
                    {!! ($page_data[0]->content_2) ?? '' !!}
                </div>
                </p>
            </div>
            <div class="team_slider_cont">
                <div class="team_slider_controller">
                    <a class="next_team"><img src="{{ asset('front_end/img/white-arrow-left.png') }}"></a>
                    <a class="prev_team"><img src="{{ asset('front_end/img/white-arrow.png') }}"></a>
                </div>
                <div class="row">
                    <div class="team_slider">

                        @if(!empty($page_data[0]->slider))
                            @foreach($page_data[0]->slider as $slider)
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="image_team">
                                            <img src="{{ asset('/').$slider->image }}" title="{!! $slider->title !!}" alt="{!! $slider->alt !!}">
                                        </div>
                                        <label class="team_name">{!! ($slider->heading_1) ?? '' !!}</label>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section><!--/page-services-3  section-->
    @else
        <section id="" class="general-services"></section>
    @endif

@endsection

@section('javascript')

    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".team_slider").slick({
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                fade:false,

                autoplay: true,
                draggable:false,
                dots:false,
                autoplaySpeed: 4000,
                pauseOnHover:false,
                pauseOnFocus:false,
                nextArrow: $('.prev_team'),
                prevArrow: $('.next_team'),
                responsive: [
                    {
                        breakpoint:800,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll:2
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll:1
                        }
                    }


                ]

            });
        });
    </script>
@endsection

@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'Services' !!}
@stop
@section('meta_description')
    {!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($page_data[0]->meta_property) ?? 'Services' !!}
@stop
@section('robots')
    {!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop

@section('style_sheet')
<style>
    .s-top-custom {
        margin-top: 30px;
    }
</style>
@endsection

@section('content')

    @if(!empty($page_data[0]))

        @if(!empty($page_data[0]->services))
            @foreach($page_data[0]->services as $key => $service)
                @if($key % 2 == 0)
                    <section id="page-services" class="container-fluid searvices-home page-services @if($key == 0) s-top @else s-top-custom @endif">
                        <div class="homeservice-baner">
                            <img src="{{ asset('/').$service->banner_image }}" title="{!! $service->title !!}" alt="{!! $service->alt !!}" class="img-responsive">
                        </div>
                        <div class="container">
                            <h1 class="home-serviceh2" style="width: 216px;">@if($key == 0){!! ($page_data[0]->page_name) ?? '' !!}@endif</h1>
                            <div class="homeour-service">
                                <div class="service-list">
                                    <div class="service-in" style="width: 98%;min-height: 344px;">
                                        <p class="servicein-pnum"><span>{!! ($key+1) !!}</span></p>
                                        <h3 class="servicein-head">{!! ($service->heading_1) ?? '' !!}</h3>
                                        <h6 class="servciein-lohead">{!! ($service->heading_2) ?? '' !!}</h6>
                                        <p class="servicein-desc">{!! (str_limit($service->description, $limit = 590, $end = '...')) ?? '' !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-buttons">
                                <a href="{{ URL::route('detailPage', [$page_data[0]->slug, $service->id]) }}"><button class="next_caro"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </button></a>
                            </div>
                        </div>

                    </section><!--/page-services  section-->
                @else
                    <section id="page-services-1" class="container-fluid searvices-home page-services-1 training">
                        <div class="service-buttons">
                            <a href="{{ URL::route('detailPage', [$page_data[0]->slug, $service->id]) }}"><button class="next_caro"> <i class="fa fa-angle-left" aria-hidden="true"></i> Read More </button></a>
                        </div>
                        <div class="container">
                            <div class="homeour-service">
                                <div class="service-list">
                                    <div class="service-in" style="width: 98%;min-height: 344px;">
                                        <p class="servicein-pnum"><span>{!! ($key+1) !!}</span></p>
                                        <h3 class="servicein-head">{!! ($service->heading_1) ?? '' !!}</h3>
                                        <h6 class="servciein-lohead">{!! ($service->heading_2) ?? '' !!}</h6>
                                        <p class="servicein-desc">{!! (str_limit($service->description, $limit = 590, $end = '...')) ?? '' !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="homeservice-baner">
                            <img src="{{ asset('/').$service->banner_image }}" title="{!! $service->title !!}" alt="{!! $service->alt !!}" class="img-responsive">
                        </div>
                    </section><!--/page-services-1 section-->
                @endif
            @endforeach
        @else
            <section id="" class="general-services"></section>
        @endif
    @else
        <section id="" class="general-services"></section>
    @endif

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

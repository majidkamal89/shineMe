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

@endsection

@section('content')

    <section id="service_detail_page" class="container-fluid  inner-services">
        <div class="container">
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in" style="width: 90%;">
                        <ul class="breadcrumb">
                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                            <li><a href="{!! ($page_data[0]->slug == '/') ? $page_data[0]->slug:'/'.$page_data[0]->slug !!}">{!! ($page_data[0]->page_name) ?? 'Services' !!}</a></li>
                            <li>{!! ($service_detail->heading_1) ?? '' !!}</li>
                        </ul>
                        <h1 class="servicein-head"><span>{!! ($service_detail->id) ?? '1' !!}</span> {!! ($service_detail->heading_1) ?? '' !!}</h1>
                        <h6 class="servciein-lohead">{!! ($service_detail->heading_2) ?? '' !!}</h6>
                        <p class="servicein-desc">{!! ($service_detail->description) ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeservice-baner">
            <img src="{{ asset('/').$service_detail->banner_image }}" title="{!! $service_detail->title !!}" alt="{!! $service_detail->alt !!}" class="img-responsive">
        </div>


    </section><!--/page-services-1 section-->
    <section class="container text-center s-decription">
        <div class="col-md-12">
            <h3>MORE ABOUT {!! ($service_detail->heading_2) ?? '' !!}</h3>
            <p>{!! ($service_detail->detail_description) ?? '' !!}</p>
        </div>
    </section>

@endsection

@section('javascript')

    <script type="text/javascript">
        $(document).on('ready', function() {

            if($("#service_detail_page").find('.service-in').height() > 510){
                $("#service_detail_page").find('.service-in').css({'overflow-y':'scroll','height':'510px'});
            }

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

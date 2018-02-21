@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'News & Events' !!}
@stop
@section('meta_description')
    {!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($page_data[0]->meta_property) ?? 'News & Events' !!}
@stop
@section('robots')
    {!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop

@section('style_sheet')

@endsection

@section('content')

    <section id="" class="news-event-inner">
        <div class="container-fluid">
            <div class="container">
                <div class="homeour-service">
                    <div class="service-list">
                        <div class="service-in">
                            <ul class="breadcrumb">
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li><a href="{!! ($page_data[0]->slug == '/') ? $page_data[0]->slug:'/'.$page_data[0]->slug !!}">{!! ($page_data[0]->page_name) ?? 'News & Events ' !!}</a></li>
                                <li>{!! ($news_detail->heading) ?? '' !!}</li>
                            </ul>
                            <h1 class="servicein-head-title">{!! ($news_detail->heading) ?? '' !!}</h1>
                            <h6 class="servciein-lohead">{!! date('M d, Y', strtotime($news_detail->created_at)) !!}</h6>
                            <div class=" servicein-desc">
                                <p>{!! ($news_detail->description) ?? '' !!}</p>
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

    <section id="page-services" class="container-fluid searvices-home page-services news-event-inner ">
        <div class="container">
            <h3 class="servicein-head-h3">More Details About the News</h3>
            <div class="servicein-desc">
                <p>{!! ($news_detail->detail_description) ?? '' !!}</p>
            </div>
            <ul class="social-bar">
                <li class="share"><p>Share This Article:</p></li>
                <li><a href="{!! ($news_detail->facebook) ?? 'javascript:;' !!}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{!! ($news_detail->twitter) ?? 'javascript:;' !!}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{!! ($news_detail->linkedin) ?? 'javascript:;' !!}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{!! ($news_detail->youtube) ?? 'javascript:;' !!}"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </section><!--/page-services-3  section-->

@endsection

@section('javascript')

@endsection

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

    @if(!empty($page_data[0]))
        <section id="" class="news-event-banner">
            <div class="container-fluid">
                <div class="container">
                    <div class="homeour-service">
                        <div class="service-list">
                            <div class="service-in">
                                <ul class="breadcrumb">
                                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                                    <li>{!! ($page_data[0]->page_name) ?? '' !!}</li>
                                </ul>
                                <h1 class="servicein-head">{!! ($page_data[0]->page_name) ?? '' !!}</h1>
                                <p class="servicein-desc">{!! ($page_data[0]->content_1) ?? '' !!}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeservice-baner">
                    <!-- <img src="img/manager.png" class="img-responsive"> -->
                </div>

            </div>
        </section><!--/news-event section-->

        @if(!empty($page_data[0]->newsEvents))
            @foreach($page_data[0]->newsEvents as $key => $val)
                <section class="container news-container">
                    <div class="news-events-grid">
                        <div class="homeservice-baner">
                            <img src="{{ asset('/').$val->banner_image }}" title="{!! $val->title !!}" alt="{!! $val->alt !!}" class="img-responsive">
                        </div>
                        <div class="homeour-service">
                            <div class="service-list">
                                <div class="service-in">
                                    <span>{!! date('M d, Y', strtotime($val->created_at)) !!}</span>

                                    <h3 class="servicein-head">{!! ($val->heading) ?? '' !!}</h3>

                                    <p class="servicein-desc">
                                        {!! str_limit(strip_tags($val->description), $limit = 500, $end = '...') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-buttons">
                            <a href="{{ URL::route('detailPage', [$page_data[0]->slug, $val->id]) }}">
                                <button class="next_caro"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </section><!--news  section-->
            @endforeach
        @endif
        <section class="container text-center news-grid">
            <nav class="pagination">
                <ul>
                    <li class="active"><a href="javascript:;">1</a></li>
                    <li><a href="javascript:;">2</a></li>
                    <li><a href="javascript:;">3</a></li>
                    <li><a href="javascript:;">4</a></li>
                    <li><a href="javascript:;">5</a></li>
                </ul>
            </nav>
        </section>
    @else
        <section id="" class="general-services"></section>
    @endif

@endsection

@section('javascript')

@endsection

@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'General Message' !!}
@stop
@section('meta_description')
    {!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($page_data[0]->meta_property) ?? 'General Message' !!}
@stop
@section('robots')
    {!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop

@section('content')

    @if(!empty($page_data[0]))
    <section id="" class="general-services">
        <div class="container-fluid">
            <div class="container">
                <div class="homeour-service">
                    <div class="service-list">
                        <div class="service-in">
                            <ul class="breadcrumb">
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li>{!! ($page_data[0]->page_name) ?? 'GENERAL MESSAGE' !!}</li>
                            </ul>
                            <h1 class="servicein-head">{!! ($page_data[0]->page_name) ?? '' !!}</h1>

                            <h6 class="servciein-lohead">{!! ($page_data[0]->title_1) ?? '' !!}</h6>
                            <p class="servicein-desc">{!! ($page_data[0]->content_1) ?? '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeservice-baner">
                <!-- <img src="img/manager.png" class="img-responsive"> -->
            </div>

        </div>
    </section><!--/page-services-1 section-->

    @if($page_data[0]->future_major == 1)
        @include('layout.section.home_joinnow')
    @endif

    @if(!empty($page_data[0]->content_2))
    <section class="genral-message">

        <div class="container-fluid">
            <div class="container" style="min-height: 395px;">
                <h1 class="general-h1">{!! ($page_data[0]->title_2) ?? '' !!}</h1>
                <p class="general-p" style="width: 70%;float: none;margin: 0 auto;">{!! ($page_data[0]->content_2) ?? '' !!}</p>
            </div>
        </div>
        <div class="manager-beforeimg">
        </div>
        <!--/container-->
    </section>
    @endif
    @else
        <section id="" class="general-services"></section>
    @endif

@endsection

@section('javascript')

@endsection

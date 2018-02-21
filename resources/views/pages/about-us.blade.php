@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'About Us' !!}
@stop
@section('meta_description')
    {!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($page_data[0]->meta_property) ?? 'About Us' !!}
@stop
@section('robots')
    {!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop

@section('content')

    @if(!empty($page_data[0]))
        <section id="" class="about-us-banner">
            <div class="container-fluid">
                <div class="container">
                    <div class="homeour-service">
                        <div class="service-list">
                            <div class="service-in">
                                <ul class="breadcrumb">
                                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                                    <li>{!! ($page_data[0]->page_name) ?? 'About Us' !!}</li>
                                </ul>
                                <h1 class="servicein-head">{!! ($page_data[0]->page_name) ?? 'About Us' !!}</h1>

                                <h6 class="servciein-lohead">{!! ($page_data[0]->title_1) ?? '' !!}</h6>

                                <div id="servicein_desc_div" style="width: 92%;">
                                    <p class="servicein-desc">{!! ($page_data[0]->content_1) ?? '' !!}</p>
                                </div>

                                <p class="about-quote">“</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeservice-baner">
                    <!-- <img src="img/manager.png" class="img-responsive"> -->
                </div>

            </div>
        </section><!--/page-services-1 section-->

        @if(!empty($page_data[0]->title_2) || !empty($page_data[0]->content_2))
            <section class="container text-center about-whowe">
                <div class="col-md-12">
                    <h2>{!! ($page_data[0]->title_2) ?? '' !!}</h2>

                    <p>{!! ($page_data[0]->content_2) ?? '' !!}</p>
                </div>
            </section>
        @endif

        @if(!empty($page_data[0]->title_3) || !empty($page_data[0]->content_3) ||
        !empty($page_data[0]->title_4) || !empty($page_data[0]->content_4))
            <section class="about-mission">

                <div class="container-fluid">
                    <div class="container">
                        <h1 class="general-h1">{!! ($page_data[0]->title_3) ?? '' !!}</h1>

                        <p class="general-p">{!! ($page_data[0]->content_3) ?? '' !!}</p>

                        <h1 class="general-h1">{!! ($page_data[0]->title_4) ?? '' !!}</h1>

                        <p class="general-p">{!! ($page_data[0]->content_4) ?? '' !!}</p>
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
<script type="text/javascript">
    $(document).ready(function(){
        if($("#servicein_desc_div").height() > 300) {
            $('#servicein_desc_div').css({'overflow-y':'scroll', 'max-height':'300px'});
        }
    });
</script>
@endsection

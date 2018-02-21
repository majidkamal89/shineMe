@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($category_data->page_name) ?? 'Knowlegde Categories' !!}
@stop
@section('meta_description')
    {!! ($category_data->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($category_data->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($category_data->meta_property) ?? 'Knowlegde Categories' !!}
@stop
@section('robots')
    {!! ($category_data->robots) ?? 'index, follow' !!}
@stop

@section('content')

    <section id="" class="knowlegde-categories">
        <div class="container-fluid">
            <div class="container">
                <div class="homeour-service">
                    <div class="service-list">
                        <div class="service-in">
                            <ul class="breadcrumb">
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li><a href="{!! '/'.$category_data->slug !!}">{!! ($category_data->page_name) ?? 'General Message' !!}</a></li>
                                <li>{!! $category_data->heading_1 !!}</li>
                            </ul>
                            <h1 class="servicein-head-title">{!! $category_data->heading_1 !!}</h1>
                            <h6 class="servciein-lohead">Our Bridge Of Organized Knowledge (B.O.O.K) Allows You To: </h6>
                            @if(!empty($category_data->type == 1))
                                <ul class="k-categories servicein-desc">
                                    @if(!empty($category_data->text1))
                                        <li>{!! $category_data->text1 !!}</li>
                                    @endif
                                    @if(!empty($category_data->text2))
                                        <li>{!! $category_data->text2 !!}</li>
                                    @endif
                                    @if(!empty($category_data->text3))
                                        <li>{!! $category_data->text3 !!}</li>
                                    @endif
                                </ul>
                            @else
                                <br/><br/>
                            @endif

                            <div class="row">
                                @foreach($category_data->step as $key => $val)
                                    <div class="col-md-4 servicein-desc">
                                        <h3 class="servicein-head">
                                            <span>{!! ($key+1) !!}</span> {!! $val !!}
                                        </h3>
                                    </div>
                                @endforeach
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

    <section id="page-services" class="container-fluid searvices-home knowledge-services knowledge-cate2 bussiness">
        <div class="homeservice-baner">
            <img src="{{ asset('/').$category_data->banner_image }}" alt="{!! $category_data->alt !!}" title="{!! $category_data->title !!}" class="img-responsive">
        </div>
        <div class="container">
            <h2 class="home-serviceh2"></h2>
            <div class="homeour-service">
                <div class="service-list">
                    <div class="service-in">
                        {{--<p class="servicein-pnum"><span>1</span></p>--}}
                        <h3 class="servicein-head">{!! $category_data->heading_1 !!}</h3>
                        <h6 class="servciein-lohead">{!! $category_data->heading_2 !!}</h6>
                        <div class="k-categories servicein-desc" style="padding-left: 0;">
                            {!! $category_data->description !!}
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="service-buttons">
                <a href="{!! route('listSingleCategory', $category_data->id) !!}"><button class="next_caro"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </button></a>
                <!--  <button class="previous_caro"> <i class="fa fa-angle-left" aria-hidden="true"></i> Previous</button>-->
            </div>--}}
        </div>
    </section><!--/page-services-3  section-->

    <section id="page-services" class="container-fluid searvices-home page-services news-event-inner ">
        <div class="container">

            @for($i=1;$i<4;$i++)
                @php
                $title = 'title_'.$i;
                $content = 'content_'.$i;
                @endphp
                @if(!empty($category_data->$title))
                    <h3 class="servicein-head-h3">{!! $category_data->$title !!}</h3>
                @endif
                @if(!empty($category_data->$content))
                    <div class="servicein-desc">
                        <p>{!! $category_data->$content !!}</p>
                    </div>
                @endif
            @endfor

            <ul class="social-bar">
                <li class="share"><p>Share This Article:</p></li>
                <li><a href="{!! ($category_data->facebook) ?? 'javascript:;' !!}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{!! ($category_data->twitter) ?? 'javascript:;' !!}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{!! ($category_data->linkedin) ?? 'javascript:;' !!}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{!! ($category_data->youtube) ?? 'javascript:;' !!}"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>

    </section>

@endsection

@section('javascript')

@endsection

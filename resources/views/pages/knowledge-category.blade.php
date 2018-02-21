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
                                <li>knowlegde categories</li>
                            </ul>
                            <h1 class="servicein-head-title">Knowledge categories</h1>
                            <h6 class="servciein-lohead">Our Bridge Of Organized Knowledge (B.O.O.K) Allows You To: </h6>
                            @if(!empty($category_data->type == 1))
                                <ul class="k-categories servicein-desc">
                                    @if(!empty($category_data->heading_2))
                                        <li>{!! $category_data->heading_2 !!}</li>
                                    @endif
                                    @if(!empty($category_data->text))
                                        <li>{!! $category_data->text !!}</li>
                                    @endif
                                    @if(!empty($category_data->text_2))
                                        <li>{!! $category_data->text_2 !!}</li>
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
    @if(!empty($category_data->programMajorList[0]))
        @foreach($category_data->programMajorList as $key => $value)
            @if($key % 2 == 0)
                <section id="page-services" @if($key > 0) style="margin-top: 30px;" @endif
                         class="container-fluid searvices-home knowledge-services knowledge-cate2 bussiness">
                    <div class="homeservice-baner">
                        <img src="{{ asset('/').$value->banner_image }}" alt="{!! $value->alt !!}" title="{!! $value->title !!}" class="img-responsive">
                    </div>
                    <div class="container">
                        <h2 class="home-serviceh2"></h2>
                        <div class="homeour-service">
                            <div class="service-list">
                                <div class="service-in">
                                    <p class="servicein-pnum"><span>{!! $key+1 !!}</span></p>
                                    <h3 class="servicein-head">{!! $value->heading_1 !!}</h3>
                                    <h6 class="servciein-lohead">{!! $value->heading_2 !!}</h6>
                                    <div class="k-categories servicein-desc" style="padding-left: 0;">
                                        {!! $value->description !!}
                                    </div>
                                    {{--<ul class="k-categories servicein-desc">
                                        <li>Financial Accounting:<p>Study of the preperationg of financial reports.</p></li>
                                        <li>Principles of Marketing: <p> Introduction to values and difficulties of marketing goods and services.</p></li>
                                        <li>Operations & Production Management: <p>Understanding of strategic decisions for operating a company in manufacturing
                                                or service sectors.</p></li>
                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                        <div class="service-buttons">
                            <a href="{!! route('listSingleCategory', $value->id) !!}"><button class="next_caro"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </button></a>
                            <!--  <button class="previous_caro"> <i class="fa fa-angle-left" aria-hidden="true"></i> Previous</button>-->
                        </div>
                    </div>
                </section><!--/page-services-3  section-->
            @else
                <section id="page-services-1" class="container-fluid searvices-home knowledge-services-1 knowledge-cate2 medicine">
                    <div class="service-buttons">
                        <a href="{!! route('listSingleCategory', $value->id) !!}"><button class="next_caro"> <i class="fa fa-angle-left" aria-hidden="true"></i> Read More </button></a>
                    </div>
                    <div class="container">
                        <div class="homeour-service">
                            <div class="service-list">
                                <div class="service-in">
                                    <p class="servicein-pnum"><span>{!! $key+1 !!}</span></p>
                                    <h3 class="servicein-head">{!! $value->heading_1 !!}</h3>
                                    <h6 class="servciein-lohead">{!! $value->heading_2 !!}</h6>
                                    <div class="k-categories servicein-desc" style="padding-left: 0;">
                                        {!! $value->description !!}
                                    </div>
                                    {{--<ul class="k-categories servicein-desc">
                                        <li>Zoology:<p>Study of the vertebrates with regard to their systematics, ecology, and behavior.</p></li>
                                        <li>Genetics: <p> Study of the organization, expression and evolution of hereditary elements.</p></li>
                                        <li>Human Gross Anatomy: <p>Introduction to anatomic and medical terminology, form, structure and function.</p></li>
                                        <li>Medical Genetics:<p>Introduction to the fundamental concepts in human genetics.</p></li>
                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="homeservice-baner">
                        <img src="{{ asset('/').$value->banner_image }}" alt="{!! $value->alt !!}" title="{!! $value->title !!}" class="img-responsive">
                    </div>
                </section><!--/page-services-1 section-->
            @endif
        @endforeach
    @endif

@endsection

@section('javascript')

@endsection

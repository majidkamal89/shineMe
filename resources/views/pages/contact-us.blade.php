@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'Contact Us' !!}
@stop
@section('meta_description')
    {!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
    {!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
    {!! ($page_data[0]->meta_property) ?? 'Contact Us' !!}
@stop
@section('robots')
    {!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop

@section('style_sheet')

@endsection

@section('content')

    <section id="contact-banner">
        <div class="contact-bag">
            <iframe
                    width="2000"
                    height="740"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnMOiQucXJW_B8d5eC0nDSuKmeCT0-tDQ
    &q={!! urlencode($page_data[0]->content_1) !!}" allowfullscreen>
            </iframe>
            {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13297.97844523167!2d35.39724493917381!3d33.56650497140475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151eeff6b3e907cd%3A0xb1ab5870fac25936!2sAabra%2C+Lebanon!5e0!3m2!1sen!2sin!4v1507113500937" width="2000" height="740" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
            <div class="v-center">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>{!! ($page_data[0]->page_name) ?? 'Contact US' !!}</li>
                    </ul>
                </div>
                <h2 class="container">{!! ($page_data[0]->page_name) ?? '' !!}</h2>

            </div>

        </div>
        <div class="bg-contactright">
        </div>
        <!-- <div class="bg-whitebanner">
        </div> -->

    </section>
    <section class="contact-icons">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>{!! ($page_data[0]->title_1) ?? 'LOCATION' !!}</span>
                        <p>{!! ($page_data[0]->content_1) ?? 'Lebanon, Balouneh J5 Str. Angelina Bld.' !!}</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>{!! ($page_data[0]->title_2) ?? 'CALL US' !!}</span>
                        <p>{!! ($page_data[0]->content_2) ?? '+961 71 092 611  |  +961 71 092 611' !!}</p>
                    </a>
                </li>
                <li>
                    <a href="mailto:info@shinemideast.com">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>{!! ($page_data[0]->title_3) ?? 'MAIL US' !!}</span>
                        <p>{!! ($page_data[0]->content_3) ?? 'info@shinemideast.com' !!}</p>
                    </a>
                </li>
                <li>
                    <a href="http://shinemideast.com" target="_blank">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <span>{!! ($page_data[0]->title_4) ?? 'VISIT US' !!}</span>
                        <p>{!! ($page_data[0]->content_4) ?? 'www.shinemideast.com' !!}</p>
                    </a>
                </li>
            </ul>
        </div>

        @if($errors->any())
            <div class="contact-response-msg" style="padding: 5px; color: red; text-align: center; font-size:20px;">
                <p>Please check below for errors</p>
            </div>
        @endif
        @if(Session::has('success')))
        <div class="contact-response-msg" style="padding: 5px; color: limegreen; text-align: center; font-size:20px;">
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('error')))
        <div class="contact-response-msg" style="padding: 5px; color: red; text-align: center; font-size:20px;">
            {{ Session::get('error') }}
        </div>
        @endif
    </section>

    @if($page_data[0]->contact_us_form == 1)
    <section class="contact-formsec">
        <div class="container">
            <h2>SEND US MESSAGE</h2>
            <div style="padding: 5px; color: red;">
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <form id="contact-form" method="post" enctype="multipart/form-data" action="{{ route('saveContactRequest', [$page_data[0]->slug]) }}">
                <div class="col-md-6 col-sm-12 col-xs-12 contact-left">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-12 contact-name">
                            <input name="name" id="name" placeholder="NAME" value="{!! old('name') !!}" type="text" required>
                        </div>
                        <div class="col-md-12 contact-email">
                            <input name="email" id="email" placeholder="EMAIL" value="{!! old('email') !!}" type="email" required>
                        </div>
                        <div class="col-md-12 contact-sub">
                            <input name="subject" id="sub" placeholder="SUBJECT" value="{!! old('subject') !!}" type="text" required>
                        </div>
                        <div class="col-md-12 hidden-sm hidden-xs">
                            <button type="submit" class="btn btn-lg btn-color btn-submit">Send</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 contact-left">
                    <div class="row">
                        <div class="col-md-12 contact-msg">
                            <textarea name="message" id="comment" placeholder="MESSAGE" rows="9" required>{!! old('message') !!}</textarea>
                        </div>
                        {{--<div class="hidden-lg hidden-md col-xs-12 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-color btn-submit">Send</button>
                        </div>--}}
                    </div>
                </div>
            </form>
        </div>
    </section>
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

            setTimeout(function(){
                $('.contact-response-msg').remove();
            }, 3000);
        });
    </script>
@endsection

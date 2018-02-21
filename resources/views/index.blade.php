@extends('layout.layout')

{{-- Page title --}}
@section('title')
    {!! ($page_data[0]->page_name) ?? 'Home' !!}
@stop
@section('meta_description')
{!! ($page_data[0]->meta_description) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_keywords')
{!! ($page_data[0]->meta_keywords) ?? 'Shopware Agentur, Tutorials, Online Kurse & Hosting.' !!}
@stop
@section('meta_property')
{!! ($page_data[0]->meta_property) ?? 'Home' !!}
@stop
@section('robots')
{!! ($page_data[0]->robots) ?? 'index, follow' !!}
@stop
@section('style_sheet')

@endsection

@section('content')

    @include('layout.section.home_banner')

    @include('layout.section.help_section')

            <!-- ..................slider start .................................................. -->

    @include('layout.section.home_service')

@if($page_data[0]->future_major_program == 1)
    @include('layout.section.home_joinnow')
@endif
    @include('layout.section.home_manager')

    @include('layout.section.home_latestnews')

@endsection

@section('javascript')
    <script src="{{ asset('front_end/js/jquery.easybg.js') }}"></script>

    <script type="text/javascript">
        $(document).on('ready', function () {

            $(".regular").slick({
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                arrows: false,
                autoplay: true,
                draggable: true,
                dots: false,
                autoplaySpeed: 4000,
                pauseOnHover: false,
                pauseOnFocus: false,
                nextArrow: $('.next_caro'),
                prevArrow: $('.previous_caro')
            });
        });
    </script>
    <script type="text/javascript">
        $(document).on('ready', function () {

            $(".home-news").slick({
                dots: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                nextArrow: $('.next_btn'),
                prevArrow: $('.previous_btn')
            });
        });
    </script>
    <script type="text/javascript">
        function removeClassActive(el) {
            $(".banner-item:eq(" + el + ")").removeClass("active").removeClass("removeActive");
        }
        $(document).ready(function () {

            $('.banner').slick({
                speed: 1500,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                arrows: false,
                autoplay: true,
                draggable: true,
                dots: false,
                autoplaySpeed: 6000,
                pauseOnHover: false,
                pauseOnFocus: false,
                onInit: function (index, val, next) {
                    $('.banner .innerItem').addClass('load');
                }
            });
        })
        $(window).load(function () {
            $('img.bgfade').removeClass('active');
            var dg_H = $(window).height();
            var dg_W = $(window).width();
            $('.banner .innerItem, .banner_items .banner-item').css({'height': dg_H, 'width': dg_W});
            /*function anim() {
             $("#wrap img.bgfade").first().appendTo('#wrap').removeClass('active');
             $("#wrap img").first().addClass('active')
             setTimeout(anim, 6000);
             }
             anim();*/
        })
        $(window).resize(function () {
            window.location.href = window.location.href
        })
        /*$(window).load(function(){
         $('.home-bag').easybg({
         images: ['img/home-banner.jpg','img/3.jpg','img/2.jpg'],
         interval: 5000,
         speed:3000,
         ignoreError: false,
         changeMode: 'normal',
         initIndex: 0,
         cloneClassId: null,
         cloneClassName: 'easybgClone',
         debug: true
         });
         });*/
    </script>
@endsection

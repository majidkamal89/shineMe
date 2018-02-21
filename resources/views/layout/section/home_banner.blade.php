@if(!empty($slider_data[0]))
    <section id="home-banner">
        <div class="home-bag">

            <div class="banner">
                @foreach($slider_data as $slider)
                    <div class="item">
                        <div class="innerItem"
                             style="background-image:url('{{ asset('/').$slider->image }}');"></div>
                    </div>
                @endforeach
            </div>

            @if(!empty($slider_data[0]))
                <div class="v-center">
                    <h1 class="text-center trans left-trans delay-1">{!! ($slider_data[0]->heading_1) ?? '' !!}</h1>

                    <h2 class="text-center  trans left-trans delay-2 lato animate slideInDown">{!! ($slider_data[0]->heading_2) ?? '' !!}</h2>

                    <div class="container banner-hr">
                        <hr class=" trans fade-trans delay-3"/>
                    </div>
                    <p class="container  trans left-trans delay-4">{!! ($slider_data[0]->text) ?? '' !!}</p>
                </div>
            @endif

            <div class="scroll-down bounceInDown animated">
                <div class="container">
                    <a href="#section2">
                <span>
                    Reserve Your Place Now
                    <i class="fa fa-angle-down fa-2x"></i>
                </span>
                    </a>
                </div>
            </div>

        </div>
        <div class="bg-goldbanner trans fade-trans delay-1">
        </div>
        <div class="bg-whitebanner ">
        </div>

    </section>
@endif
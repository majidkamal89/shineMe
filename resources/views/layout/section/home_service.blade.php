@if(!empty($services[0]))
    <section class="container-fluid searvices-home homeservice-wrapes">
        <div class="homeservice-baner trans scale-trans delay-2">
            <img src="{!! ($services[0]->services[0]->banner_image) ?? asset('front_end/img/testim-baner.jpg') !!}" class="img-responsive">
        </div>
        <div class="container">
            <h2 class="home-serviceh2">Our Services</h2>

            <div class="regular slider homeour-service">

                @foreach($services[0]->services as $key => $val)
                    <div class="service-in">
                        <p class="servicein-pnum "><span class="trans fade-trans delay-1">{!! ($key+1) !!}</span></p>

                        <h3 class="servicein-head trans delay-1">{!! ($val->heading_1) ?? '' !!}</h3>
                        <h6 class="servciein-lohead trans delay-2">{!! ($val->heading_2) ?? '' !!}</h6>

                        <p class="servicein-desc trans delay-3">{!! (str_limit($val->description, $limit = 590, $end = '...')) ?? '' !!}</p>
                    </div>
                @endforeach

            </div>
            <div class="service-buttons">
                <button class="next_caro trans left-trans delay-2"> Next <i class="fa fa-angle-right"
                                                                            aria-hidden="true"></i></button>
                <!--<button class="previous_caro"> <i class="fa fa-angle-left" aria-hidden="true"></i> Previous</button>-->

            </div>
        </div>

    </section>
@endif
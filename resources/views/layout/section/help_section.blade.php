@if(!empty($about_us[0]))
    <section class="container-fluid" id="section2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-helpstd">
                        <p class="help-quote">“</p>

                        <h2 class="help-line trans fade-trans delay-1">
                            {!! ($about_us[0]->title_1) ?? ($about_us[0]->title_2 ?? 'We help students choose the right major') !!}
                        </h2>

                        <p class="help-text trans top-trans delay-2">
                            {!! ($about_us[0]->content_1) ?? '' !!}
                        </p>
                    </div>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                <br>
            </div>
        </div>
        <!--/container-->
    </section>
@endif
@if(!empty($news_events[0]))
    <section class="container-fluid parallax" id="section7">
        <div class="letest-news"></div>
        <div class="title-letest-news trans top3-trans delay-3">
            <span class="title-letest">LATEST NEWS</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-11 col-sm-12 col-xs-12 news-pra ">
                    <div class="home-news slider">

                        @foreach($news_events[0]->newsEvents as $news)
                            <div>
                                <span>@if(!empty($news->created_at)) {!! date('M d, Y', strtotime($news->created_at)) !!} @endif</span>

                                <h3>{!! ($news->heading) ?? '' !!}</h3>
                                <p>{!! str_limit(strip_tags($news->description), $limit = 500, $end = '...') !!}</p>

                            </div>
                        @endforeach

                    </div>
                    <button class="previous_btn"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous
                    </button>
                    <button class="next_btn news-nextbtn"> Next <i class="fa fa-angle-double-right"
                                                                   aria-hidden="true"></i></button>

                </div>

                <div class="col-md-offset-1 col-md-11 col-sm-11 col-sm-offset-1 news-view-all">
                    @foreach($page_data as $newsSlug)
                        @if($newsSlug->page_sequence == 5)
                            <a href="{!! $newsSlug->slug !!}" role="button" class="news-viewall">View all</a>
                        @endif
                    @endforeach
                </div>
                <!-- -->
            </div>
        </div>
    </section>
@endif
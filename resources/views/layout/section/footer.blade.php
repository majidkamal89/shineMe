<footer id="footer">
    <div id="contact-us" class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 column f-about">
                    @if(!empty($footer[0]))
                        @foreach($footer as $key => $val)
                            @if($val->page_sequence == 1)
                                <h4>{!! ($val->page_name) ?? 'About shine me' !!}</h4>
                            @endif
                        @endforeach
                        <ul class="nav f-about-pra">
                            @foreach($footer as $key => $val)
                                @if($val->page_sequence == 1)
                                    <li><a>{!! (str_limit($val->content_1, $limit = 80, $end = '..')) ?? '' !!}</a></li>
                                    <li>
                                        <hr/>
                                    </li>
                                    <li><a>{!! str_limit(substr($val->content_1,81), $limit = 120, $end = '..') !!}</a>
                                    </li>
                                    @foreach($pages as $page)
                                        @if($page['page_sequence'] == 2 || $page['page_sequence'] == 3)
                                            <li>
                                                <a href="{!! ($page['slug'] == '/') ? $page['slug']:'/'.$page['slug'] !!}">{!! $page['page_name'] !!}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                        <ul class="nav f-social-bar">
                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 column f-contact">
                    @if(!empty($footer[0]))
                        @foreach($footer as $key => $val)
                            @if($val->page_sequence == 6)
                                <h4>{!! ($val->page_name) ?? 'Contact Us' !!}</h4>
                            @endif
                        @endforeach
                    <ul class="nav">
                        @foreach($footer as $key => $val)
                            @if($val->page_sequence == 6)
                                <li><a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        {!! ($val->content_1) ?? 'Lebanon, Balouneh J5 Str. Angelina Bld.' !!}</a></li>
                                <li><a href="javascript:;"><i class="fa fa-phone" aria-hidden="true"></i>
                                        {!! ($val->content_2) ?? '+961 71 092 611 | +961 71 092 611' !!}</a></li>
                                <li><a href="javascript:;"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        {!! ($val->content_3) ?? 'info@shinemideast.com' !!}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 column f-links">
                    <h4>quick links</h4>
                    <div class="">
                        <ul class="nav f-ul-links">
                            @foreach($pages as $page)
                                <li>
                                    <a href="{!! ($page['slug'] == '/') ? $page['slug']:'/'.$page['slug'] !!}">{!! $page['page_name'] !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="">
                        @foreach($footer as $key => $val)
                            @if($val->page_sequence == 6)
                                <iframe
                                        width="335"
                                        height="155"
                                        frameborder="0" style="border:0"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnMOiQucXJW_B8d5eC0nDSuKmeCT0-tDQ
    &q={!! urlencode($val->content_1) !!}" allowfullscreen></iframe>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </div>
    <div class="f-copyright">
        <div class="container">
            <div class="row">
                <p class="text-left col-md-6">Copyright © Shine Me | All Right Reserved</p>

                <p class="text-right col-md-6">Web Design and Web Development By Dow Group</p>
            </div>
        </div>
    </div>
</footer>
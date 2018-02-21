<nav class="navbar navbar-trans navbar-fixed-top shines-header" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-danger logo-img" href="{{ route('home') }}"><img class="img-responsive" src="{{ asset('front_end/img/shine-logo.png') }}"></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="social-bar hidden-xs hidden-sm">
                <li class="search-form">
                    <form id="form-user_v1" name="form-user_v1">
                        <div class="typeahead__container">
                            <div class="typeahead__field">

                                <span class="typeahead__query">
                                    <input class="js-typeahead" name="user_v1[query]" placeholder="Search" autocomplete="off" type="search">
                                </span>
                                <span class="typeahead__button">
                                    <button type="submit">
                                        <i class="typeahead__search-icon"></i>
                                    </button>
                                </span>

                            </div>
                        </div>
                    </form>
                </li>
                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>

            </ul>
            <ul class="nav navbar-nav sh_menubar">
                @foreach($pages as $page)
                    <li {!! (Request::is($page['slug']) ? 'class="active"' : '') !!}><a href="{!! ($page['slug'] == '/') ? $page['slug']:'/'.$page['slug'] !!}">{!! $page['page_name'] !!}</a></li>
                @endforeach
            </ul>
            <ul class="social-bar hidden-md hidden-lg">
                <li class="search-form">
                    <form id="form-user_v1" name="form-user_v1">
                        <div class="typeahead__container">
                            <div class="typeahead__field">

                                <span class="typeahead__query">
                                    <input class="js-typeahead" name="user_v1[query]" placeholder="Search" autocomplete="off" type="search">
                                </span>
                                <span class="typeahead__button">
                                    <button type="submit">
                                        <i class="typeahead__search-icon"></i>
                                    </button>
                                </span>

                            </div>
                        </div>
                    </form>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>

            </ul>
        </div>

    </div>
</nav>
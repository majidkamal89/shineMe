<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shine me</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/skin-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/custome-css.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/jquery-te-1.4.0.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <style>
        .jqte {
            margin: 10px 0 !important;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('admin/dist/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/numeric.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/jquery-te-1.4.0.min.js') }}" charset="utf-8"></script>


    <!-- Custom admin page js -->
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slider_page.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/service_page.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/news_page.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contact_us_page.js') }}"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
@php
use App\Pages;
$pages = Pages::where('status', 1)->orderBy('page_sequence', 'ASC')->get(['page_name','slug','page_sequence'])->toArray();
@endphp
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a  href="{{ url('/') }}" target="_blank" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Shine</b>me</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Shine</b>me</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('admin/dist/img/no_avatar.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ auth()->user()->first_name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li {!! (Request::is('dashboard') ? 'class="active"' : '') !!}>
                    <a href="{{ route('dashboard.home') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview {!! (Request::is('dashboard/*') ? 'active' : '') !!}">
                    <a href="#"><i class="fa fa-cog"></i> <span>Pages</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach($pages as $page)
                            <li {!! (Request::is('dashboard/'.$page['slug']) ? 'class="active"' : '') !!}>
                                <a href="{!! ($page['page_sequence'] == 0) ? route('dashboard.page', ['home-page']):route('dashboard.page', [$page['slug']]) !!}">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>{!! $page['page_name'] !!}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                {{--<li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Company Users</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-product-hunt"></i>
                        <span>Company Stock</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-male"></i>
                        <span>Company SalesMen</span>
                    </a>
                </li>--}}
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('header')
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            @yield('content')
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2015-2019 <a href="{{ route('dashboard.home') }}">DowGroup softwate solution</a>.</strong> All rights
        reserved.
    </footer>

</div>
<!-- ./wrapper -->
<script type="text/javascript" src="{{ asset('admin/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
@yield('script')

</body>
</html>

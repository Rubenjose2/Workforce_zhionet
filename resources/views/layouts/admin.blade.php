<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>{{ config('app.name') }}</title>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    {{-- style --}}
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css"
    />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>
    <!-- Chart Morris js -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Chart Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


    <link href="{{asset('css/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('css/switchery.min.css')}}">
    <link href="{{asset('css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/star-rating.css') }}" rel="stylesheet">   
    <link class="main-stylesheet" href="{{asset('css/corporate.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-header menu-pin menu-behind">
    <!-- BEGIN SIDEBAR -->
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
        <div class="sidebar-overlay-slide from-top" id="appMenu">

        </div>
        <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-header">
            <img src="{{asset('img/logo_white.png')}}" alt="logo" class="brand" data-src="{{asset('img/logo_white.png')}}" data-src-retina="{{asset('img/logo_white_2x.png')}}" width="78" height="22">
            <div class="sidebar-header-controls">
                <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
                <button type="button" class="btn btn-link hidden-sm-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
            </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        <div class="sidebar-menu">
            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu-items">
                <li class="m-t-30">
                    <a href="{{route('admin')}}" class="detailed">
                        <span class="title">Dashboard</span>
                    </a>
                    <span class="icon-thumbnail "><i class="fa fa-dashboard"></i></span>
                </li>
                <li class="">
                        <a href="javascript:;">
                            <span class="title">Users</span>
                            <span class=" arrow"></span>
                        </a>
                        <span class="icon-thumbnail"><i class="fa fa-user fa-lg"></i></span>
                        <ul class="sub-menu">
                            <li class="">
                                <a href="{{route('user.list')}}">Lists of Users</a>
                                <span class="icon-thumbnail">sp</span>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                            <a href="javascript:;">
                                <span class="title">Messages</span>
                                <span class=" arrow"></span>
                            </a>
                            <span class="icon-thumbnail"><i class="fa fa-envelope-o fa-lg"></i></span>
                            <ul class="sub-menu">
                                <li class="">
                                    <a href="{{route('postform.show')}}">Create a message</a>
                                    <span class="icon-thumbnail">sp</span>
                                </li>
                                <li class="">
                                        <a href="{{route('posts.index')}}">List of messages</a>
                                        <span class="icon-thumbnail">sp</span>
                                    </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:;">
                                <span class="title">Performance</span>
                                <span class=" arrow"></span>
                            </a>
                            <span class="icon-thumbnail "><i class="fa fa fa-line-chart fa-lg"></i></span>
                            <ul class="sub-menu">
                                <li class="">
                                    <a href="{{route('excel.import')}}">Upload the file</a>
                                    <span class="icon-thumbnail"><i class="fa fa-upload"></i></span>
                                </li>
                                <li class="">
                                        <a href="{{route('show.scorecard')}}">Explore the file</a>
                                        <span class="icon-thumbnail"><i class="fa fa-search"></i></span>
                                    </li>
                            </ul>
                        </li>



                <li class="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit()" ;>
                        <span class="title">Logout</span>
                    </a>
                    <span class="icon-thumbnail "><i class="fa fa-sign-out fa-lg"></i></span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        <!-- START PAGE HEADER WRAPPER -->
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
            </a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline ">
                    <img src="{{asset('img/logo.png')}}" alt="logo" data-src="{{asset('img/logo.png')}}" data-src-retina="assets/img/logo_2x.png" width="135" height="22">
                </div>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
                    <span class="semi-bold">{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                      </div>
                      <div class="dropdown pull-right hidden-md-down">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="thumbnail-wrapper d32 circular inline">
                    <img src="{{public_path('/uploads/avatars/')}}{{Auth::user()->picture}}" alt="" data-src="/uploads/avatars/{{Auth::user()->picture}}" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
                    </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="/user_edit" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                        <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                        <a <a href="{{ route('logout') }}" class="clearfix bg-master-lighter dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit()" ;>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                            <span class="pull-left">Logout</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
        <!-- END HEADER -->
        <!-- END PAGE HEADER WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <div class="jumbotron" data-pages="parallax">
                    <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
                            @include('flash-messages') 
                            @yield('content')
                    </div>
                </div>
                <!-- END JUMBOTRON -->
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START FOOTER -->
            <div class="container-fluid container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014</span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved.</span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a>
                        </span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Hand-crafted</a>
                        <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>

    <script src="{{asset('js/pace.min.js')}}"></script>
    {{--  <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>  --}}
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.bez.min.js')}}"></script>
    <script src="{{asset('js/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.actual.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{asset('js/pages.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/style.js')}}"></script>
    {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}

    {{--  Datatable  --}}
    <script src="{{asset('js/user_admin.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.tableTools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-datatable-bootstrap.js')}}"></script>
    <script src="{{asset('js/datatables.responsive.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/lodash.min.js')}}" type="text/javascript"></script>



</body>

</html>
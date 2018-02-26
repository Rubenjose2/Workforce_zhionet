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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


    <link href="{{asset('css/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('css/switchery.min.css')}}">
    <link href="{{asset('css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('css/corporate.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-header menu-pin menu-behind">
    <div class="login-wrapper ">
        <!-- START Login Background Pic Wrapper-->
        <div class="bg-pic">
            <!-- START Background Pic-->
            <img src="{{asset('img/satellite_space.jpg')}}" data-src="{{asset('img/satellite_space.jpg')}}" 
                alt="" class="lazy">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                <h2 class="semi-bold text-white">
                    Believe you can and you’re halfway there. —Theodore Roosevelt</h2>
                <p class="small">
                    Picture from :Andrew-Art.
                </p>
            </div>
            <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->
        <!-- START Login Right Container-->
        <div class="login-container bg-white">
            <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <img src="{{asset('img/logo.png')}}" alt="logo" data-src="{{asset('img/logo.png')}}" data-src-retina="assets/img/logo_2x.png" width="135" height="22">
                <p class="p-t-35">Sign into your account</p>
                <!-- START Login Form -->
                <form id="form-login" class="p-t-15" role="form" action="{{ route('login.custom') }}" method="POST">
                    {{csrf_field()}}
                    <!-- START Form Control-->
                    <div class="form-group form-group-default{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Login</label>
                        <div class="controls">
                            <input type="text" name="email" placeholder="email address" class="form-control" required>
                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" name="password" placeholder="Credentials" required>
                        </div>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    @if ($errors->has('status'))
                    <div class="alert alert-danger">
                        {{$errors->first('status')}}
                    </div>
                    @endif
                    <!-- START Form Control-->
                    <div class="row">
                        <div class="col-md-6 no-padding sm-p-l-10">
                            <div class="checkbox ">
                                <input type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1">Keep Me Signed in</label>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="/password/reset" class="text-info small">Forgot my Password</a>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="text-info small">Help? Contact Support</a>
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
                </form>
                <!--END Login Form-->
                <div class="pull-bottom sm-pull-bottom">
                    <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                        <div class="col-sm-9 no-padding m-t-10">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Right Container-->
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
    <script src="{{asset('js/select2.full.min.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{asset('js/pages.js')}}" type="text/javascript"></script>
    {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- style --}}
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('css/switchery.min.css')}}">
    <link href="{{asset('css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('css/corporate.css')}}" rel="stylesheet" type="text/css" />

    <title>Registry</title>
</head>

<body class="login-page">
        @yield('content')
        <script src="{{asset('js/pages.js')}}" type="text/javascript"></script>
</body>

</html>
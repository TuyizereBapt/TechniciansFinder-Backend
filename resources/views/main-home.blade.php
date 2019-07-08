<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <title>Dashboard | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
    <meta name="author" content="The Develovers">
    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
    <link href="{{asset('assets/css/main-ie.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/main-ie-part2.css')}}" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('assets/ico/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <style type="text/css">

        * {
            font-family: 'Raleway', sans-serif;
        }

        #app {
            {{--background: linear-gradient(black, white),url("{{asset('assets/map-home.svg')}}");--}}
                position: relative;
            height: 100vh;
            font-size: 16px;
        }

        #app::after {
            content: "";
            {{--            background: url("{{asset('assets/bg-images/contemporary-dark-data-669996.jpg')}}") center;--}}
    background: url("{{asset('assets/bg-images/black-background-bulb-close-up-716398.jpg')}}") center;
            {{--            background: url("{{asset('assets/bg-images/asphalt-back-road-blurred-background-1546901.jpg')}}") center;--}}
            {{--            background: url("{{asset('assets/bg-images/art-black-background-blur-1040499.jpg')}}") center;--}}
    opacity: 0.8;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            height: 100vh;
        }
    </style>
</head>

<body>
<div id="app">
    @yield('content')
    <footer class="footer">&copy; 2019 The MeetTech Develovers</footer>
</div>
<!-- Vue.js -->
<script src="{{asset('js/app.js')}}"></script>
<!-- Javascript -->
<script src="{{asset('assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/plugins/modernizr/modernizr.js')}}"></script>
</body>

</html>

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
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/my-custom-styles.css')}}" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
    <link href="{{asset('assets/css/main-ie.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/main-ie-part2.css')}}" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/ico/kingadmin-favicon144x144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ico/kingadmin-favicon114x114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/kingadmin-favicon72x72.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('assets/ico/kingadmin-favicon57x57.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/ico/favicon.png')}}">
</head>

<body class="sidebar-fixed topnav-fixed dashboard2">
<!-- WRAPPER -->
<div id="wrapper" class="wrapper">
    <!-- TOP BAR -->
@include('dashboard.partials.top-bar')
<!-- END TOP BAR -->
    <!-- LEFT SIDEBAR -->
@include('dashboard.partials.left-sidebar')
<!-- END LEFT SIDEBAR -->
    <!-- MAIN CONTENT WRAPPER -->
    <div id="main-content-wrapper" class="content-wrapper ">
        <div id="app">
            @yield('content')
        </div>
        <!-- FOOTER -->
    @include('dashboard.partials.footer')
    <!-- END FOOTER -->
    </div>
    <!-- END CONTENT WRAPPER -->
</div>
<!-- END WRAPPER -->
<!-- Vue.js -->
<script src="{{asset('js/app.js')}}"></script>
<!-- Javascript -->
<script src="{{asset('assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/plugins/modernizr/modernizr.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/js/king-common.js')}}"></script>
<script src="{{asset('demo-style-switcher/assets/js/deliswitch.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
{{--<script src="{{asset('assets/js/plugins/stat/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/stat/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/stat/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}"></script>--}}

{{--<script src="{{asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/king-chart-stat.js')}}"></script>--}}
</body>

</html>

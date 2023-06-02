<!DOCTYPE html>
<html class="load-full-screen">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cheap Flight | @yield('title')</title>
    <link href="{{asset('assets/css/blog-style.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl-carousel-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="load-full-screen">
<div id="loader" class="load-full-screen hidden-sm hidden-xs">
    <div class="loading-animation"> <span><i class="fa fa-plane"></i></span> <span><i class="fa fa-bed"></i></span> <span><i class="fa fa-ship"></i></span> <span><i class="fa fa-suitcase"></i></span> </div>
</div>


    @include('includes.header-link')
    <main>
        @yield('content')
    </main>
    @include('includes.footer-link')


    <script src="{{asset('assets/js/respond.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/supersized.3.1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/typeahead.bundle.js')}}"></script>
    <script src="{{asset('assets/js/sticky.js')}}"></script>
    <script src="{{asset('assets/js/js.js')}}"></script>
    <script src="{{asset('assets/js/homejs.js')}}"></script>
</body>
</html>

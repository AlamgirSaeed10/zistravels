<!DOCTYPE html>
<html class="load-full-screen">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" href="{{asset('assets/images/zis_travels.png')}}">
    <meta name="description" content="Search, Compare & Book cheap flights deals to hundreds of worldwide destinations. Find cheap airfare last minute direct flights with Zistravels Travels UK.">
    <meta name="keywords" content="cheap flights, cheapest flights UK, compare flights, travel agent, cheap flight, cheap airlines, flight deals, last minute flights, low cost flights, cheapest tickets, air travel, flight ticket deals, cheap airline tickets, business flights, book online, book cheap flights, cheap flights from London">
    <meta name="robots" CONTENT="index, follow">
    <meta name="email" content="info@zistravels.co.uk">
    <meta name="revisit-after" content="7 days">
    <meta name="Author" content="www.zistravels.co.uk">
    <meta name="language" content="en-us">
    <meta name="reply-to" content="Info@zistravels.co.uk">
    <meta name="classification" content="Travel Agents, Flights, Cheap Flights, Last Minute Flights">
    <meta name="expires" content="0">
    <meta name="distribution" content="Global">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Zistravels | Cheap Flight Deals, Book Now | @yield('title')</title>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <link href="{{asset('assets/css/blog-style.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl-carousel-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/search.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
    <script src="{{asset('assets/js/search.js')}}"></script>
</html>

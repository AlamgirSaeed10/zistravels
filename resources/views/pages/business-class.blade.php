@extends('includes.master')
@section('title', $title)
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
<style>
    .city-title{
        font-family: Fantasy;
        text-align: center;
        font-size: 45px;
    }
    .caro-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
        transition: all 1s;
        margin-bottom: 10px;
    }
    .slider {
        display: flex;
    }

    .slider > div {
        width: 100%;
    }

    .image-nav {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .image-nav-item {
        width: 60px;
        height: 40px;
        margin: 0 5px;
        cursor: pointer;
        opacity: 0.6;
        overflow: hidden;
        transition: opacity 0.3s;
    }

    .image-nav-item:hover {
        opacity: 1;
    }

    .image-nav-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .slider-container,
        .image-nav {
            margin-right: 5%;
            margin-left: 5%;
        }

        .caro-image {
            height: 200px;
        }

        .image-nav-item {
            width: 40px;
            height: 30px;
        }
    }
    @media (max-width: 576px) {
        .caro-image {
            height: 150px;
            margin-bottom: 10px;
        }
    }
        @media (max-width: 576px) {
            .main-slider {
                margin-top: 25%;
            }
        }

        .image-nav-item {
            width: 80px;
            height: 50px;
    }

</style>
<body>
  <div class="site-wrapper">
   <div class="clearfix"></div>
    <section class="main-slider">

    <div class="row text-center">
        <div class="col-lg-6">
            <h1 class="city-title">Dubai Tour</h1>
            <div class="slider-container slider">
                <div class="slider">
                    <div>
                        <img class="caro-image" src="{{asset('assets/images/tour/dubai/dubai-1.png')}}" alt="Dubai travels & tour images">
                        <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                    </div>
                    <div>
                        <img class="caro-image" src="{{asset('assets/images/tour/dubai/dubai-2.png')}}" alt="Dubai travels & tour images">
                        <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                    </div>
                    <div>
                        <img class="caro-image" src="{{asset('assets/images/tour/dubai/dubai-3.png')}}" alt="Dubai travels & tour images">
                        <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                    </div>
                    <div>
                        <img class="caro-image" src="{{asset('assets/images/tour/dubai/dubai-4.png')}}" alt="Dubai travels & tour images">
                        <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                    </div>
                    <div>
                        <img class="caro-image" src="{{asset('assets/images/tour/dubai/dubai-5.png')}}" alt="Dubai travels & tour images">
                        <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                    </div>
                </div>
            </div>

            <div class="image-nav mb-5">
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/dubai/dubai-1.png')}}" alt="Dubai travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/dubai/dubai-2.png')}}" alt="Dubai travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/dubai/dubai-3.png')}}" alt="Dubai travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/dubai/dubai-4.png')}}" alt="Dubai travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/dubai/dubai-5.png')}}" alt="Dubai travels & tour images">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h1 class="city-title">Turkey Tour</h1>
            <div class="slider-container slider">
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/turkey/turkey-1.png')}}" alt="Turkey travels & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/turkey/turkey-2.png')}}" alt="Turkey travels & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/turkey/turkey-3.png')}}" alt="Turkey travels & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/turkey/turkey-4.png')}}" alt="Turkey travels & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/turkey/turkey-5.png')}}" alt="Turkey travels & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>

            </div>
            <div class="image-nav mb-5">
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/turkey/turkey-1.png')}}" alt="Turkey travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/turkey/turkey-2.png')}}" alt="Turkey travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/turkey/turkey-3.png')}}" alt="Turkey travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/turkey/turkey-4.png')}}" alt="Turkey travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/turkey/turkey-5.png')}}" alt="Turkey travels & tour images">
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <h1 class="city-title">Qatar Tour</h1>
            <div class="slider-container slider">
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/qatar/qatar-1.png')}}" alt="Qatar travel & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/qatar/qatar-2.png')}}" alt="Qatar travel & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/qatar/qatar-3.png')}}" alt="Qatar travel & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/qatar/qatar-4.png')}}" alt="Qatar travel & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>
                <div>
                <img class="caro-image" src="{{asset('assets/images/tour/qatar/qatar-5.png')}}" alt="Qatar travel & tour images">
                    <a class="book-link btn btn-info" href="{{route('home.contact_us')}}">Book now</a>
                </div>

            </div>
            <div class="image-nav mb-5">
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/qatar/qatar-1.png')}}" alt="Qatar travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/qatar/qatar-2.png')}}" alt="Qatar travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/qatar/qatar-3.png')}}" alt="Qatar travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/qatar/qatar-4.png')}}" alt="Qatar travels & tour images">
                </div>
                <div class="image-nav-item">
                    <img src="{{asset('assets/images/tour/qatar/qatar-5.png')}}" alt="Qatar travels & tour images">
                </div>
            </div>
        </div>
    </div>



       <div class="clearfix"></div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script>
    jQuery(document).ready(function($){
      var slider = $('.slider').slick({
        prevArrow: false,
        nextArrow: false,
        autoplay:true,
        autoplaySpeed: 2000,
      });
    });
  </script>
</body>
</html>
@endsection

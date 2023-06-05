@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
    <section>
        <!-- START: ABOUT-US -->
        <div style="padding-bottom:0;" class="row about-intro">
            <div class="container clear-padding">
                <div class="col-md-7 col-sm-6 no-margin-text color-text">
                    <h2>ABOUT US</h2>
                    <h4>Who we are?</h4>
                    <p><strong>“Reliance Travels Ltd </strong> Just concentrate on our name and it says all to you. One of the foremost and reliable UK based traveling company. Our mission is to provide the best services at affordable prices to our clients. So achieving our customer satisfaction is our goal.</p>
                    <h4>Our Affiliation:</h4>
                    <p><strong>Reliance Travels</strong> is the independent travel agency, providing the services since last few years. We are registered as limited company in United Kingdom <strong>(Company Registration no. 07828941).</strong></p>
                </div>
                <div class="col-md-5 col-sm-6">
                    <img class="no-padding" src="{{asset('assets/images/images/about-us.jpg')}}" alt="">
                </div>
                <div class="col-xs-12 no-margin-text">
                    <h4>Our working Technique:</h4>
                    <p>Cheap is cheap. We always offer economical <a href="https://www.reliancetravels.co.uk/cheap-flights.html" title="Cheap Flight" target="_blank"><strong>flights</strong></a>. This is why we have something for everyone. Catering to the tastes of the most discerning travel connoisseur, as well as the economy conscious budget traveler. We at <strong>Reliance</strong> do indeed live up to the credo of a <strong>"One Stop Solution"</strong>. By making the reservation procedure simpler, easier and faster, we are trying to take away all your travel worries so kick off your shoes, free your mind, relax and be rid of Traveler's fatigue syndrome forever.</p>
                </div>
            </div>
        </div>
        <!-- END: ABOUT-US -->
        <!-- START: OUR SERVICE -->
        <div style="padding-top:0;" class="row our-service">
            <div class="overlay">
                <div class="container clear-padding">
                    <div class="service-left col-md-12">
                        <div class="section-title color-text">
                            <h4>Our Services:</h4>
                            <p>Proudly speaking, <strong>we can book from everywhere to anywhere.</strong> With the flights connections of 84 major international airlines we cover the globe. So just dial our number or send us an online query, our professional and friendly consultants will be glad to help you with all your travel needs. Do not hesitate to call us even if you just need the free travel opinion.</p>
                            <p><strong>So come with us and let’s span the globe.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: OUR SERVICE -->
        <!-- START: OUR PARTNER -->
        <div class="row our-partner">
            <div class="container clear-padding">
                <div class="owl-carousel" id="partner">
                    <div>
                        <img src="{{asset('assets/images/images/klm.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/alitalia.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/amirates.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/tap.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/airfrance.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/luftansa.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/bmi.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/images/jetairways.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- END: OUR PARTNER -->
    </section>
    </div>

@endsection

@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">




        <section>
            <div class="row full-width-search single-search" style="background-image: url(assets/images/cheap-flights.png);height:350px;">
            </div>
        </section>





        <section>
            <div class="row full-width-search">
                <div class="container clear-padding">
                    <div class="row">
                        <div class="col-md-12 offer-slider">
                            <div class="owl-carousel text-right" id="offer1">

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/CZ.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                China Southern Airlines<br>
                                                <small class="text-yellow">Travel to Ho Chi Minh City</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">448.8</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/QR.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Qatar Airways<br>
                                                <small class="text-yellow">Travel to Kathmandu</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">612</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/LH.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Lufthansa<br>
                                                <small class="text-yellow">Travel to Cape Town</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">554.4</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/TK.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Turkish Airlines<br>
                                                <small class="text-yellow">Travel to Dar es Salaam</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">373.6</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/EK.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Emirates<br>
                                                <small class="text-yellow">Travel to Christchurch</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">1415.2</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/QR.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Qatar Airways<br>
                                                <small class="text-yellow">Travel to Bangkok</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">520</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/EK.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Emirates<br>
                                                <small class="text-yellow">Travel to Cebu</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">828.8</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/LH.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Lufthansa<br>
                                                <small class="text-yellow">Travel to Windhoek</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">493.6</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/EK.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Emirates<br>
                                                <small class="text-yellow">Travel to Gaborone</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">729.6</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/QH.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                <br>
                                                <small class="text-yellow">Travel to Singapore</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">503.2</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/TK.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Turkish Airlines<br>
                                                <small class="text-yellow">Travel to Abuja</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">464.8</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item item-bg trans-blue">
                                    <div class="row">
                                        <div class="col-md-3 text-center no-padding p-0-5">
                                            <img src="{{ asset('assets/images/airlines-jpg/AI.jpg') }}">
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h4 class="min_airline">
                                                Air India<br>
                                                <small class="text-yellow">Travel to Goa</small>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-12 no-padding">
                                            <h4 class="min_price" style="text-align:center;">£ <span
                                                    style="color:#FFD71E;">420.8</span>/Person</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="landingone-why">
            <div class="row">
                <div class="container clear-padding">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInLeft">
                        <div class="choose-us-item text-center">
                            <div class="choose-icon">
                                <i class="fa fa-gbp fa-circle"></i>
                            </div>
                            <h4>Best Price Guarantee</h4>
                            <p style="text-align:center;">We offer the best lowest price with no comparison.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInUp">
                        <div class="choose-us-item text-center">
                            <div class="choose-icon"><i class="fa fa-plane"></i></div>
                            <h4>Book Now & Pay Later</h4>
                            <p style="text-align:center;">Pay £ 50 initial payment now &amp; balance later.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInDown">
                        <div class="choose-us-item text-center">
                            <div class="choose-icon"><i class="fa fa-thumbs-up"></i></div>
                            <h4>Excellent Services</h4>
                            <p style="text-align:center;">We are having thousands of satisfied clients.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInRight">
                        <div class="choose-us-item text-center">
                            <div class="choose-icon"><i class="fa fa-lock"></i></div>
                            <h4>Financial Protection</h4>
                            <p style="text-align:center;">We provide the most valued Financial Protection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row last-minute-deal">
                <div class="container">
                    <div class="section-title text-center color-text">
                        <h1>LAST MINUTE DEALS</h1>
                        <h4>SAVE MORE</h4>
                    </div>
                    <div class="owl-carousel" id="lastminute">


                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/ADD.jpg') }}"
                                    alt="Last Minute Flights To Addis Ababa">
                                <h5 class="location">Addis Ababa</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£545</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>



                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/MNL.jpg') }}"
                                    alt="Last Minute Flights To Manila">
                                <h5 class="location">Manila</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£834</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>



                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/DPS.jpg') }}"
                                    alt="Last Minute Flights To Denpasar">
                                <h5 class="location">Denpasar</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£1022</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>



                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/JNB.jpg') }}"
                                    alt="Last Minute Flights To Johannesburg">
                                <h5 class="location">Johannesburg</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£364</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>



                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/LUN.jpg') }}"
                                    alt="Last Minute Flights To Lusaka">
                                <h5 class="location">Lusaka</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£813</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>

                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/LOS.jpg') }}"
                                    alt="Last Minute Flights To Lagos">
                                <h5 class="location">Lagos</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£373</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>



                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/FNA.jpg') }}"
                                    alt="Last Minute Flights To Freetown">
                                <h5 class="location">Freetown</h5>
                            </div>
                            <div class="body text-center">

                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£592</h3>
                                <p>21-Apr - 25-Jun</p>

                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>



                        <div class="col-grid">
                            <div class="wrapper"> <img src="{{ asset('assets/images/destinations/NBO.jpg') }}"
                                    alt="Last Minute Flights To Nairobi">
                                <h5 class="location">Nairobi</h5>
                            </div>
                            <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£557</h3>
                                <p>21-Apr - 25-Jun</p>
                            </div>
                            <div class="bottom"> <a href="{{route('home.contact_us')}}">Enquire Now</a> </div>
                        </div>





                    </div>
                </div>
            </div>
        </section>
        <section id="top-flight-row">
            <div style="padding-top:0;" class="row top-flight">
                <div class="container">
                    <div class="section-title text-center color-text">
                        <h1>TOP DESTINATION</h1>
                        <h4>CHECK OUT FLIGHTS TO TOP DESTINATIONS</h4>
                    </div>
                    <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="{{asset('assets/images/destinations/JNB.jpg')}}"
                            alt="Top Flight Destinations - Johannesburg Flights">
                        <div class="tour-brief">
                            <div class="pull-left">
                                <h4 class="text-white"><i class="fa fa-map-marker"></i>JOHANNESBURG</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="text-white">£ 561/Person</h4>
                            </div>
                        </div>
                        <div class="tour-detail text-center">
                            <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                            <p style="text-align:center"><strong>Starting £ 561/Person</strong></p>
                            <p style="text-align:center"><a href="{{route('home.contact_us')}}">Enquire Now</a></p>
                        </div>
                    </div>




                    <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="{{asset('assets/images/destinations/ACC.jpg')}}"
                            alt="Top Flight Destinations - Accra Flights">
                        <div class="tour-brief">
                            <div class="pull-left">
                                <h4 class="text-white" ><i class="fa fa-map-marker"></i>ACCRA</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="text-white" >£ 413/Person</h4>
                            </div>
                        </div>
                        <div class="tour-detail text-center">
                            <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                            <p style="text-align:center"><strong>Starting £ 413/Person</strong></p>
                            <p style="text-align:center"><a href="{{route('home.contact_us')}}">Enquire Now</a></p>
                        </div>
                    </div>




                    <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="{{asset('assets/images/destinations/MNL.jpg')}}"
                            alt="Top Flight Destinations - Manila Flights">
                        <div class="tour-brief">
                            <div class="pull-left">
                                <h4 class="text-white"><i class="fa fa-map-marker"></i>MANILA</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="text-white">£ 834/Person</h4>
                            </div>
                        </div>
                        <div class="tour-detail text-center">
                            <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                            <p style="text-align:center"><strong>Starting £ 834/Person</strong></p>
                            <p style="text-align:center"><a href="{{route('home.contact_us')}}">Enquire Now</a></p>
                        </div>
                    </div>




                    <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="{{asset('assets/images/destinations/BJL.jpg')}}"
                            alt="Top Flight Destinations - Banjul Flights">
                        <div class="tour-brief">
                            <div class="pull-left">
                                <h4 class="text-white"><i class="fa fa-map-marker"></i>BANJUL</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="text-white">£ 575/Person</h4>
                            </div>
                        </div>
                        <div class="tour-detail text-center">
                            <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                            <p style="text-align:center"><strong>Starting £ 575/Person</strong></p>
                            <p style="text-align:center"><a href="{{route('home.contact_us')}}">Enquire Now</a></p>
                        </div>
                    </div>




                    <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="{{asset('assets/images/destinations/DPS.jpg')}}"
                            alt="Top Flight Destinations - Denpasar Flights">
                        <div class="tour-brief">
                            <div class="pull-left">
                                <h4 class="text-white"><i class="fa fa-map-marker"></i>DENPASAR</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="text-white">£ 1057/Person</h4>
                            </div>
                        </div>
                        <div class="tour-detail text-center">
                            <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                            <p style="text-align:center"><strong>Starting £ 1057/Person</strong></p>
                            <p style="text-align:center"><a href="{{route('home.contact_us')}}">Enquire Now</a></p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="{{asset('assets/images/destinations/NBO.jpg')}}"
                            alt="Top Flight Destinations - Nairobi Flights">
                        <div class="tour-brief">
                            <div class="pull-left">
                                <h4 class="text-white"><i class="fa fa-map-marker"></i>NAIROBI</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="text-white">£ 600/Person</h4>
                            </div>
                        </div>
                        <div class="tour-detail text-center">
                            <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                            <p style="text-align:center"><strong>Starting £ 600/Person</strong></p>
                            <p style="text-align:center"><a href="{{route('home.contact_us')}}">Enquire Now</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="top-flight-row">
            <div style="padding-top:0;" class="row top-flight">
                <div class="container">
                    <div class="section-title text-muted">

                        <h4>Book cheap flights on Zistravels</h4>
                        <p>
                            <a href="{{ route('home.index') }}">Zistravels LTD</a> in comparison to 800+ airlines, book
                            for both regular and budget airlines, that fly to 9000+
                            destinations throughout the world. Are you planning a trip to Africa, want to see Bangkok,
                            or want to take a cultural tour of Europe? You've arrived to the right location. We'll assist
                            you in finding the best flight prices all across the world. Our website is accessible on any
                            device,
                            whether at home, at work, or in the pub. Book your <b>cheap air tickets</b> as soon as possible,
                            no matter where you are!
                        </p>

                        <h4>How can you get cheap flight tickets?</h4>
                        <ul>

                            <li>There could be cheap plane tickets offers available at any time! It's a good idea to look
                                for flights on Tuesday and book flights on Wednesday. </li>
                            <li>It's best to purchase your tickets at least 4-5 months in advance. </li>
                            <li> Do you feel like stealing a deal? Check out some of our
                                <a href="{{ route('home.cheap_flights') }}">last minute deals</a> for special
                                airline offers and active discount codes.
                            </li>
                            <li> Last-minute bargains might also help you save money. However,
                                you'll need some luck because prices fluctuate depending on the season and availability.
                            </li>
                            <li>Flying with multiple carriers or from different airports on
                                the way there and back may also assist keep the vacation budget low. During the search
                                process,
                                use our filters to discover the ticket that best meets your needs.</li>
                        </ul>
                        <h4>Why are airline ticket prices so different?</h4>
                        <p>The price of a plane ticket is determined by a number of factors.
                            The airline determines the price of an airline ticket first. The pricing varies depending on the
                            booking class.
                            Ticket prices are often lower if you book a flight months ahead of time. The prices of airline
                            tickets for this flight will
                            go down or merely rise in the week before the flight departs, depending on the airline's purpose
                            and market
                            demand. Changes in fuel prices, airport taxes, and maintenance costs are all factors that affect
                            airline prices.</p>


                        <h4>What name should I write on the airline ticket?</h4>
                        <p>The name you must fill out on your cheap plane ticket must match the
                            name on your passport. That is to say, the first and last names on the passport.
                            You are not required to include your middle name. Pay close attention to the name you write
                            down when making your reservation, as changing it afterward can be costly! If your name is
                            incorrect on your e-ticket, please notify us as soon as possible to avoid incurring additional
                            fees.</p>


                        <h4>How can I purchase to and from destination flights?</h4>
                        <p>Do you wish to book
                            <a href="{{ route('home.cheap_flights') }}">cheap flight tickets</a>
                            to Singapore and return ticket at the same time? That's a great idea! You can create your own
                            itinerary by booking round
                            trip flights in one transaction. In our search box, select the ‘round trip’ option instead of
                            one way. You have the option
                            of flying back from a different airport than the one where you arrived.
                        </p>
                    </div>

                    {{--                <div class="section-title text-center color-text clrblack"> --}}

                    {{--                    <h4 style="float:left;">Book cheap flights on Zistravels</h4> --}}
                    {{--                    <p style="color:#000; float:left; text-align:left;"> --}}
                    {{--                        <a href="{{route('home.index')}}">Zistravels LTD</a> --}}
                    {{--                        in comparison to 800+ airlines, book for both regular and budget airlines, that fly to 9000+ --}}
                    {{--                        destinations throughout the world. Are you planning a trip to Africa, want to see Bangkok, --}}
                    {{--                        or want to take a cultural tour of Europe? You've arrived to the right location. We'll assist --}}
                    {{--                        you in finding the best flight prices all across the world. Our website is accessible on any device, --}}
                    {{--                        whether at home, at work, or in the pub. Book your <b>cheap air tickets</b> as soon as possible, no matter where you are!</p> --}}

                    {{--                    <h4 style="float:left;">How can you get cheap flight tickets?</h4> --}}
                    {{--                    <p style="color:#000; float:left; text-align:left;"> --}}
                    {{--                        <li>There could be cheap plane tickets offers available at any time! It's a good idea to look --}}
                    {{--                            for flights on Tuesday and book flights on Wednesday. </li> --}}
                    {{--                        <li>It's best to purchase your tickets at least 4-5 months in advance. </li> --}}
                    {{--                        <li> Do you feel like stealing a deal? Check out some of our --}}
                    {{--                            <a href="{{route('home.cheap_flights')}}">last minute deals</a> for special --}}
                    {{--                            airline offers and active discount codes.</li> --}}
                    {{--                        <li> Last-minute bargains might also help you save money. However, --}}
                    {{--                            you'll need some luck because prices fluctuate depending on the season and availability. </li> --}}
                    {{--                        <li>Flying with multiple carriers or from different airports on --}}
                    {{--                            the way there and back may also assist keep the vacation budget low. During the search process, --}}
                    {{--                            use our filters to discover the ticket that best meets your needs.</li> --}}
                    {{--                    </p> --}}

                    {{--                    <h4 style="float:left;">Why are airline ticket prices so different?</h4> --}}
                    {{--                    <p style="color:#000; float:left; text-align:left;">The price of a plane ticket is determined by a number of factors. --}}
                    {{--                        The airline determines the price of an airline ticket first. The pricing varies depending on the booking class. --}}
                    {{--                        Ticket prices are often lower if you book a flight months ahead of time. The prices of airline tickets for this flight will --}}
                    {{--                        go down or merely rise in the week before the flight departs, depending on the airline's purpose and market --}}
                    {{--                        demand. Changes in fuel prices, airport taxes, and maintenance costs are all factors that affect airline prices.</p> --}}


                    {{--                    <h4 style="float:left;">What name should I write on the airline ticket?</h4> --}}
                    {{--                    <p style="color:#000; float:left; text-align:left;">The name you must fill out on your cheap plane ticket must match the --}}
                    {{--                        name on your passport. That is to say, the first and last names on the passport. --}}
                    {{--                        You are not required to include your middle name. Pay close attention to the name you write --}}
                    {{--                        down when making your reservation, as changing it afterward can be costly! If your name is --}}
                    {{--                        incorrect on your e-ticket, please notify us as soon as possible to avoid incurring additional fees.</p> --}}


                    {{--                    <h4 style="float:left;">How can I purchase to and from destination flights?</h4> --}}
                    {{--                    <p style="color:#000; float:left; text-align:left;">Do you wish to book --}}
                    {{--                        <a href="{{route('home.cheap_flights')}}">cheap flight tickets</a> --}}
                    {{--                        to Singapore and return ticket at the same time? That's a great idea! You can create your own itinerary by booking round --}}
                    {{--                        trip flights in one transaction. In our search box, select the ‘round trip’ option instead of one way. You have the option --}}
                    {{--                        of flying back from a different airport than the one where you arrived.</p> --}}
                    {{--                </div> --}}
                </div>
            </div>
        </section>
    </div>

@endsection

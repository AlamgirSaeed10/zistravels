@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
    <section>
        <div class="row full-width-search single-search solid-yellow">
            <div class="container clear-padding">
                <div class="row">
                    <div class="col-md-12 col-sm-12 search-section ">
                        <div role="tabpanel">
                            <div class="tab-content solid-yellow landingone">
                                <!-- BEGIN: FLIGHT SEARCH -->
                                <div role="tabpanel" class="tab-pane active p-b-20" id="flight">
                                    <form action="/loading" method="post" name="frmsearch" id="frmsearch" autocomplete="off">
                                        <input type="text" name="page_id" value="cheapflight">
                                        <input type="text" name="h_submit" value="1" />
                                        <input type="text" name="airline" value="All Airlines">
                                        <input type="text" value="Cheap Flight Search" id="requesttitle" name="requesttitle">

                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12 no-padding">
                                                <div class="row">
                                                    <div class="col-md-12 product-search-title black-text">Search for Cheap Flights</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 search-col-padding">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                                                                <div class="col-md-2 col-sm-3 col-xs-6 no-padding">
                                                                    <div class="cabin_class">
                                                                        <div class="select-box">
                                                                            <div class="select-box__current" tabindex="1">
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Economy" value="Economy" name="cabin_class" checked/>
                                                                                    <p class="select-box__input-text">Economy</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Premium_Economy" value="Premium Economy" name="cabin_class"/>
                                                                                    <p class="select-box__input-text">Premium Class</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Business_Class" value="Business Class" name="cabin_class"/>
                                                                                    <p class="select-box__input-text">Business Class</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="First_Class" value="First Class" name="cabin_class"/>
                                                                                    <p class="select-box__input-text">First Class</p>
                                                                                </div>
                                                                                <i class="select-box__icon fa fa-angle-down"></i>
                                                                            </div>
                                                                            <ul class="select-box__list">
                                                                                <li>
                                                                                    <label class="select-box__option" for="Economy">Economy</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label class="select-box__option" for="Premium_Economy">Premium Class</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label class="select-box__option" for="Business_Class">Business Class</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label class="select-box__option" for="First_Class">First Class</label>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6 no-padding">
                                                                    <div class="pax">
                                      <span class="black-text">
                                        <i class="fa fa-angle-down"></i>&nbsp;Passenger(s)
                                      </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-3 col-xs-6 no-padding">
                                                                    <div class="flight_type">
                                                                        <div class="select-box">
                                                                            <div class="select-box__current" tabindex="1">
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="0" value="Return" name="flight_type" checked="checked"/>
                                                                                    <p class="select-box__input-text">Round Trip</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="1" value="Oneway" name="flight_type"/>
                                                                                    <p class="select-box__input-text">One Way</p>
                                                                                    <i class="select-box__icon fa fa-angle-down"></i>
                                                                                </div>
                                                                            </div>
                                                                            <ul class="select-box__list">
                                                                                <li>
                                                                                    <label class="select-box__option return-section" for="0">Round Trip</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label class="select-box__option oneway-section" for="1">One Way</label>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-sm-3 col-xs-6 no-padding">
                                                                    <label style="padding-left:0;" class="radio-inline black-text">
                                                                        <input name="direct_flights" type="checkbox" value="Yes" />Direct Flights
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="passengers_details">
                                                            <div class="inn_pax">
                                                                <div class="close_pax"><i class="fa fa-times"></i></div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <label class="text-white">Adults<br/><font><small>(12 or +)</small></font></label>
                                                                    </div>
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <input id="adult_count" name="padults" value="1" class="form-control quantity-padding">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <label class="text-white">Children<br/><font><small>(2 to 11)</small></font></label>
                                                                    </div>
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <input type="text" id="child_count" name="pchildren" value="0" class="form-control quantity-padding">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <label class="text-white">Infants<br/><font><small>(Below 2)</small></font></label>
                                                                    </div>
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <input type="text" id="infant_count" name="pinfants" value="0" class="form-control quantity-padding">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-6 search-col-padding">
                                                <div class="input-group">
                                                    <input value="London - LON" type="text" name="departure_airport" id="departure_airport" class="form-control"  placeholder="Enter Departure City"><span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 search-col-padding">
                                                <div class="input-group">
                                                    <input autocomplete="off" type="text" name="destination_airport" id="destination_airport" class="form-control"  placeholder="Enter Destination City"><span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 search-col-padding">
                                                <div class="input-group">
                                                    <input name="departure_date" type="text" class="landing_page_dep_date form-control" id="departure_date" placeholder="Enter Departure Date" readonly><span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 search-col-padding return-date-selection">
                                                <div class="input-group">
                                                    <input name="return_date" type="text" class="form-control" id="return_date" placeholder="Enter Returning Date" readonly><span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="pax_contact col-md-9 col-sm-9 col-xs-12 no-padding">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-6 search-col-padding">
                                                        <div class="input-group">
                                                            <input autocomplete="off" type="text" name="cname" id="cname" class="form-control"  placeholder="Your Full Name">
                                                            <span class="input-group-addon"><i class="icon-padding fa fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6 search-col-padding">
                                                        <div class="input-group">
                                                            <input autocomplete="off" type="text" name="cphone" id="cphone" class="form-control"  placeholder="UK Contact No."><span class="input-group-addon"><i class="icon-padding fa fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 search-col-padding">
                                                        <div class="input-group">
                                                            <input autocomplete="off" type="text" name="cemail" id="cemail" class="form-control"  placeholder="Enter Your Email"><span class="input-group-addon"><i class="icon-padding fa fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 search-col-padding">
                                                        <label>
                                                            <input type="checkbox" name="newsletter_check" value="1" >&nbsp;<strong style="color: #000000!important;">Get Promotion Deals</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-offset-9 col-md-3 col-sm-3 col-xs-12 search-button-div search-col-padding btn-padding">
                                                <button type="button" id="cheapsearchButton" class="search-button btn transition-effect">Search <span class="hidden-sm">Flights</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END: FLIGHT SEARCH -->
                            </div>
                            <!-- END: TAB PANE -->
                        </div>
                    </div>
                </div>
            </div>
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
                                        <img src="{{asset('assets/images/airlines-jpg/CZ.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">448.8</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/QR.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">612</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/LH.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">554.4</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/TK.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">373.6</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/EK.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">1415.2</span>/Person</h4>
                                    </div>
                                    <!-- <div class="col-md-5 no-padding text-right">
                                      <a href="tel:">Call Now</a>
                                    </div> -->
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/QR.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">520</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/EK.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">828.8</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/LH.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">493.6</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/EK.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">729.6</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/QH.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">503.2</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/TK.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">464.8</span>/Person</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="item item-bg trans-blue">
                                <div class="row">
                                    <div class="col-md-3 text-center no-padding p-0-5">
                                        <img src="{{asset('assets/images/airlines-jpg/AI.jpg')}}">
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
                                        <h4 class="min_price" style="text-align:center;">£ <span style="color:#FFD71E;">420.8</span>/Person</h4>
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
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/ADD.jpg')}}" alt="Last Minute Flights To Addis Ababa">
                            <h5 class="location">Addis Ababa</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£545</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Addis-Ababa">Enquire Now</a> </div>
                    </div>



                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/MNL.jpg')}}" alt="Last Minute Flights To Manila">
                            <h5 class="location">Manila</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£834</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Manila">Enquire Now</a> </div>
                    </div>



                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/DPS.jpg')}}" alt="Last Minute Flights To Denpasar">
                            <h5 class="location">Denpasar</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£1022</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Denpasar">Enquire Now</a> </div>
                    </div>



                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/JNB.jpg')}}" alt="Last Minute Flights To Johannesburg">
                            <h5 class="location">Johannesburg</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£364</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Johannesburg">Enquire Now</a> </div>
                    </div>



                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/LUN.jpg')}}" alt="Last Minute Flights To Lusaka">
                            <h5 class="location">Lusaka</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£813</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Lusaka">Enquire Now</a> </div>
                    </div>

                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/LOS.jpg')}}" alt="Last Minute Flights To Lagos">
                            <h5 class="location">Lagos</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£373</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Lagos">Enquire Now</a> </div>
                    </div>



                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/FNA.jpg')}}" alt="Last Minute Flights To Freetown">
                            <h5 class="location">Freetown</h5>
                        </div>
                        <div class="body text-center">

                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£592</h3>
                                <p>21-Apr - 25-Jun</p>

                        </div>
                        <div class="bottom"> <a href="/Flights-To-Freetown">Enquire Now</a> </div>
                    </div>



                    <div class="col-grid">
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/NBO.jpg')}}" alt="Last Minute Flights To Nairobi">
                            <h5 class="location">Nairobi</h5>
                        </div>
                        <div class="body text-center">
                                <h5>Round Trip</h5>
                                <p>Starting From</p>
                                <h3>£557</h3>
                                <p>21-Apr - 25-Jun</p>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Nairobi">Enquire Now</a> </div>
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




                <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="assets/images/destinations/JNB.jpg" alt="Top Flight Destinations - Johannesburg Flights">
                    <div class="tour-brief">
                        <div class="pull-left">
                            <h4><i class="fa fa-map-marker"></i>JOHANNESBURG</h4>
                        </div>
                        <div class="pull-right">
                            <h4>£ 561/Person</h4>
                        </div>
                    </div>
                    <div class="tour-detail text-center">
                        <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                        <p style="text-align:center"><strong>Starting £ 561/Person</strong></p>
                        <p style="text-align:center"><a href="/Flights-To-Johannesburg">Enquire Now</a></p>
                    </div>
                </div>




                <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="assets/images/destinations/ACC.jpg" alt="Top Flight Destinations - Accra Flights">
                    <div class="tour-brief">
                        <div class="pull-left">
                            <h4><i class="fa fa-map-marker"></i>ACCRA</h4>
                        </div>
                        <div class="pull-right">
                            <h4>£ 413/Person</h4>
                        </div>
                    </div>
                    <div class="tour-detail text-center">
                        <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                        <p style="text-align:center"><strong>Starting £ 413/Person</strong></p>
                        <p style="text-align:center"><a href="/Flights-To-Accra">Enquire Now</a></p>
                    </div>
                </div>




                <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="assets/images/destinations/MNL.jpg" alt="Top Flight Destinations - Manila Flights">
                    <div class="tour-brief">
                        <div class="pull-left">
                            <h4><i class="fa fa-map-marker"></i>MANILA</h4>
                        </div>
                        <div class="pull-right">
                            <h4>£ 834/Person</h4>
                        </div>
                    </div>
                    <div class="tour-detail text-center">
                        <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                        <p style="text-align:center"><strong>Starting £ 834/Person</strong></p>
                        <p style="text-align:center"><a href="/Flights-To-Manila">Enquire Now</a></p>
                    </div>
                </div>




                <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="assets/images/destinations/BJL.jpg" alt="Top Flight Destinations - Banjul Flights">
                    <div class="tour-brief">
                        <div class="pull-left">
                            <h4><i class="fa fa-map-marker"></i>BANJUL</h4>
                        </div>
                        <div class="pull-right">
                            <h4>£ 575/Person</h4>
                        </div>
                    </div>
                    <div class="tour-detail text-center">
                        <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                        <p style="text-align:center"><strong>Starting £ 575/Person</strong></p>
                        <p style="text-align:center"><a href="/Flights-To-Banjul">Enquire Now</a></p>
                    </div>
                </div>




                <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="assets/images/destinations/DPS.jpg" alt="Top Flight Destinations - Denpasar Flights">
                    <div class="tour-brief">
                        <div class="pull-left">
                            <h4><i class="fa fa-map-marker"></i>DENPASAR</h4>
                        </div>
                        <div class="pull-right">
                            <h4>£ 1057/Person</h4>
                        </div>
                    </div>
                    <div class="tour-detail text-center">
                        <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                        <p style="text-align:center"><strong>Starting £ 1057/Person</strong></p>
                        <p style="text-align:center"><a href="/Flights-To-Denpasar">Enquire Now</a></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 tour-grid clear-padding"> <img src="assets/images/destinations/NBO.jpg" alt="Top Flight Destinations - Nairobi Flights">
                    <div class="tour-brief">asdsad
                        <div class="pull-left">
                            <h4><i class="fa fa-map-marker"></i>NAIROBI</h4>
                        </div>
                        <div class="pull-right">
                            <h4>£ 600/Person</h4>
                        </div>
                    </div>
                    <div class="tour-detail text-center">
                        <p style="text-align:center"><strong><i class="fa fa-plane"></i>Heathrow</strong></p>
                        <p style="text-align:center"><strong>Starting £ 600/Person</strong></p>
                        <p style="text-align:center"><a href="/Flights-To-Nairobi">Enquire Now</a></p>
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
                    <a href="{{route('home.index')}}">Zistravels LTD</a> in comparison to 800+ airlines, book for both regular and budget airlines, that fly to 9000+
                        destinations throughout the world. Are you planning a trip to Africa, want to see Bangkok,
                        or want to take a cultural tour of Europe? You've arrived to the right location. We'll assist
                        you in finding the best flight prices all across the world. Our website is accessible on any device,
                        whether at home, at work, or in the pub. Book your <b>cheap air tickets</b> as soon as possible, no matter where you are!</p>

                    <h4>How can you get cheap flight tickets?</h4>
                  <ul>

                        <li>There could be cheap plane tickets offers available at any time! It's a good idea to look
                            for flights on Tuesday and book flights on Wednesday. </li>
                        <li>It's best to purchase your tickets at least 4-5 months in advance. </li>
                        <li> Do you feel like stealing a deal? Check out some of our
                            <a href="{{route('home.cheap_flights')}}">last minute deals</a> for special
                            airline offers and active discount codes.</li>
                        <li> Last-minute bargains might also help you save money. However,
                            you'll need some luck because prices fluctuate depending on the season and availability. </li>
                        <li>Flying with multiple carriers or from different airports on
                            the way there and back may also assist keep the vacation budget low. During the search process,
                            use our filters to discover the ticket that best meets your needs.</li>
                  </ul>
                    <h4>Why are airline ticket prices so different?</h4>
                    <p>The price of a plane ticket is determined by a number of factors.
                        The airline determines the price of an airline ticket first. The pricing varies depending on the booking class.
                        Ticket prices are often lower if you book a flight months ahead of time. The prices of airline tickets for this flight will
                        go down or merely rise in the week before the flight departs, depending on the airline's purpose and market
                        demand. Changes in fuel prices, airport taxes, and maintenance costs are all factors that affect airline prices.</p>


                    <h4>What name should I write on the airline ticket?</h4>
                    <p>The name you must fill out on your cheap plane ticket must match the
                        name on your passport. That is to say, the first and last names on the passport.
                        You are not required to include your middle name. Pay close attention to the name you write
                        down when making your reservation, as changing it afterward can be costly! If your name is
                        incorrect on your e-ticket, please notify us as soon as possible to avoid incurring additional fees.</p>


                    <h4>How can I purchase to and from destination flights?</h4>
                    <p>Do you wish to book
                        <a href="{{route('home.cheap_flights')}}">cheap flight tickets</a>
                        to Singapore and return ticket at the same time? That's a great idea! You can create your own itinerary by booking round
                        trip flights in one transaction. In our search box, select the ‘round trip’ option instead of one way. You have the option
                        of flying back from a different airport than the one where you arrived.</p>
                </div>

{{--                <div class="section-title text-center color-text clrblack">--}}

{{--                    <h4 style="float:left;">Book cheap flights on Zistravels</h4>--}}
{{--                    <p style="color:#000; float:left; text-align:left;">--}}
{{--                        <a href="{{route('home.index')}}">Zistravels LTD</a>--}}
{{--                        in comparison to 800+ airlines, book for both regular and budget airlines, that fly to 9000+--}}
{{--                        destinations throughout the world. Are you planning a trip to Africa, want to see Bangkok,--}}
{{--                        or want to take a cultural tour of Europe? You've arrived to the right location. We'll assist--}}
{{--                        you in finding the best flight prices all across the world. Our website is accessible on any device,--}}
{{--                        whether at home, at work, or in the pub. Book your <b>cheap air tickets</b> as soon as possible, no matter where you are!</p>--}}

{{--                    <h4 style="float:left;">How can you get cheap flight tickets?</h4>--}}
{{--                    <p style="color:#000; float:left; text-align:left;">--}}
{{--                        <li>There could be cheap plane tickets offers available at any time! It's a good idea to look--}}
{{--                            for flights on Tuesday and book flights on Wednesday. </li>--}}
{{--                        <li>It's best to purchase your tickets at least 4-5 months in advance. </li>--}}
{{--                        <li> Do you feel like stealing a deal? Check out some of our--}}
{{--                            <a href="{{route('home.cheap_flights')}}">last minute deals</a> for special--}}
{{--                            airline offers and active discount codes.</li>--}}
{{--                        <li> Last-minute bargains might also help you save money. However,--}}
{{--                            you'll need some luck because prices fluctuate depending on the season and availability. </li>--}}
{{--                        <li>Flying with multiple carriers or from different airports on--}}
{{--                            the way there and back may also assist keep the vacation budget low. During the search process,--}}
{{--                            use our filters to discover the ticket that best meets your needs.</li>--}}
{{--                    </p>--}}

{{--                    <h4 style="float:left;">Why are airline ticket prices so different?</h4>--}}
{{--                    <p style="color:#000; float:left; text-align:left;">The price of a plane ticket is determined by a number of factors.--}}
{{--                        The airline determines the price of an airline ticket first. The pricing varies depending on the booking class.--}}
{{--                        Ticket prices are often lower if you book a flight months ahead of time. The prices of airline tickets for this flight will--}}
{{--                        go down or merely rise in the week before the flight departs, depending on the airline's purpose and market--}}
{{--                        demand. Changes in fuel prices, airport taxes, and maintenance costs are all factors that affect airline prices.</p>--}}


{{--                    <h4 style="float:left;">What name should I write on the airline ticket?</h4>--}}
{{--                    <p style="color:#000; float:left; text-align:left;">The name you must fill out on your cheap plane ticket must match the--}}
{{--                        name on your passport. That is to say, the first and last names on the passport.--}}
{{--                        You are not required to include your middle name. Pay close attention to the name you write--}}
{{--                        down when making your reservation, as changing it afterward can be costly! If your name is--}}
{{--                        incorrect on your e-ticket, please notify us as soon as possible to avoid incurring additional fees.</p>--}}


{{--                    <h4 style="float:left;">How can I purchase to and from destination flights?</h4>--}}
{{--                    <p style="color:#000; float:left; text-align:left;">Do you wish to book--}}
{{--                        <a href="{{route('home.cheap_flights')}}">cheap flight tickets</a>--}}
{{--                        to Singapore and return ticket at the same time? That's a great idea! You can create your own itinerary by booking round--}}
{{--                        trip flights in one transaction. In our search box, select the ‘round trip’ option instead of one way. You have the option--}}
{{--                        of flying back from a different airport than the one where you arrived.</p>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    </div>

@endsection

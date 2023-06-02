@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper-home">
    <section>
        <div class="row full-width-search">
            <div class="container clear-padding">
                <div class="row">
                    <div class="col-md-12 col-sm-12 search-section ">
                        <div role="tabpanel">
                            <!-- BEGIN: CATEGORY TAB -->
                            <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
                                <li role="presentation" class="active text-center">
                                    <a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
                                        <i class="fa fa-plane"></i>
                                        <span>FLIGHTS</span>
                                        <strong class="visible-xs">
                                            <small>FLIGHTS</small>
                                        </strong>
                                    </a>
                                </li>
                            </ul>
                            <!-- END: CATEGORY TAB -->
                            <!-- BEGIN: TAB PANELS -->
                            <div class="tab-content">
                                <!-- BEGIN: FLIGHT SEARCH -->
                                <div role="tabpanel" class="tab-pane active p-b-20" id="flight">
                                    <form autocomplete="off" name="frmsearch" id="frmsearch" method="post" action="#">
                                        <input type="hidden" name="page_id" value="flight_search">
                                        <input name="direct_flights" type="hidden" value="No">
                                        <input type="hidden" value="All Airlines" name="airline" id="airline" />
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12 no-padding">
                                                <div class="row">
                                                    <div class="col-md-12 product-search-title">Find Your Perfect Trip</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 search-col-padding">
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-7 col-xs-12 no-padding">
                                                                <div class="col-md-3 col-sm-3 col-xs-4 no-padding">
                                                                    <div class="flight_type">
                                                                        <div class="select-box">
                                                                            <div class="select-box__current" tabindex="1">
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="0" value="Return" name="flight_type" checked="checked" />
                                                                                    <p class="select-box__input-text"> Round Trip</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="1" value="Oneway" name="flight_type" />
                                                                                    <p class="select-box__input-text"> One Way</p>
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
                                                                <div class="col-md-4 col-sm-4 col-xs-5 no-padding">
                                                                    <div class="pax">
                                        <span class="text-white">
                                          <i class="fa fa-angle-down"></i>&nbsp;Passenger(s) </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-sm-5 col-xs-3 no-padding">
                                                                    <div class="cabin_class">
                                                                        <div class="select-box">
                                                                            <div class="select-box__current" tabindex="1">
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Economy" value="Economy" name="cabin_class" checked />
                                                                                    <p class="select-box__input-text"> Economy</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Premium_Economy" value="Premium Economy" name="cabin_class" />
                                                                                    <p class="select-box__input-text"> Premium Class</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Business_Class" value="Business Class" name="cabin_class" />
                                                                                    <p class="select-box__input-text"> Business Class</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="First_Class" value="First Class" name="cabin_class" />
                                                                                    <p class="select-box__input-text"> First Class</p>
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
                                                            </div>
                                                        </div>
                                                        <div class="passengers_details">
                                                            <div class="inn_pax">
                                                                <div class="close_pax">
                                                                    <i class="fa fa-times"></i>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <label class="text-dark">Adults <br />
                                                                            <font>
                                                                                <small>(12 or +)</small>
                                                                            </font>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <input id="adult_count" name="padults" value="1" class="form-control quantity-padding">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <label class="text-dark">Children <br />
                                                                            <font>
                                                                                <small>(2 to 11)</small>
                                                                            </font>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <input type="text" id="child_count" name="pchildren" value="0" class="form-control quantity-padding">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 search-col-padding">
                                                                        <label class="text-dark">Infants <br />
                                                                            <font>
                                                                                <small>(Below 2)</small>
                                                                            </font>
                                                                        </label>
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
                                            <div class="col-md-4  visible-lg visible-md">
                                                <div class="price-Guaranteed">
                                                    <img style="float:left; margin-right:10px;" src="assets/images/bestprice.png" alt="Best Price" width="50" height="43">
                                                    <p style="font-weight:bold;">Best Prices Guaranteed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                                                <label>Flying From</label>
                                                <div class="input-group">
                                                    <input value="London - LON" type="text" autocomplete="off" name="departure_airport" id="departure_airport" class="form-control" placeholder="Enter Departure City">
                                                    <span class="input-group-addon">
                                <i class="fa fa-map-marker fa-fw"></i>
                              </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 search-col-padding">
                                                <label>Flying To</label>
                                                <div class="input-group">
                                                    <input type="text" name="destination_airport" autocomplete="off" id="destination_airport" class="form-control" placeholder="Enter Destination City">
                                                    <span class="input-group-addon">
                                <i class="fa fa-map-marker fa-fw"></i>
                              </span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-9 col-xs-12 no-padding">
                                                <div class="col-md-6 col-xs-6 search-col-padding">
                                                    <label>Departure Date</label>
                                                    <div class="input-group">
                                                        <input name="departure_date" type="text" class="form-control" id="departure_date" placeholder="Enter Departure Date" readonly>
                                                        <span class="input-group-addon">
                                  <i class="fa fa-calendar fa-fw"></i>
                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-6 search-col-padding return-date-selection">
                                                    <label>Return Date</label>
                                                    <div class="input-group">
                                                        <input name="return_date" type="text" class="form-control" id="return_date" placeholder="Enter Returing Date" readonly>
                                                        <span class="input-group-addon">
                                  <i class="fa fa-calendar fa-fw"></i>
                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-6 search-col-padding">
                                                    <div class="col-md-12 search-col-padding text-center">
                                                        <div id="gl_recaptcha"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-3 col-xs-12  search-col-padding">
                                                <button type="button" id="searchButton" class="search-button btn transition-effect">
                                                    <i class="fa fa-search hidden-sm hidden-xs"></i>
                                                    <span class="visible-sm visible-xs">&nbsp;Search</span>
                                                </button>
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
                <div class="row">
                    <div class="col-md-12 offer-slider">
                        <div class="owl-carousel text-right" id="offer1">
                            <div class="item item-bg">
                                <h3>Hong Kong</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">613.6000</span>/Person </h4>
                                <a href="/Flights-To-Hong-Kong">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Manila</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">667.2000</span>/Person </h4>
                                <a href="/Flights-To-Manila">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Entebbe</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">461.6000</span>/Person </h4>
                                <a href="/Flights-To-Entebbe">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Singapore</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">503.2000</span>/Person </h4>
                                <a href="/Flights-To-Singapore">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Brisbane</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">1311.2000</span>/Person </h4>
                                <a href="/Flights-To-Brisbane">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Kathmandu</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">612.0000</span>/Person </h4>
                                <a href="/Flights-To-Kathmandu">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Kuala Lumpur</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">569.6000</span>/Person </h4>
                                <a href="/Flights-To-Kuala-Lumpur">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Cebu</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">828.8000</span>/Person </h4>
                                <a href="/Flights-To-Cebu">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Goa</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">420.8000</span>/Person </h4>
                                <a href="/Flights-To-Goa">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Sydney</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">1002.4000</span>/Person </h4>
                                <a href="/Flights-To-Sydney">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Dar es Salaam</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">373.6000</span>/Person </h4>
                                <a href="/Flights-To-Dar-es-Salaam">Book Now</a>
                            </div>
                            <div class="item item-bg">
                                <h3>Bangkok</h3>
                                <h4>Starting From £ <span style="color:#f79617; font-size:20px;">520.0000</span>/Person </h4>
                                <a href="/Flights-To-Bangkok">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="how-it-work">
        <div class="row work-row">
            <div class="container">
                <div style="margin-bottom:0;" class="section-title text-center">
                    <h1>Welcome To <strong>Zistravels Travels Ltd.</strong>
                    </h1>
                    <p> Thank you for your stay at our web portal which serves as one stop solution for all your itinerary needs. The team of <strong>Zistravels Travels Ltd</strong> cordially welcomes you and thank you in sparing out your precious moments on visiting our site. Our team comprises of travel connoisseurs who expertise in providing itinerary solutions at a very cheap rate in contrast to other providers. </p>
                </div>
            </div>
        </div>
    </section>
    <section id="home-top-destination hidden-sm hidden-xs">
        <div class="row image-background">
            <div class="td-overlay">
                <div class="container pd-10">
                    <div class="light-section-title text-center">
                        <h1>OUR TOP DESTINATION</h1>
                        <div class="space"></div>
                        <p style="text-align:center;"> At Zistravels Travels, we aim to facilitate our customers with incomparable rates and flexible payment plans. You may want to explore further, and can 'contact us' any time to learn more on the fares to your preferred top destination. </p>
                    </div>
                    <div class="col-md-12 on-top clear-padding">
                        <div class="col-md-4 col-sm-4 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/destinations/FNA.jpg" alt="Flights Deals To Freetown">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>Sierra Leone</h5>
                                    <h3>
                                        <span>FABULOUS FREETOWN</span>
                                    </h3>
                                    <p>Visiting Freetown this season then call us for the cheapest rates for your flights.</p>
                                    <a href="/Flights-To-Freetown">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/destinations/HRE.jpg" alt="Flights Deals To Harare">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>Zimbabwe</h5>
                                    <h3>
                                        <span>REMARKABLE HARARE</span>
                                    </h3>
                                    <p>Plan to visit Harare this season ? Grab the best deals on flights to Zimbabwe.</p>
                                    <a href="/Flights-To-Harare">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/destinations/MRU.jpg" alt="Flights Deals To Mauritius">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>Mauritius</h5>
                                    <h3>
                                        <span>MAJESTIC MAURITIUS</span>
                                    </h3>
                                    <p>Traveling to Mauritius was never so cheap! Grab the best flight rates to Mauritius with us.</p>
                                    <a href="/Flights-To-Port-Louis">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/destinations/NBO.jpg" alt="Flights Deals To Bangkok">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>Thailand</h5>
                                    <h3>
                                        <span>BUOYANT BANGKOK</span>
                                    </h3>
                                    <p>One of the beautiful cities of Asia; we're offering the lowest rates on Bangkok flights.</p>
                                    <a href="/Flights-To-Bangkok">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/destinations/LOS.jpg" alt="Flights Deals To Lagos">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>Nigeria</h5>
                                    <h3>
                                        <span>LIVELY LAGOS</span>
                                    </h3>
                                    <p>Visiting Lagos was never so affordable before. Book your cheap flights to Nigeria with us.</p>
                                    <a href="/Flights-To-Lagos">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/destinations/SIN.jpg" alt="Flights Deals To Singapore">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>Singapore</h5>
                                    <h3>
                                        <span>SENSATIONAL SINGAPORE</span>
                                    </h3>
                                    <p>Grab the best fare deals to Singapore - the Asian hub of modernism.</p>
                                    <a href="/Flights-To-Singapore">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recent-blog">
        <div class="row top-offer">
            <div class="container">
                <div class="section-title text-center">
                    <h1>HOT DEALS</h1>
                    <h4>SAVE MORE</h4>
                </div>
                <div class="owl-carousel" id="post-list">
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/LOS.jpg" alt="Hot Flight Deals To Lagos">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Lagos Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 551/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Lagos" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/ACC.jpg" alt="Hot Flight Deals To Accra">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Accra Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 538/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Accra" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/MNL.jpg" alt="Hot Flight Deals To Manila">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Manila Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 834/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Manila" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/BKK.jpg" alt="Hot Flight Deals To Bangkok">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Bangkok Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 641/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Bangkok" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/SIN.jpg" alt="Hot Flight Deals To Singapore">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Singapore Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 592/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Singapore" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/BJL.jpg" alt="Hot Flight Deals To Banjul">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Banjul Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 607/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Banjul" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/FNA.jpg" alt="Hot Flight Deals To Freetown">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Freetown Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 717/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Freetown" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/destinations/MRU.jpg" alt="Hot Flight Deals To Port Louis">
                        <div class="room-info">
                            <div class="post-title" style="text-align:center;">
                                <h5>Port Louis Flight Deal</h5>
                                <p style="text-align:center;">
                                    <i class="fa fa-plane  fa-rotate-90"></i> From Heathrow
                                </p>
                                <h2>
                                    <small>Starting From</small>
                                    <br>
                                    <strong>£ 552/ <small>Person</small>
                                        <br>
                                        <small>Return, Incl. Taxes</small>
                                    </strong>
                                </h2>
                            </div>
                            <div class="room-book">
                                <div class="col-xs-12 clear-padding">
                                    <a href="/Flights-To-Port-Louis" class="text-center">BOOK NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="why-choose-us" class="hidden-sm hidden-xs ">
        <div class="row choose-us-row">
            <div class="container clear-padding">
                <div class="light-section-title text-center">
                    <h1>WHY CHOOSE US?</h1>
                    <h4>REASONS TO TRUST US</h4>
                    <div class="space"></div>
                    <p style="text-align:center;">Our aim is to provide you with best services at unbeatable prices, this is why a wide range of passengers love to travel with us, <br>So just sit back, relax and let us make your travel arrangements because of these matchless reasons </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInLeft">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon">
                            <img class="pound-sign" src="assets/images/service-icon3.png" alt="Pound">
                        </div>
                        <h4>Best Price Guarantee</h4>
                        <p style="text-align:center;">We offer the best lowest price with full guarantee of marking no other comparison. <br /> Try Us. </p>
                        <a href="why-book.html">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInUp">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon">
                            <i class="fa fa-plane"></i>
                        </div>
                        <h4>Book Now & Pay Later</h4>
                        <p style="text-align:center;">Pay £ 50 as an initial payment and remaining balance later. Call us to further discuss the plan.</p>
                        <a href="why-book.html">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInDown">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h4>Excellent Services</h4>
                        <p style="text-align:center;">We are privileged enough to maintain a big clientele – having thousands of satisfied clients.</p>
                        <a href="why-book.html">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInRight">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <h4>Financial Protection</h4>
                        <p style="text-align:center;">Off course, Book with full confidence; we provide the most valued Financial Protection.</p>
                        <a href="why-book.html">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

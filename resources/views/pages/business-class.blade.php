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
                                        <input type="hidden" name="h_submit" value="1" />
                                        <input type="hidden" name="page_id" value="cheapflight">
                                        <input type="hidden" name="airline" value="All Airlines">
                                        <input type="hidden" value="Business Class Flight Search" id="requesttitle" name="requesttitle">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12 no-padding">
                                                <div class="row">
                                                    <div class="col-md-12 product-search-title black-text">Search for Business Class Flights</div>
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
                                                                                    <input class="select-box__input" type="radio" id="Economy" value="Economy" name="cabin_class"/>
                                                                                    <p class="select-box__input-text">Economy</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Premium_Economy" value="Premium Economy" name="cabin_class"/>
                                                                                    <p class="select-box__input-text">Premium Class</p>
                                                                                </div>
                                                                                <div class="select-box__value">
                                                                                    <input class="select-box__input" type="radio" id="Business_Class" value="Business Class" name="cabin_class" checked />
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
    <section id="landingone-why">
        <div class="row">
            <div class="container clear-padding">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInLeft">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon">
                            <!-- <img class="pound-sign" src="assets/images/service-icon3_yellow.png" alt="Pound"> -->
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
                    <h1>LAST MINUTE BUSINESS CLASS FLIGHT DEALS</h1>
                    <h4>SAVE MORE</h4>
                </div>
                <div class="owl-carousel" id="lastminute">


                    <div class="col-grid">
                        <div class="wrapper"> <img src="assets/images/topdestinations/LUN.jpg" alt="Last Minute Flights To Lusaka">
                            <h5 class="location">Lusaka</h5>
                        </div>
                        <div class="body text-center">
                            <center>
                                <h5>Round Trip</h5>

                                <p style=" text-align:center;">Starting From</p>
                                <h3>£2084</h3>
                                <p style=" text-align:center;" class="text-sm">21-Apr - 25-Jun</p>
                            </center>
                        </div>
                        <div class="bottom"> <a href="/Flights-To-Lusaka">BOOK NOW</a> </div>
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
                    <h4>CHECK OUT BUSINESS CLASS FLIGHTS TO TOP DESTINATIONS</h4>
                </div>



                <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                    <h4>A PHP Error was encountered</h4>

                    <p>Severity: Warning</p>
                    <p>Message:  Invalid argument supplied for foreach()</p>
                    <p>Filename: views/businessclass.php</p>
                    <p>Line Number: 354</p>


                    <p>Backtrace:</p>






                    <p style="margin-left:10px">
                        File: /home/www/reliancetravels.co.uk/application/views/businessclass.php<br />
                        Line: 354<br />
                        Function: _error_handler			</p>

                    <p style="margin-left:10px">
                        File: /home/www/reliancetravels.co.uk/application/controllers/Businessclass.php<br />
                        Line: 77<br />
                        Function: view			</p>






                    <p style="margin-left:10px">
                        File: /home/www/reliancetravels.co.uk/index.php<br />
                        Line: 315<br />
                        Function: require_once			</p>




                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
        <div class="row">
            <div class="container">
                <!-- START: INDIVIDUAL LISTING AREA -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col-lg-push-3 flight-listing">
                    <!-- START: LOWEST FARE SLIDER -->
                    <div class="lowest-fare-slider col-xs-12">
                        <img src="{{ asset('assets/images/images/hunting-better-ig.png') }}"
                            class="img-responsive just-call-banner" alt="Call Now & get Best deals">
                    </div>


                    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                    <!-- END: LOWEST FARE SLIDER -->
                    <div class="row">
                        <div class="col-md-12 clear-padding result-section ">
                            <div role="tabpanel">
                                <!-- BEGIN: CATEGORY TAB -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active text-center">
                                        <a href="#economy" aria-controls="economy" role="tab" data-toggle="tab">
                                            <span>Economy</span>
                                            <small class="visible-xs">
                                                <small>Economy</small>
                                            </small>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END: CATEGORY TAB -->
                                <div class="clearfix"></div>
                                <!-- BEGIN: TAB PANELS -->
                                <div class="tab-content">



                                    <!-- BEGIN: FLIGHT SEARCH -->
                                    <div role="tabpanel" class="tab-pane active fade in" id="economy">
                                     @if (count($flights) < 1)
                                     <div style="text-align:center; margin-top:15px; background-color:#F3F3F3; padding:23px; border:#FFD701 3px solid;">
                                        <div class="visible-lg visible-md visible-sm visible-xs" style="margin-left: 5px; margin-right: 5px;">
                                            <h4 class="text-center"> No data found for your search but don't worry <br><br>   contact us at 000000000000 we will arrange a flight for you.</h4>

                                        </div>
                                    </div>
                                        @else
                                        <div class="col-xs-12 section-title" style="margin:0; padding-left:0px;">
                                            <h2
                                                style="font-size:27px;font-weight:bold;letter-spacing:1px;text-transform: capitalize;">
                                                Cheap Flights To {{isset($flights[0]->flt_destination)}}</h2>
                                            <p style="text-transform:capitalize;"> Return, economy, departuring on
                                                <strong>{{ date('d F Y', strtotime(isset($dep_date))) }}</strong> and returning on
                                                <strong
                                                    class="{{ isset($ret_date) === null ? 'invisible' : ' - ' }}">{{ date('d F Y', strtotime(isset($ret_date))) }}</strong>
                                            </p>

                                            <div class="fetch" id="fetching-data">
                                                <img src="assets/images/loader.gif">
                                                <p>Please Wait Fetching Flights....</p>
                                            </div>
                                        </div>









                                        @foreach ($flights as $key => $value)
                                            @if (isset($ret_date) !== null)
                                                <div class="flight-list-view online-list newflights">
                                                    <div class="row" style="width: 100%;">
                                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 clear-padding">
                                                            <div class="row flightdetails">
                                                                <div class="col-xs-12 airline-list">
                                                                    <span class="airline-no">{{ ++$key }}</span>
                                                                    <strong>{{ isset($value->flt_airline) }}</strong> To Freetown
                                                                </div>
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clear-padding">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 flying clear-padding">
                                                                            <h2 class="">Outbound Flight <i
                                                                                    class="fa fa-long-arrow-right"></i>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding flight_leg ">
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-6 dest clear-padding">
                                                                                <h5 class="text-right">
                                                                                    {{ isset($value->flt_departure) }}<small
                                                                                        class="text-right">
                                                                                        <br>Heathrow </small>
                                                                                </h5>
                                                                                <h4 class="text-right">11:05 AM <small>
                                                                                        <br>Tue 06, Jun </small>
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-center">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding stopover">
                                                                                        <small>1 stop</small>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding f_connection">
                                                                                        <div class="icon"></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding airline">
                                                                                        <small
                                                                                            title="SN Brussels Airlines">SN
                                                                                            Bruss... <br>
                                                                                        </small>
                                                                                        <img src="{{ asset('assets/images/airlines-jpg/SN.jpg') }}"
                                                                                            alt="SN Brussels Airlines"
                                                                                            style="" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-6 dest clear-padding">
                                                                                <h5 class="text-left">
                                                                                    {{ isset($value->flt_destination) }} <small
                                                                                        class="text-left">
                                                                                        <br>Freetown </small>
                                                                                </h5>
                                                                                <h4 class="text-left">5:00 PM <small>
                                                                                        <br>{{ date('d F Y', strtotime($dep_date)) }}</small>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-xs-12 visible-xs text-center">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-xs-12 clear-padding airline">
                                                                                        <img src="{{ asset('assets/images/airlines-jpg/SN.jpg') }}"
                                                                                            alt="SN Brussels Airlines" />
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 clear-padding stopover">
                                                                                        <small>1 stop</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clear-padding">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 flying clear-padding">
                                                                            <h2 class="nb">Inbound Flight <i
                                                                                    class="fa fa-long-arrow-left"></i>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding flight_leg nb">
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-6 dest clear-padding">
                                                                                <h5 class="text-right">FNA <small
                                                                                        class="text-right">
                                                                                        <br>Freetown </small>
                                                                                </h5>
                                                                                <h4 class="text-right">6:15 PM <small>
                                                                                        <br>Wed 07, Jun </small>
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-center">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding stopover">
                                                                                        <small>2 stops</small>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding f_connection">
                                                                                        <div class="icon"></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding airline">
                                                                                        <small
                                                                                            title="SN Brussels Airlines">SN
                                                                                            Bruss... <br>
                                                                                        </small>
                                                                                        <img src="{{ asset('assets/images/airlines-jpg/SN.jpg') }}"
                                                                                            alt="SN Brussels Airlines" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-6 dest clear-padding">
                                                                                <h5 class="text-left">LHR <small
                                                                                        class="text-left">
                                                                                        <br>Heathrow </small>
                                                                                </h5>
                                                                                <h4 class="text-left">9:35 PM <small>
                                                                                        <br>Thu 08, Jun </small>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-xs-12 visible-xs text-center">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-xs-12 clear-padding airline">
                                                                                        <img src="{{ asset('assets/images/airlines-jpg/SN.jpg') }}"
                                                                                            alt="SN Brussels Airlines" />
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 clear-padding stopover">
                                                                                        <small>1 stop</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div
                                                                class="col-lg-3 col-md-3 hidden-sm hidden-xs clear-padding call_to_book_main">
                                                                <a href="tel:02079936068">
                                                                    <div class="call_to_book_inner">
                                                                        <div class="call_to_book">
                                                                            <p> Special rates not published online. <br>
                                                                                <strong>Call us now</strong>
                                                                                <br>
                                                                                <span class="icon-phone"></span>
                                                                                <span class="dialme">0207 993 6068</span>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        <a href="tel:02079936068">
                                                            <div class="col-sm-12 visible-sm clear-padding mobi_price">
                                                                Special
                                                                rates not published online. <strong>Call us now</strong>
                                                                <span class="fa fa-phone"></span>
                                                                <span class="dialme">0207 993 6068</span>
                                                            </div>
                                                            <div class="col-xs-12 visible-xs clear-padding mobi_price">
                                                                <strong>Click to call</strong>
                                                                <span class="icon-phone"></span>
                                                                <span class="dialme">0207 993 6068</span>
                                                                <br>
                                                                <small>
                                                                    <small>Special rates not published online.</small>
                                                                </small>
                                                            </div>
                                                        </a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="flight-list-view online-list newflights">
                                                    <div class="row" style="width: 100%;">
                                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 clear-padding">
                                                            <div class="row flightdetails">
                                                                <div class="col-xs-12 airline-list">
                                                                    <span class="airline-no">4</span>
                                                                    <strong>Ethiopian Airlines</strong>
                                                                    To Freetown
                                                                </div>
                                                                <div
                                                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 flying clear-padding">
                                                                            <h2 class="nb">Outbound Flight <i
                                                                                    class="fa fa-long-arrow-right"></i>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding flight_leg nb">
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-6 dest clear-padding">
                                                                                <h5 class="text-right">LHR <small
                                                                                        class="text-right"><br>Heathrow</small>
                                                                                </h5>
                                                                                <h4 class="text-right">9:00 PM
                                                                                    <small><br>Fri 30, Jun</small>
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-center">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding stopover">
                                                                                        <small>2 stops</small>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding f_connection">
                                                                                        <div class="icon"></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-padding airline">
                                                                                        <small
                                                                                            title="Ethiopian Airlines">Ethiopia...<br></small>
                                                                                        <img src="assets/images/airlines-jpg/ET.jpg"
                                                                                            alt="Ethiopian Airlines"
                                                                                            style="width:25% !important;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-6 dest clear-padding">
                                                                                <h5 class="text-left">FNA <small
                                                                                        class="text-left"><br>Freetown</small>
                                                                                </h5>
                                                                                <h4 class="text-left">4:05 PM
                                                                                    <small><br>Sat 01, Jul</small>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-xs-12 visible-xs text-center">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-xs-12 clear-padding airline">
                                                                                        <img src="assets/images/airlines-jpg/ET.jpg"
                                                                                            alt="Ethiopian Airlines">
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 clear-padding stopover">
                                                                                        <small>2 stops</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-3 col-sm-12 col-xs-12 clear-padding price_section">
                                                            <div class="price_details hidden-xs hidden-sm">
                                                                <div class="price">
                                                                    <h6>From</h6>
                                                                    <h1>£ 1176<span>PP</span></h1>
                                                                    <h6>
                                                                        Oneway, Inc. Taxes<br>
                                                                        1 Adult<br>
                                                                        <strong style="font-size:13px;">Total Price £
                                                                            1176</strong>
                                                                    </h6>
                                                                    <!-- <h6 class="phn-strok">
                                                                    <a href="tel:02079936068">0207 993 6068</a>
                                                                </h6> -->
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <a class="call_now" href="tel:02079936068">
                                                                        <div><i class="fa fa-phone"></i><span>0207 993
                                                                                6068</span></div>
                                                                    </a>
                                                                    <a class="book_now"
                                                                        href="javascript: bookingRequest(['Fri, Jun 30', '9:00 PM', 'Heathrow - LHR', 'Sat, Jul 01', '4:05 PM', 'Freetown - FNA', '20h 5m', '2 stops', 'Thu, Jan 01', '12:00 AM', 'Freetown - FNA', 'Sat, Jan 05', '4:05 PM', 'Heathrow - LHR', '0h 0m', 'non-stop', 'London - LON', 'Freetown - FNA', 'ET', 'Ethiopian Airlines', '1', '0', '0', '1176', '1176']);">
                                                                        <div><i class="fa fa-check"></i><span>Book
                                                                                Now</span></div>
                                                                    </a>
                                                                    <a class="whatsapp_now"
                                                                        href="https://api.whatsapp.com/send?phone=442079936224&amp;text=I'm%20interested%20in%20flights%20to%20Freetown%20from%20Heathrow%20Oneway%20Departure Date:%20Fri, Jun 30%20Return Date:%20Sat, Jan 05%20Adults:%201%20Price:%20£1176%20%20%20%20"
                                                                        target="_blank">
                                                                        <div><i
                                                                                class="fa fa-whatsapp"></i><span>Whatsapp</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="row visible-sm visible-xs">
                                                                <div class="col-xs-6 clear-padding">
                                                                    <h3 class="mob_price">£
                                                                        1176<small><small>1Person</small></small></h3>
                                                                </div>
                                                                <div class="col-xs-6 clear-padding">
                                                                    <div class="add-to-link">
                                                                        <a class="call_now" href="tel:02079936068">
                                                                            <div><i class="fa fa-phone"></i><span>Call
                                                                                    Now</span></div>
                                                                        </a>
                                                                        <a class="book_now"
                                                                            href="javascript: bookingRequest(['Fri, Jun 30', '9:00 PM', 'Heathrow - LHR', 'Sat, Jul 01', '4:05 PM', 'Freetown - FNA', '20h 5m', '2 stops', 'Thu, Jan 01', '12:00 AM', 'Freetown - FNA', 'Sat, Jan 05', '4:05 PM', 'Heathrow - LHR', '0h 0m', 'non-stop', 'London - LON', 'Freetown - FNA', 'ET', 'Ethiopian Airlines', '1', '0', '0', '1176', '1176']);">
                                                                            <div><i class="fa fa-check"></i><span>Book
                                                                                    Now</span></div>
                                                                        </a>
                                                                        <a class="whatsapp_now"
                                                                            href="https://api.whatsapp.com/send?phone=442079936224&amp;text=I'm%20interested%20in%20flights%20to%20Freetown%20from%20Heathrow%20OnewayOneway%20Departure Date:%20Fri, Jun 30%20Return Date:%20Sat, Jan 05%20Adults:%201%20Price:%20£1176%20%20%20%20"
                                                                            target="_blank">
                                                                            <div><i
                                                                                    class="fa fa-whatsapp"></i><span>Whatsapp</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                        @endif
                                        <div class="clearfix"></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="premium_economy"></div>
                                    <div role="tabpanel" class="tab-pane fade" id="business_class"></div>
                                    <div role="tabpanel" class="tab-pane fade" id="first_class"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: FLIGHT LIST VIEW -->
                </div>
                <!-- END: INDIVIDUAL LISTING AREA -->
                <!-- START: FILTER AREA -->
                <div class="col-lg-3 col-md-12 col-xs-12 col-lg-pull-9 clear-padding">
                    <div class="modify-search">
                        <h3
                            style="background: #015F9E;margin: 39px 0 0 0;text-align: center;padding: 10px 0;color: #ffffff;">
                            Refine Your Results </h3>
                        <form autocomplete="off" class="filter-area" name="frmsearch" id="frmsearch" method="post"
                            action="/loading">
                            <input type="hidden" name="page_id" value="flight_search">
                            <input type="hidden" name="airline" value="All Airlines" />
                            <div style="text-align:center;" class="search-col-padding">
                                <label class="radio-inline return-section">
                                    <input type="radio" name="flight_type" id="flight_type" value="Return"
                                        checked="checked"> Round Trip </label>
                                <label class="radio-inline oneway-section">
                                    <input type="radio" name="flight_type" id="flight_type" value="Oneway"> One Way
                                </label>
                            </div>
                            <div class="form-gp">
                                <label>Flying From</label>
                                <div class="input-group margin-bottom-sm">
                                    <input value="London - LON" type="text" name="departure_airport"
                                        id="departure_airport" class="form-control" placeholder="Enter Departure City">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker fa-fw"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-gp">
                                <label>Flying To</label>
                                <div class="input-group margin-bottom-sm">
                                    <input value="Freetown - FNA" type="text" name="destination_airport"
                                        id="destination_airport" class="form-control"
                                        placeholder="Enter Destination City">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker fa-fw"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-gp">
                                <label>Departure Date</label>
                                <div class="input-group margin-bottom-sm">
                                    <input name="departure_date" type="text" class="form-control" id="departure_date"
                                        placeholder="Enter Departure Date" value="06-Jun-2023" readonly>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar fa-fw"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-gp return-date-selection">
                                <label>Return Date</label>
                                <div class="input-group margin-bottom-sm">
                                    <input name="return_date" type="text" class="form-control" id="return_date"
                                        placeholder="Enter Returning Date" value="07-Jun-2023" readonly requird>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar fa-fw"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-gp">
                                <label>Preferred Airline</label>
                                <select id="airline" name="airline" class="form-control cmbairline" />
                                <option selected>All Airlines</option>
                                <option value="SN Brussels Airlines - SN"> SN Brussels Airlines - SN </option>
                                <option value="Royal Air Maroc - AT"> Royal Air Maroc - AT </option>
                                <option value="Turkish Airlines - TK"> Turkish Airlines - TK </option>
                                <option value="Ethiopian Airlines - ET"> Ethiopian Airlines - ET </option>
                                </select>
                            </div>
                            <div class="form-gp">
                                <div style="float:left; width:80px;">
                                    <label for="adults">Adults</label>
                                    <select style="width:100%; color:#000000;" name="padults" id="adults">
                                        <option value="1" selected="selected">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <span
                                        style="font-size:9px; font-weight:normal;width:105%;float:left;margin-top:2px;">12
                                        or +</span>
                                </div>
                                <div style="float:left; width:80px; margin-left:5px;">
                                    <label for="children">Children</label>
                                    <select style="width:100%; color:#000000;" name="pchildren" id="children">
                                        <option value="0" selected="selected">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <span style="float:left;font-size:9px;font-weight:normal;margin-top:2px;">2-11</span>
                                </div>
                                <div style="float:left; width:80px; margin-left:10px;margin-bottom:5px;">
                                    <label for="infants">Infants</label>
                                    <select style="width:100%; color:#000000;" name="pinfants" id="infants">
                                        <option value="0" selected="selected">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <span style="float:left;font-size:9px; font-weight:normal;margin-top:2px;">Below
                                        2</span>
                                </div>
                                <br />
                                <br />
                                <br />
                            </div>
                            <div class="form-gp">
                                <label>Class</label>
                                <select class="selectpicker" id="cabin_class" name="cabin_class">
                                    <option value="Economy" selected="selected"> Economy </option>
                                    <option value="Premium Economy"> Premium Economy </option>
                                    <option value="Business Class"> Business Class </option>
                                    <option value="First Class"> First Class </option>
                                </select>
                            </div>
                            <div class="form-gp">
                                <button type="button" id="searchButton"
                                    class="modify-search-button btn transition-effect">Modify Search</button>
                            </div>
                        </form>
                    </div>
                    <div
                        style="text-align:center; margin-top:15px; background-color:#F3F3F3; padding:0; border:#FFD701 3px solid;">
                        <img style="width:100%;" src="assets/images/paying-img.png" class="paying-later" />
                    </div>
                    <div
                        style="text-align:center; margin-top:15px; background-color:#F3F3F3; padding:23px; border:#FFD701 3px solid;">
                        <div class="visible-lg visible-md visible-sm visible-xs"
                            style="margin-left: 5px; margin-right: 5px;">
                            <h4 style="color:#015F9E !important; margin-bottom:20px;"> Freetown Flights From Other UK
                                Airports </h4>
                            <p style="margin-bottom:0px;">
                                <a style="color:#333;font-size: 13px;"
                                    href="javascript: bookingReq(['06-Jun-2023', '07-Jun-2023','Manchester','MAN','Freetown','FNA','','','Return','Economy' ,'21-04-2023 - 25-06-2023','592']);">Flights
                                    From Manchester <strong class="pull-right" style="color:#015696;">fr £ 592</strong>
                                </a>
                            </p>
                            <div class="dotted_border"></div>
                            <p style="margin-bottom:0px;">
                                <a style="color:#333;font-size: 13px;"
                                    href="javascript: bookingReq(['06-Jun-2023', '07-Jun-2023','Heathrow','LHR','Freetown','FNA','','','Return','Economy' ,'21-04-2023 - 25-06-2023','717']);">Flights
                                    From Heathrow <strong class="pull-right" style="color:#015696;">fr £ 717</strong>
                                </a>
                            </p>
                            <div class="dotted_border"></div>
                            <p style="margin-bottom:0px;">
                                <a style="color:#333;font-size: 13px;" href="#">Flights
                                    From Gatwick <strong class="pull-right" style="color:#015696;">fr £ 849</strong>
                                </a>
                            </p>
                            <div class="dotted_border"></div>
                        </div>
                    </div>
                    <div
                        style="text-align:center; color:#fff; margin-top:15px;margin-bottom:15px; line-height:30px; background-color:#07253f; padding:23px; border:#07253f 3px solid;">
                        <h3>Why book with us?</h3>
                        <ul class="text-left" style="list-style-type:none">
                            <li>
                                <i class="fa fa-check"></i> Best Prices - Save Money
                            </li>
                            <li>
                                <i class="fa fa-check"></i> No Hidden Fees
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Financial Protection
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Flexible Payment Options - Book Now Pay Later
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Secure Payments & Complete Privacy
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Dedicated Customer Support - Friendly Staff
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Proven Record Of Over Thousands of Satisfied Customers
                            </li>
                            <li class="last">
                                <i class="fa fa-check"></i> Soft Cancellation Policies and Much More
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    @endsection

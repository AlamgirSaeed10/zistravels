@extends('includes.master')
@section('content')
    <div class="site-wrapper">
        <div class="row page-title enqury-page-bnr">
            <div class="container clear-padding text-center flight-title text-white">
                <h3>Your Selection</h3>
                <h4 class="text-white">
                    <i class="fa fa-plane"></i>
                    {{ $flight_from }}
                    <i class="fa fa-long-arrow-right"></i>
                    <i class="fa fa-plane fa-rotate-90"></i>
                    {{ $flight_to }}
                </h4>
                <span><i class="fa fa-calendar"></i> {{date('d F Y',strtotime($departure))}} <i class="fa fa-long-arrow-right"></i> <span><i
                            class="fa fa-calendar"></i> {{date('d F Y',strtotime($return))}}<br>
                        <i class="fa fa-male"></i>Traveller(s) - {{ $padult }} Adults, {{ $pchild }} Children
                        &amp; {{ $pinfant }} Infants </span>
                </span>
            </div>

        </div>
        <div style="padding-top:20px;" class="row booking-detail">

            <div class="container clear-padding">

                <div class="tab-content">

                    <div class="col-md-9 col-sm-9 booking-sidebar">

                        <div style="margin:0 0 15px 0;" class="flight-list-view online-list online-enquiry">

                            <div style="border:none;" class="passenger-detail">

                                <h3 style="padding:5px 20px;">Selected Deal <i class="fa fa-long-arrow-right"></i></h3>

                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-12 text-center clear-padding flight-desc">



                                <div class="take-off">



                                    <div class="row clear-padding">



                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 clear-padding">

                                            <div class="take-off">

                                                <h4 class="dest">{{ $flight_from }}</h4>

                                                <h4 class="time"><i class="fa fa-plane"></i> 9:00 PM</h4>

                                                <p class="date">{{date('d F Y',strtotime($departure))}}</p>

                                            </div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 clear-padding">

                                            <div class="take-off">

                                                <h4 class="dest">{{ $flight_to }}</h4>

                                                <h4 class="time"><i class="fa fa-plane fa-flip-vertical"></i> 4:05 PM</h4>

                                                <p class="date">Sat, Jun 10</p>

                                            </div>

                                        </div>





                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <div class="flight-stops-duration return">


                                                <h3><i class="fa fa-clock-o"></i> Stops</h3>

                                                <!-- <h4>20h 5m</h4> -->

                                                <h4>2 stops</h4>



                                            </div>

                                        </div>



                                    </div>



                                    <div class="row clear-padding">



                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 clear-padding">

                                            <div class="take-off">

                                                <h4 class="dest">{{ $flight_to }}</h4>

                                                <h4 class="time"><i class="fa fa-plane"></i> 8:45 AM</h4>

                                                <p class="date">{{date('d F Y',strtotime($return))}}</p>

                                            </div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 clear-padding">

                                            <div class="take-off">

                                                <h4 class="dest">{{ $flight_from }}</h4>

                                                <h4 class="time"><i class="fa fa-plane fa-flip-vertical"></i> 5:00 PM</h4>

                                                <p class="date">Sat, Jun 10</p>

                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <div class="flight-stops-duration return">
                                                <h3><i class="fa fa-clock-o"></i> Stops</h3>
                                                <h4>2 stops</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center clear-padding flight-desc"
                                style="padding-top:10px;">

                                <div style=" padding:0;" class="take-off">
                                    <ul>
                                        <li><strong>Selected Airline</strong></li>
                                        <li class="airline-name"><span style="font-size:16px;">{{ $airline_name }}</span>
                                        </li>
                                    </ul>
                                    <div class="airline-logo-img"><img
                                            src="{{ asset('assets/images/airlines') }}/{{ $airline_image }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-3 booking-sidebar booking-online">
                        <div class="sidebar-item">
                            <h4>Total</h4>
                            <div class="sidebar-body">
                                <div class="row">
                                    <div class="col-xs-10 clear-padding text-left">
                                        <p>Per Passenger Price (Adult):</p>
                                    </div>
                                    <div class="col-xs-2 clear-padding text-center">
                                        <p>£ {{ $price_adult }}</p>
                                    </div>
                                </div>
                                <p class="passengers text-center">
                                    ({{ $padult }} Adults, {{ $pchild }} Children & {{ $pinfant }}
                                    Infants)
                                </p>
                                <h2 style="font-weight:bold;" class="text-center">£
                                    {{ $pinfant * $price_infant + $padult * $price_adult + $pchild * $price_child }}
                                </h2>
                                <h6 class="text-center">Return, Including Taxes.<br>
                                    Subject to Availability</h6>
                            </div>

                        </div>

                    </div>

                    <div class="col-xs-12" style="margin-bottom:15px;">
                        <a href="tel:00442079936068">
                            <img class="img-responsive" src="assets/images/call-us.png" alt="">
                        </a>
                    </div>

                    <div class="col-xs-12">

                        <div class="passenger-detail">

                            <h3>Send Us Flight Inquiry</h3>

                            <div class="passenger-detail-body">

                                <form action="{{route('home.submit_enquery')}}" method="post" autocomplete="off">
                                    @csrf
                                    <input type="hidden" name="flight_city"     value="{{$flight_city }}">
                                    <input type="hidden" name="flight_type"     value="{{$flight_type }}">
                                    <input type="hidden" name="cabin_class"     value="{{$cabin_class }}">
                                    <input type="hidden" name="departure"       value="{{$departure }}">
                                    <input type="hidden" name="return"          value="{{$return }}">
                                    <input type="hidden" name="airline_name"    value="{{$airline_name }}">
                                    <input type="hidden" name="city"            value="{{$city }}">
                                    <input type="hidden" name="padult"          value="{{$padult }}">
                                    <input type="hidden" name="price_adult"     value="{{$price_adult }}">
                                    <input type="hidden" name="pchild"          value="{{$pchild }}">
                                    <input type="hidden" name="price_child"     value="{{$price_child }}">
                                    <input type="hidden" name="pinfant"         value="{{$pinfant }}">
                                    <input type="hidden" name="price_infant"    value="{{$price_infant }}">
                                    <input type="hidden" name="ToAirportCode"   value="{{$ToAirportCode }}">
                                    <input type="hidden" name="FromAirportCode" value="{{$FromAirportCode }}">
                                    <input type="hidden" name="flight_to"       value="{{$flight_to }}">
                                    <input type="hidden" name="flight_from"     value="{{$flight_from }}">

                                    <div class="col-md-4 ol-sm-6">
                                        <label>Full Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" name="cname" required class="form-control"
                                                placeholder="Enter your name..." />
                                        </div>
                                    </div>
                                    <div class="col-md-4 ol-sm-6">
                                        <label>Phone</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" name="cphone" required class="form-control"
                                                placeholder="Enter your phone..." />
                                        </div>
                                    </div>
                                    <div class="col-md-4 ol-sm-6">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i></span><input type="email" name="cemail"
                                                required class="form-control" placeholder="Enter your email...">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Departure</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            <input value="{{$departure}}" type="text" id="departure_date" required
                                                name="departure_date" class="form-control" placeholder="DD/MM/YYYY">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 search-col-padding return-date-selection">
                                        <label>Return</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            <input value="{{$return}}" type="text" id="return_date" required
                                                class="form-control" name="return_date" placeholder="DD/MM/YYYY">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Adult(s)</label>
                                        <br>
                                        <input type="number" min="1" id="adult_count" name="padults" value="{{$padult}}"
                                            class="form-control quantity-padding">
                                    </div>
                                    <div class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Child(ren)</label>
                                        <br>
                                        <input type="number" min="0" id="child_count" name="pchildren" value="{{$pchild === null ? '0':$pchild}}"
                                            class="form-control quantity-padding">
                                    </div>
                                    <div class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Infant(s)</label>
                                        <br>
                                        <input type="number" min="0" id="infant_count" name="pinfants" value="{{$pinfant === null ? '0':$pinfant}}"
                                            class="form-control quantity-padding">
                                    </div>
                                    <div class="col-xs-12">
                                        <label>Special Instructions</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i></span>
                                            <textarea name="inst" id="inst" rows="5" cols="5" class="form-control"
                                                placeholder="Write what you wants to know...!"></textarea>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button  type="submit">SUBMIT <i
                                                class="fa fa-chevron-right"></i></button>



                                        <p style="font-size:12px; text-align:center;"><strong>Please Note:</strong> Fares
                                            and seats are not guaranteed and subject to availability. If the requested fare
                                            will not be available then we will offer you the best available alternate.</p>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <link rel="stylesheet" type="text/css"
            href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script>
            window.addEventListener("load", function() {
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#000"
                        },
                        "button": {
                            "background": "#f1d600"
                        },
                        "cookie": {
                            expiryDays: 2
                        }
                    }
                })
            });
        </script>
    </div>
    </div>
@endsection

@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
        <section>
            <div class="row full-width-search single-search" style="background-image: url(assets/images/business-class.png);height:350px;">
            </div>
        </section>

    <section id="landingone-why">
        <div class="row">
            <div class="container clear-padding">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow slideInLeft">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon">
                            <i class="fa fa-gbp fa-circle text-white"></i>
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
                        <div class="wrapper"> <img src="{{asset('assets/images/destinations/LUN.jpg')}}" alt="Last Minute Flights To Lusaka">
                            <h5 class="location">Lusaka</h5>
                        </div>
                        <div class="body text-center">

                                <h5>Round Trip</h5>

                                <p>Starting From</p>
                                <h3>£2084</h3>
                                <p>21-Apr - 25-Jun</p>

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



                <div style="height:200px;border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

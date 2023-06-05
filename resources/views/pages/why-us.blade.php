@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
    <section>
        <!-- START: ABOUT-US -->
        <div style="padding-bottom:0;" class="row about-intro">
            <div class="container clear-padding">
                <div class="col-md-6 col-sm-6 no-margin-text color-text">

                    <h2>Why Book with Us?</h2>
                    <p>Our aim is to provide you with best services at unbeatable prices, this is why a wide range of passengers love to travel with us,
                        And we are more than happy to claim that we retain our clients because they rely on 'us only'.
                        So just sit back, relax and let us make your travel arrangements because of these matchless reasons; </p>
                    <ul class="check-list">
                        <li class="col-xs-12"><strong>Best Prices-Save Money</strong></li>

                    </ul>
                    <p>We offer guaranteed best prices which marks no other comparison.</p>
                    <ul class="check-list">
                        <li class="col-xs-12"><strong>No Hidden Fees</strong></li>

                    </ul>
                    <p>We do not charge any booking fee or service charges. Prices quoted are inclusive of all taxes and ATOL charges etc.</p>

                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="no-padding" src="{{asset('assets/images/images/6.jpg')}}" alt="">
                </div>
                <div class="col-xs-12 no-margin-text">


                    <ul class="check-list">
                        <li class="col-xs-12"><strong>Book Now Pay Later</strong></li>

                    </ul>
                    <p>Secure your seat by just paying 50 GBP as an initial payment to avoid the increase in price and remaining balance in 3 days.</p>
                    <ul class="check-list">
                        <li class="col-xs-12"><strong>Thousand of Satisfied Customers</strong></li>
                    </ul>
                    <p>We are honored to have a Proven and Established Track Record. Serving since many years and not
                        only have thousands of clients but retaining and growing. Proudly speaking we have 20 %
                        level of repeat customers. For details see our Testimonial Page.</p>
                    <ul class="check-list">
                        <li class="col-xs-12"><strong>Secure Transactions & Complete Privacy</strong></li>
                    </ul>
                    <p>Your Credit/Debit card information is always safe when you book with us. We Also understand and respect the importance of your privacy. Your personal
                        information is private and confidential and not released to third parties. View our <a href="{{route('home.privacy_policy')}}">Privacy Policy</a>.</p>
                    <ul class="check-list">
                        <li class="col-xs-12"><strong>Dedicated Customer Support</strong></li>
                    </ul>
                    <p>We have a professional and friendly staff that is highly motivated & skilled to help you with all the
                        questions you might have. We are available 24 hours a day, 7 days a week. Click here to <a href="{{route('home.contact_us')}}">Contact us</a>.</p>
                    <ul class="check-list">
                        <li class="col-xs-12"><strong>Other Silent Features</strong></li>

                    </ul>
                    <p>We are happy to provide many other services to our clients like Arrangement of Extra baggage of at
                        very low prices, Seat allocation for most of the airlines etc. Also remember that we have very Soft
                        Cancellation Policies which is also one of our main silent features.</p>
                </div>
            </div>
        </div>
        <!-- END: ABOUT-US -->

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

@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
        <section>
            <div class="row full-width-search single-search" style="background-image: url(assets/images/faqs.png);height:350px;">
            </div>
        </section>
    <section>
        <!-- START: FAQS -->
        <div style="padding-bottom:0;" class="row about-intro">
            <div class="container clear-padding">
                <div class="col-md-7 col-sm-6 no-margin-text color-text">
                    <h2>FAQs</h2>
                    <p><strong><a href="#faq1">1. Why Should I book through Reliance Travels ?</a></strong></p>
                    <p><strong><a href="#faq2">2. How Can I book most efficiently ?</a></strong></p>
                    <p><strong><a href="#faq3">3. How are these tickets different than buying a ticket from the airline directly?</a></strong></p>
                    <p><strong><a href="#faq4">4. How can I pay for my ticket?</a></strong></p>
                    <p><strong><a href="#faq5">5. Can I use someone else's credit card to pay for a ticket?</a></strong></p>
                    <p><strong><a href="#faq6">6. How and when will I receive my ticket? (Delivery Policy)</a></strong></p>
                    <p><strong><a href="#faq7">7. What if I need to cancel or change my ticket? (Cancellation / Refund Policy)</a></strong></p>
                    <p><strong><a href="#faq8">8. What Reservation problems should I expect ?</a></strong></p>
                    <p><strong><a href="#faq9">9. How do I contact you?</a></strong></p>
                </div>
                <div class="col-md-5 col-sm-6">
                    <br><br>
                    <img class="no-padding"src="{{asset('assets/images/images/faq.jpg')}}" alt="">
                </div>
                <div class="col-xs-12">
                    <h4 id="faq1">1. Why Should I book through Reliance Travels ?</h4>
                    <p>One benefit of making your air reservations with us is that we are able to understand your needs whilst arranging your travel itinerary. Our travel consultants will be able to suggest the best airlines with the most flexible conditions for your travel. We also monitor the travel itinerary and are able to advise of any changes that the airline may make. Finally, we know which airlines are the most reliable, have good on-time records and are more passenger orientated.</p>
                    <h4 id="faq2">2. How Can I book most efficiently ?</h4>
                    <p>The best way to book with us is to call our travel experts on <b><a href="tel:08006889100">0800 688 9100</a></b> or use the call back feature (send un inquiry) or even you can chat us online.</p>
                    <h4 id="faq3">3. How are these tickets different than buying a ticket from the airline directly?</h4>
                    <p>These tickets are for the most part very similar to tickets you would buy directly from the airlines. An advantage is that you can request special meals, get advanced seat assignments and almost always accrue frequent flyer mileage.</p>
                    <h4 id="faq4">4. How can I pay for my ticket?</h4>
                    <p>The easiest way to make the payment is to transfer the money online in our company bank account. If you don’t have the online banking then you can pay the cash in the branch. You can also visit our office to make the payment and collect your tickets. You can also pay through the Credit Card / Debit Card.</p>
                    <h4 id="faq5">5. Can I use someone else's credit card to pay for a ticket? </h4>
                    <p>We only accept the Debit / Credit card of the leading passenger. If the Card holder is not the passenger, means he is not travelling then we do not accept the card payment online or over the phone. In that case, the Card holder must come to our office with the chip and pin card and we will physically charge / process the card on our machine.</p>
                    <h4 id="faq6">6. How and when will I receive my ticket? (Delivery Policy)</h4>
                    <p>It's quite simple. As soon as you send us the full payment and singed invoice (booking terms and conditions), <strong>we will instantly send the Electronic Tickets on your given email address.</strong> All you need to take the printout and use these tickets. As this is the modern era of E-Tickets unlikely to the Paper Tickets (which were used in past) so we do not need to send you anything by post.</p>
                    <p>If you still need to get delivered your E-Ticket at your mailing address then we can arrange to post it through the regular mail service.</p>
                    <h4 id="faq7">7. What if I need to cancel or change my ticket? (Cancellation / Refund Policy)</h4>
                    <p>Different Airline has different cancellation and refund policies depending on the type of ticket, season and price etc. So, <strong>in certain cases tickets are refundable / changeable and in some cases tickets are non-refundable / non-changeable. It's always mentioned on your booking terms and conditions when you are making the purchase of that.</strong> Its means we always intimate you about the Cancellation / Refund policy before you make a purchase.</p>
                    <p>If Tickets are refundable and there is cancellation fee involved then you will get your net refund amount within 4 to 5 weeks from the date of refund made by you. If Airline permits the changes in tickets and there is change fee involved then you can get your new ticket by paying the change fee and / or difference of fare (if any).</p>
                    <h4 id="faq8">8. What Reservation problems should I expect ?</h4>
                    <p>If you are planning on traveling during any holiday period, it is advisable to plan well in advance. Generally 3-6 months ahead is advisable. Also you would be able to get the best deals within this period. Closer to departure in holiday period, airlines often "close out" availability on cheaper fares. However, if you are looking for a late getaway, we would still be delighted to assist in your travel plans.</p>
                    <h4 id="faq9">9. How do I contact you?</h4>
                    <p>You can check the contact us button at the top of the page. This will have all the information you will need to get in touch with us. We are open Monday-Friday 10am to 5pm..</p>
                </div>
            </div>
        </div>

        <!-- END: FAQS -->
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

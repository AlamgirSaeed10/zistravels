<section id="footer">
    <footer>
        <div class="main-footer row">
            <div class="container clear-padding">
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 no-padding about-box" style="line-height:30px;">
                    <h3>Zistravels Ltd.</h3>
                    <p> Just concentrate on our name and it describes all. Providing the variety of travel
                        products with matchless Services at economical rates to all parts of the world by making
                        reservation
                        procedure simpler, easier and faster. Achieving customer satisfaction is our ultimate goal. </p>
                    <a href="{{route('home.about_us')}}">READ MORE</a>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-6 col-xs-12 links">
                    <h4 style="color: #f79617 !important;">NEWSLETTER</h4>
                    <p style="color:#ffffff;">Exclusive flight deals in your inbox.</p>
                    <div class="row main-footer-sub">
                        <form action="{{ route('footer.newsletter') }}" method="POST" autocomplete="off">
                            @csrf
                            <input class="form-control" type="email" placeholder="Enter Your Email" required
                                name="nemail" id="nemail">
                            <p>* We do not send spam.</p>
                            <button class="subs_button" type="submit"> <i class="fa fa-paper-plane"></i>SUBSCRIBE
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-md-3 col-sm-6 col-xs-12 contact-box">
                    <h4 style="margin-bottom: 25px;color: #f79617 !important;">Contact Us</h4>
                    <p>
                        <i class="fa fa-phone"></i>
                        <a style="color:#FFF;" href="tel:08003683970">
                            <span style="font-size: 16px;">0800 368 3970</span>
                        </a>
                    </p>
                    <p>
                        <i class="fa fa-whatsapp"></i>
                        <a style="color:#FFF;" target="_blank"
                            href="https://api.whatsapp.com/send?phone=442086388185&amp;text=I'm%20interested%20in%20flights%20deals">
                            <span style="font-size: 16px;">+44 208 638 8185</span>
                        </a>
                    </p>
                    <p>
                        <i class="fa fa-envelope-o"></i>
                        <a style="color:#FFF;" href="mailto:info@zistravels.co.uk">
                            <span style="font-size: 16px;">info@zistravels.co.uk</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="main-footer-nav row">
            <div class="container clear-padding">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 we-accept">
                    <ul>
                        <li>
                            <img width="51" src="{{ asset('assets/images/payment/visa.png') }}" alt="visa">
                        </li>
                        <li>
                            <img width="51" src="{{ asset('assets/images/payment/master.png') }}" alt="master">
                        </li>
                        <li>
                            <img width="51" src="{{ asset('assets/images/payment/delta.png') }}" alt="delta">
                        </li>
                        <li>
                            <img width="51" src="{{ asset('assets/images/payment/mastro.png') }}" alt="mastro">
                        </li>
                        <li>
                            <img width="51" src="{{ asset('assets/images/payment/visaelectron.png') }}"
                                alt="visaelectron">
                        </li>
                    </ul>
                </div>
                <div class="col-lg- 3 col-md-3 col-sm-3 col-xs-12 hidden-xs hidden-sm">

                    <img style="border-radius: 10px;" src="{{ asset('assets/images/payment/baclays-power.png') }}"
                        height="54px" width="184px" alt="Barclay's Power Logo" class="barclay text-center" />

                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="social-media pull-right p-t-8">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/zistravelsuk/" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/zistravels.uk/" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Zistravels_uk" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://zistravels.quora.com/" target="_blank">
                                    <i class="fa fa-quora" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.co.uk/zistravels3/" target="_blank">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/93384920/admin/" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row main-footer-sub">
            <div class="container clear-padding">
                <ul class="footer-menu-list">
                    <li>
                        <a href="{{ route('home.travel_tips') }}">Travel tips</a>
                    </li>
                    <li>
                        <a href="{{ route('home.customer_reviews') }}">Customer Reviews</a>
                    </li>
                    <li>
                        <a href="{{ route('home.privacy_policy') }}">Privacy policy</a>
                    </li>
                    <li>
                        <a href="{{ route('home.blogs') }}">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="background: #041321;" class="col-xs-12">
            <p style="margin: 5px 0;color: #ffffff; font-size:12px;" class="text-center">&copy; 2023 zistravels.co.uk
            </p>
        </div>
    </footer>
</section>

<!--Footer End-->
<!--Whatsapp-->
<a href="https://api.whatsapp.com/send?phone=442086388185&amp;text=I'm interested in flights deals"
    style="position: fixed;left: 15px;bottom: 20px;z-index: 999;" target="_blank" title="Send Whatsapp Message">
    <img src="{{asset('assets/images/whatsapp.png')}}" style="max-width:60px" alt="whatsapp">
</a>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/63618d61daff0e1306d531f0/1ggqh0hj7';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);

        // Add custom image
        // var customImage = document.createElement("img");
        // customImage.src = "https://embed.tawk.to/_s/v4/assets/images/attention-grabbers/163-r-br.svg";
        // customImage.style.position = "fixed";
        // customImage.style.bottom = "100px";
        // customImage.style.right = "20px";
        // customImage.style.width = "160px"; // Adjust the size of the image as needed
        // document.body.appendChild(customImage);
    })();
</script>

<!--End of Tawk.to Script-->
<!--Window Call POPUP-->
<div class="bg-overlay" style="display: none">
    <div class="popup-window">
        <div class="mbox">
            <i class="btnlook fa fa-times"></i>
            <h2>Looking for better Deals? YES, we have more for you!</h2>
            <p class="w90">That's correct. Talk to our friendly agents to check the additional unadvertised fares.
                We will be happy to quote you the multiple travelling options with our price guaranteed commitment !</p>
            <p class="stxt">So, what else are you waiting for?</p>
            <p class="freecall1">Call Now Free: <span class="dialme">
                    <a href="tel:08003683970">0800 368 3970</a>
                </span>
            </p>
            <p class="timings">
                <small>(Mon - Sat : 9:00AM - 6:00PM)</small>
            </p>
            <p class="lastrow">
                <span class="btnlook btn btn-sm btn-primary">May be Later!</span>
            </p>
        </div>
    </div>
</div>

<div id="modal-alert" class="modal fade booking-alert" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Zistravels Ltd.</h4>
            </div>
            <div class="modal-body">
                <p id="alert_msg"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

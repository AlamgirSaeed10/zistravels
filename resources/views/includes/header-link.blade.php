<section>
    <div class="clearfix"></div>
    <div class="row transparent-menu" style="border-top:5px solid #FFD71E;">
      <div class="container clear-padding">
        <div class="navbar-wrapper">
          <div class="navbar navbar-default" role="navigation">
            <div class="nav-container">
              <div class="navbar-header">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5">
                  <a class="navbar-brand logo" href="{{route('home.index')}}"><img
                      src="{{asset('assets/images/zis_travels.png')}}" alt=""></a>
                </div>
                <div class="col-lg-3 hidden-sm hidden-xs col-md-2">&nbsp;</div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-7">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="trustpilot hidden-xs hidden-sm hidden-md">
                    <img src="{{asset('assets/images/trustpilotstar.png')}}" alt="Trust Pilot Reviews">
                  </div>
                  <ul class="top-header-contact">
                    <li style="margin-top:10px;">
                      <h1 class="call-icon"><a href="tel:08003683970">
                          <i class="fa fa-phone"></i>
                          <font><span class="tol-free" style="float: left;margin-top: 10px;">0800 368 3970</span></font>
                        </a>
                      </h1>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row transparent-menu-top">
        <div class="container clear-padding">
          <div class="navbar-contact">
            <div class="col-xs-12">
              <!-- BEGIN: NAVIGATION -->
              <div style="padding: 0;" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="{{request()->routeIs('home.index') ? 'active':'' }}">
                    <a href="{{route('home.index')}}"> Home </a>
                  </li>
                  <li class="{{request()->routeIs('home.cheap_flights') ? 'active':'' }}">
                    <a href="{{route('home.cheap_flights')}}">Cheap Flights</a>
                    <div class="clearfix"></div>
                  </li>
                  <li class="{{request()->routeIs('home.business_class') ? 'active':'' }}">
                    <a href="{{route('home.business_class')}}">Business Class</a>
                    <div class="clearfix"></div>
                  </li>
                  <li class="{{request()->routeIs('home.why_us') ? 'active':'' }}">
                    <a href="{{route('home.why_us')}}"> Why Book With Us </a>
                    <div class="clearfix"></div>
                  </li>
                  <li class="{{request()->routeIs('home.booking_conditions') ? 'active':'' }}">
                    <a href="{{route('home.booking_conditions')}}">Booking Condition</a>
                    <div class="clearfix"></div>
                  </li>
                  <li class="{{request()->routeIs('home.customer_faqs') ? 'active':'' }}">
                    <a href="{{route('home.customer_faqs')}}">Faq's</a>
                    <div class="clearfix"></div>
                  </li>
                  <li class="{{request()->routeIs('home.about_us') ? 'active':'' }}">
                    <a href="{{route('home.about_us')}}">About us</a>
                    <div class="clearfix"></div>
                  </li>
                  <li class="{{request()->routeIs('home.contact_us') ? 'active':'' }}">
                    <a href="{{route('home.contact_us')}}">Contact us </a>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
              <!-- END: NAVIGATION -->
            </div>
          </div>
        </div>
      </div>
  </section>

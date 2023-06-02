@extends('includes.master')
@section('title', $title)
@section('content')
    <div class="site-wrapper">
    <div class="clearfix"></div>
    <div class="row page-title contact-bg">
        <div class="container clear-padding text-center flight-title">
            <h3>CONTACT US</h3>
            <h4 class="thank">Let's Get Connected</h4>
        </div>
    </div>
    <div class="row contact-address">
        <div class="container clear-padding">
            <div class="text-center">




                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-phone"></i>
                    <p><a href="tel:02079936068">0207 993 6068</a></p>
                </div>


                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-whatsapp"></i>
                    <p>0207 993 6224</p>
                </div>

                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-envelope-o"></i>
                    <p><a href="mailto:info@reliancetravels.co.uk">	info@reliancetravels.co.uk</a></p>
                </div>

                <div class="space"></div>

                <h2>GET IN TOUCH</h2>
                <h5>Please use the form below to write us regarding your any query. Our travel consultants will endeavor to reply <br>
                    you as soon as possible. </h5>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="container clear-padding">

            <div class="col-md-12 col-sm-12 contact-form" style="padding-bottom:10px;">
                <div class="col-md-12">
                    <h2 style="text-align:center;">DROP US A MESSAGE</h2>
                </div>
                <form name="frm" id="frm" action="/loading" method="post" autocomplete="off">
                    <input type="hidden" name="h_submit" value="1" />
                    <input type="hidden" name="page_id" value="contact_us">
                    <input type="hidden" value="Contact us" id="requesttitle" name="requesttitle">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="cname" id="cname" required class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" name="cemail" id="cemail" required class="form-control" placeholder="Enter Your Email Address">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="cphone" id="cphone" required class="form-control" placeholder="Your UK Contact No.">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="security" id="security" required class="form-control" placeholder="4+2=?">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select name="ccatagory" id="ccatagory" class="form-control">
                            <option value="Inquiry" selected>Inquiry</option>
                            <option value="Suggesstion">Suggesstion</option>
                            <option value="Complaint">Complaint</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <textarea required class="form-control" rows="5" id="cmnt"  name="cmnt" placeholder="Your Message"></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 search-col-padding text-center">
                        <div id="gl_recaptcha"></div>
                    </div>
                    <div class="text-center">
                        <input type="button" id="btnsearchbooking" class="btn btn-default submit-review" onclick="submit_form();" value="SEND YOUR MESSAGE" name="btnsearchbooking">
                        <!-- <button type="submit" class="btn btn-default submit-review">SEND YOUR MESSAGE</button> -->
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12">

                        <div class="office-address">
                            <p><b>Office:</b> 132-A, Woodlands Road, Ilford, Essex, England, IG1 1JP</p>
                            <p class="registerd-company">Reliance Travels Limited is registered in <b>England</b>.</p>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>

@endsection

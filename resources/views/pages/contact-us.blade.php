@extends('includes.master')
@section('title', $title)
@section('content')
<style>
    .top-bar-images {
        display: flex;
        justify-content: center;
    }

    .top-bar-images img {
        max-width: 100%;
        height: auto;
    }
</style>

    <div class="site-wrapper">
        <section>
            <div class="top-bar-images">
                <img class="full-width-search" src="{{asset('assets/images/contact-us.png')}}" alt="Image">
            </div>
        </section>

        <div class="clearfix"></div>
        <div class="row contact-address">
            <div class="container clear-padding">
                <div class="text-center">
                    <div class="col-md-4 col-sm-4">
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:08003683970">0800 368 3970</a></p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <i class="fa fa-whatsapp"></i>
                        <p>00000000</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <i class="fa fa-envelope-o"></i>
                        <p><a href="mailto:info@zistravels.co.uk"> info@zistravels.co.uk</a></p>
                    </div>
                    <div class="space"></div>
                    <h2>GET IN TOUCH</h2>
                    <h5>Please use the form below to write us regarding your any query. Our travel consultants will endeavor
                        to reply <br>
                        you as soon as possible. </h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container clear-padding">

                <div class="col-md-12 col-sm-12 contact-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <h2 style="text-align:center;">DROP US A MESSAGE</h2>
                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                <strong>Success!...</strong> {!! session('success') !!}
                            </div>
                        @endif

                    </div>

                    <form action="{{ route('contact.submit') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="name" id="name" required="" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" name="email" id="email" required="" class="form-control"
                                placeholder="Enter Your Email Address">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="phone" id="phone" required="" class="form-control"
                                placeholder="Your UK Contact No.">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <select name="category" id="category" class="form-control">
                                <option value="Inquiry" selected="">Inquiry</option>
                                <option value="Suggesstion">Suggesstion</option>
                                <option value="Complaint">Complaint</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                            <div class="col-md-8 col-sm-8">
                                <textarea required="" class="form-control" rows="5" id="cmnt" name="comment" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-4 col-sm-4" style="margin-top: 2%">
                                {!! htmlFormSnippet() !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 search-col-padding text-center">
                            <div class="col-md-12">
                                <input type="submit" name="contact" class="btn btn-default submit-review" value="SEND YOUR MESSAGE"
                                    name="btnsearchbooking">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="office-address">
                                    <p><b>Office:</b> 202 Wexham Rd, Slough SL2 5JP, United Kingdom</p>
                                    <p class="registerd-company">Reliance Travels Limited is registered in <b>England</b>.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>




@endsection

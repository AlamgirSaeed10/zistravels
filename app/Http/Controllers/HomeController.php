<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $title="Zistravels";
        return view('pages.index',compact('title'));
    }
    function cheap_flights(){
        $title="Cheap Flights";
        return view('pages.cheap-flights',compact('title'));
    }
    function booking_conditions(){
        $title="Booking Conditions";
        return view('pages.booking-conditions',compact('title'));
    }
    function business_class(){
        $title="Business Class";
        return view('pages.business-class',compact('title'));
    }
    function contact_us(){
        $title="Contact Us";
        return view('pages.contact-us',compact('title'));
    }
    function customer_reviews(){
        $title="Customer Reviews";
        return view('pages.customer-reviews',compact('title'));
    }
    function customer_faqs(){
        $title="customer FAQ's ";
        return view('pages.customer-faqs',compact('title'));
    }
    function privacy_policy(){
        $title="Privacy Policy";
        return view('pages.privacy-policy',compact('title'));
    }
    function travel_tips(){
        $title="Travel Tips";
        return view('pages.travel-tips',compact('title'));
    }
    function why_us(){
        $title="Why Book with Us";
        return view('pages.why-us',compact('title'));
    }
    function about_us(){
        $title="About Us";
        return view('pages.about-us',compact('title'));
    }
    function blogs(){
        $title="Blogs";
        return view('pages.blogs',compact('title'));
    }

}

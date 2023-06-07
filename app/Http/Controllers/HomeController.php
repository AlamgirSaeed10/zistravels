<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use DB;

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

    function online_search(Request $request){
        $title = "online Search";

        // Define the validation rules
        $validator = Validator::make($request->all(), [
            'padults' => 'required|integer|min:1',
            'flight_from' => 'required',
            'flight_to' => 'required',
            'departure_date' => 'required|date',
            'g-recaptcha-response' =>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dep_date = $request->input('departure_date');
        $ret_date = $request->input('return_date');

        $cabin_class = $request->input('cabin_class');
        $flight_type = $request->input('flight_type');

        $departureAirport = $request->input('flight_from');
        $destinationAirport = $request->input('flight_to');

        $flights = DB::table('flight_details')
        ->where('DepCity', $departureAirport)
        ->where('DestCity', $destinationAirport)
        ->get();
            return view('pages.search-results', compact('title','flights','departureAirport','destinationAirport','dep_date','ret_date','flight_type','cabin_class'));
    }


    function submitContactForm(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'category' => 'required',
            'comment' => 'required',
            'g-recaptcha-response' => 'required'
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'phone.required' => 'Phone is required.',
            'category.required' => 'Category is required.',
            'comment.required' => 'Comment is required.',
            'g-recaptcha-response.required' => 'CAPTCHA answer is required.',
        ]);

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'muhammadalamgir10@gmail.com';
            $mail->Password = 'znensgwmxpgeflzi';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom($request->email, $request->name);

            $mail->addAddress('mursaleen@zistravels.co.uk', 'Contact Us form');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Form Submission';
            $mail->Body = "Name: {$validatedData['name']}<br>";
            $mail->Body .= "Email: {$validatedData['email']}<br>";
            $mail->Body .= "Phone: {$validatedData['phone']}< br>";
            $mail->Body .= "Category: {$validatedData['category']}<br>";
            $mail->Body .= "Comment: {$validatedData['comment']}<br>";

            $mail->send();
            return redirect()->back()->with('success', 'Thank you for contacting <b>Zistravels UK</b>. Our team will contact you shortly!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error occurred while sending the email.');
        }
    }
    function newsletterForm(Request $request){

        $valid = $request->validate([
            'nemail'=>'required',
        ]);
        if(!$valid){
            return redirect()->back()->with('error','Please enter a valid email to recieve the info.');
        }
        $data= array(
            'NewsletterEmail' =>$request->nemail,
        );

       $insert =  DB::table('newsletter')->insert($data);
        if($insert > 0){
            return redirect()->back()->with('success','Thank you for contacting Zistravels.');
        }
        else{
            return redirect()->back()->with('error','Unknow error has occured please try again..!');

        }
    }


}

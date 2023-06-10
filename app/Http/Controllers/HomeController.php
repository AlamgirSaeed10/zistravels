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
            return redirect()->route('home.index')->with('success', 'Thank you for contacting <b>Zistravels UK</b>. Our team will contact you shortly!');
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
    function online_search(Request $request){
        $title = "online Search";
        $flight_from = $request->input(['flight_from']);
        $flight_to = $request->input(['flight_to']);
        $departure = $request->input(['departure_date']);
        $return = $request->input(['return_date']);
        $padult = $request->input(['padults']);
        $pchild = $request->input(['pchildren']);
        $pinfant = $request->input(['pinfants']);
        $cabin_class = $request->input(['cabin_class']);
        $flight_type = $request->input(['flight_type']);

        $departure_parts = explode("-", $departure);
        $departure_day = $departure_parts[0];
        $departure_month = date('m', strtotime($departure_parts[1]));


        $return_day = "";
        $return_month = "";
        $outbound_percentage = 0;
        $inbound_percentage = 0;
        $percentage = 0;
        $operation = '+';
        $flight_city = "";
        $flights = [];

        $airports = DB::table('airports')->get();
        foreach($airports as $row) {
            if ($flight_from == $row->city . " - " . $row->code) {
                if ($row->percentage < 0) {
                    $percentage = abs($row->percentage);
                    $operation = '-';
                } else {
                    $percentage = $row->percentage;
                }
                $flight_city = $flight_to;
            } elseif ($flight_to == $row->city . " - " . $row->code) {
                if ($row->percentage < 0) {
                    $percentage = abs($row->percentage);
                    $operation = '-';
                } else {
                    $percentage = $row->percentage;
                }
                $flight_city = $flight_from;
            }
        }

        $departure_day = (int) $departure_day;
        $col = ($departure_month < 10 && $departure_month > 0) ? "col{$departure_month}" : "col{$departure_month}";

        $outbound_percentage = DB::table('percentage')->where('id', $departure_day)->value($col);


        if (!empty($return)) {
            $return_day = explode("-", $return)[0];
            $return_month = $return[1];
            $return_day = (int) $return_day;
            $col_r = ($return_month < 10 && $return_month > 0) ? "col0{$return_month}" : "col{$return_month}";
            $inbound_percentage = DB::table('percentage')->where('id', $return_day)->value($col_r);
        }

        if (session()->getId() === '') {
            session()->start();
        }

        $flights = DB::table('airline_flight')
            ->join('airlines', 'airline_flight.airline_id', '=', 'airlines.id')
            ->join('flights', 'flights.id', '=', 'airline_flight.flight_id')
            ->where('flights.city', $flight_city)
            ->orderBy('airline_flight.price', 'asc')
            ->select('airlines.name', 'airlines.image', 'flights.city', 'airline_flight.price')
            ->get()
            ->toArray();

        foreach ($flights as &$row) {
            $row->price_percentage_added = $row->price + ($row->price * ($inbound_percentage + $outbound_percentage)) / 100;

            if ($percentage > 0) {
                if ($operation == '-') {
                    $row->price_percentage_added -= ($row->price_percentage_added * $percentage) / 100;
                } else {
                    $row->price_percentage_added -= ($row->price_percentage_added * $percentage) / 100;
                }
            }

            if ($cabin_class == "Premium Economy") {
                $row->price_percentage_added += ($row->price_percentage_added * 90) / 100;
            } elseif ($cabin_class == "Business") {
                $row->price_percentage_added += ($row->price_percentage_added * 125) / 100;
            }

            if (session()->has('username')) {
                $row->price_percentage_added -= ($row->price_percentage_added * 5) / 100;
            }

            $row->price_per_person = $row->price_percentage_added;
            $row->price_adult = $row->price_percentage_added;
            $row->price_child = $row->price_percentage_added - 50;
            $row->price_infant = $row->price_percentage_added - ($row->price_percentage_added * 60) / 100;
            $row->price_padults = $padult * $row->price_percentage_added;

            $row->price_children = 0;
            if ($pchild > 0) {
                $row->price_children = $pchild * $row->price_percentage_added;
            }
            $row->price_children -= ($pchild * 50);

            $row->price_infants = 0;
            if ($pinfant > 0) {
                $row->price_infants = $pinfant * $row->price_percentage_added;
                $row->price_infants -= ($row->price_infants * 60) / 100;
            }

            $row->price_percentage_added = round($row->price_adult + $row->price_children + $row->price_infant);
        }
        return view('pages.search-results', compact('title','flights','flight_from','flight_to','departure','return','cabin_class','flight_type','padult', 'pchild','pinfant'));
    }
    function online_enquiry(){
        return view('pages.online-flight-enquery');
    }
    function enquiry_form(Request $request){

        $flight_city = $request->input(['flight_city']);
        $flight_type = $request->input(['flight_type']);
        $cabin_class = $request->input(['cabin_class']);
        $departure = $request->input(['departure']);
        $return = $request->input(['return']);
        $airline_name = $request->input(['airline_name']);
        $city = $request->input(['city']);
        $ToAirportCode = $request->input(['ToAirportCode']);
        $flight_to = $request->input(['flight_to']);
        $FromAirportCode = $request->input(['FromAirportCode']);
        $flight_from = $request->input(['flight_from']);
        $price_adult = $request->input(['price_adult']);
        $price_child = $request->input(['price_child']);
        $price_infant = $request->input(['price_infant']);
        $pinfant = $request->input(['pinfant']);
        $padult = $request->input(['padult']);
        $pchild = $request->input(['pchild']);
        $airline_image = $request->input(['airline_image']);

        return view('pages.online-flight-enquery',compact( 'flight_city', 'flight_type','cabin_class','departure','return','price_adult','airline_name','city','ToAirportCode',
            'flight_to','airline_image','FromAirportCode','flight_from','pinfant','padult','pchild','price_child','price_infant'));
    }

    function submit_enquery(Request $request){
        $title = "Zistravels - ";
        $cname = $request->cname;
        $cphone = $request->cphone;
        $cemail = $request->cemail;
        $departure_date = $request->departure_date;
        $return_date = $request->return_date;
        $padults = $request->padults;
        $pchildren = $request->pchildren;
        $pinfants = $request->pinfants;
        $flight_city = $request->flight_city;
        $flight_type = $request->flight_type;
        $cabin_class = $request->cabin_class;
        $departure = $request->departure;
        $return = $request->return;
        $airline_name = $request->airline_name;
        $city = $request->city;


        $padult = $request->padults;
        $price_adult = $request->price_adult;

        $pchild = $request->pchildren;
        $price_child = $request->price_child;

        $pinfant = $request->pinfants;
        $price_infant = $request->price_infant;

        $ToAirportCode = $request->ToAirportCode;
        $FromAirportCode = $request->FromAirportCode;
        $flight_from = $request->flight_from;
        $inst = $request->inst;

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
            $mail->setFrom($cemail, $cname);

            $mail->addAddress('muhammadalamgir10@gmail.com', 'Flight Booking Detail');

            $mail->isHTML(true);
            $mail->Subject = 'Flight Booking Form Submission';

            $mail->Body .= '<table class="table table-bordered">';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Customer Name:</strong></td><td>' . $cname . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Customer Phone:</strong></td><td>' . $cphone . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Customer Email:</strong></td><td>' . $cemail . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Flight Type:</strong></td><td>' . $flight_type . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Departure Date:</strong></td><td>' . $departure_date . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Return Date:</strong></td><td>' . $return_date . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Cabin Class:</strong></td><td>' . $cabin_class . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Airline Name:</strong></td><td>' . $airline_name . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Flying From :</strong></td><td>' . $flight_from . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Flying To:</strong></td><td>' . $flight_city . '</td></tr>';

            if($padult > 0){
                $mail->Body .= '<tr><td><strong class="text-capitalize"># Adults:</strong></td><td>' . $padults . '</td></tr>';
                $mail->Body .= '<tr><td><strong class="text-capitalize">Adult Price:</strong></td><td>' . $price_adult . '</td></tr>';
            } if($pchild > 0){
            $mail->Body .= '<tr><td><strong class="text-capitalize"># Children:</strong></td><td>' . $pchildren . '</td></tr>';
            $mail->Body .= '<tr><td><strong class="text-capitalize">Child Price:</strong></td><td>' . $price_child . '</td></tr>';
            } if($pinfant > 0){
                $mail->Body .= '<tr><td><strong class="text-capitalize"># Infants:</strong></td><td>' . $pinfants . '</td></tr>';
                $mail->Body .= '<tr><td><strong class="text-capitalize">Infant Price:</strong></td><td>' . $price_infant . '</td></tr>';
            }
            $mail->Body .= '<tr><td><strong class="text-capitalize">Instructions:</strong></td><td>' . $inst . '</td></tr>';
            $mail->Body .= '</table>';

            $mail->send();
            return redirect()->route('home.index')->with('success', 'Thank you for contacting <b>Zistravels UK</b>. Our team will contact you shortly!');
        } catch (Exception $e) {
            return redirect()->route('home.index')->with('error', 'Error occurred while sending the email.');
        }

    }


}

@extends('includes.master')
@section('title', $title)
@section('content')
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .faq-container {
        max-width: 50%;
        margin: 0 auto;
        padding: 20px;
    }

    .faq-question {
        cursor: pointer;
        background-color: #f5f5f5;
        padding: 10px;
        margin-bottom: 10px;
    }

    .faq-question .toggle-icon {
        float: right;
        margin-left: 10px;
    }

    .faq-answer {
        display: none;
        background-color: #ffffff;
        padding: 10px;
    }
    .head{
        padding: 20px;
    }
    </style>
    </head>
    <div class="site-wrapper">
        <section>
            <div class="row full-width-search single-search" style="background-image: url(assets/images/faqs.png);height:350px;">
            </div>
        </section>

        <div class="faq-container">
            <div class="text-center">
                <h4 class="head">Zistravels - Frequently Asked Questions</h4>
            </div>
            <div class="faq-question">
                <h5>
                    <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: How can I book a flight through Zistravels?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Booking a flight with Zistravels is easy. Simply visit our website or mobile app, enter your travel details such as destination, dates, and passenger information, and browse through the available flights. Once you find a suitable option, follow the prompts to complete the booking process.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: What payment methods are accepted by Zistravels?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Zistravels accepts various payment methods, including major credit cards (Visa, Mastercard, American Express), debit cards, and online payment platforms like PayPal. You can choose the payment option that suits you best during the booking process.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: Can I make changes to my flight booking after it's been confirmed?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Yes, depending on the airline's policies and fare conditions, you may be able to make changes to your flight booking. However, please note that changes may be subject to additional fees or fare differences. Contact our customer support team for assistance with modifying your booking.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: What if my flight is delayed or canceled?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: In the event of a flight delay or cancellation, Zistravels will assist you in accordance with the airline's policies. We recommend contacting our customer support or directly contacting the airline to get the most up-to-date information and guidance on rebooking, compensation, or alternative travel arrangements.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: Are there any baggage restrictions I should be aware of?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Baggage policies vary among airlines. It's important to carefully review the baggage allowance and restrictions of the airline you are traveling with. Zistravels provides information regarding baggage policies during the booking process, but we recommend checking directly with the airline or reviewing their official website for the most accurate and up-to-date details.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: Can I select my seat in advance?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Yes, many airlines allow passengers to select seats in advance, either during the booking process or through the airline's website or mobile app. Zistravels provides options for seat selection when available. However, please note that seat availability and the possibility of seat selection may depend on the airline and the fare class you choose.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: How can I obtain a copy of my e-ticket?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Once your flight booking is confirmed, Zistravels will send you an email containing your e-ticket. This email will typically include your booking reference number, flight details, and instructions on how to access and print your e-ticket. It's important to keep a copy of your e-ticket or have it readily available on your mobile device for check-in at the airport.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: What if I need to cancel my flight? Will I receive a refund?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: The possibility of canceling your flight and the refund eligibility depend on the airline's fare rules and policies. Zistravels can assist you in processing a flight cancellation; however, please note that cancellation fees or penalties may apply, and the refund amount, if any, will be subject to the airline's terms and conditions. Contact our customer support team to initiate the cancellation process.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: Do I need a visa for international travel?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: Visa requirements vary depending on your destination and nationality. It is essential to check the visa requirements of the country you plan to visit. Zistravels can provide general information regarding visa requirements, but it is your responsibility to ensure you have the necessary travel documents, including visas, prior to your trip.</p>
                </div>
            </div>

            <div class="faq-question">
                <h5>
                      <span class="toggle-icon"><i class="fa fa-plus"></i></span>
                    <span>Q: How can I contact Zistravels for assistance?</span>
                </h5>
                <div class="faq-answer">
                    <p>A: For any inquiries, concerns, or assistance, you can reach out to Zistravels through our customer support channels. You can find our contact details on our website or mobile app. Our dedicated support team is available to help you with any travel-related queries and provide the necessary guidance and support throughout your booking and travel experience.</p>
                </div>
            </div>
        </div>
        <script>
            // Add JavaScript to handle the expand/collapse functionality
            const questions = document.querySelectorAll('.faq-question');

            questions.forEach(question => {
                const toggleIcon = question.querySelector('.toggle-icon');
                const answer = question.querySelector('.faq-answer');

                question.addEventListener('click', () => {
                    const isOpen = question.classList.contains('active');
                    questions.forEach(q => q.classList.remove('active'));
                    questions.forEach(q => q.querySelector('.faq-answer').style.display = 'none');

                    if (!isOpen) {
                        question.classList.add('active');
                        answer.style.display = 'block';
                    }
                });
            });
        </script>
@endsection

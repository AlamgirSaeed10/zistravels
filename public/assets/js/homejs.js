/* SLIDER SETTINGS */
$(document).ready(function () {
	jQuery(function ($) {
		"use strict";
		$.supersized({
			slideshow: 1, //Slideshow on/off
			autoplay: 1, //Slideshow starts playing automatically
			start_slide: 0, //Start slide (0 is random)
			random: 1, //Randomize slide order (Ignores start slide)
			slide_interval: 5000, //Length between transitions
			transition: 1, //0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed: 500, //Speed of transition
			new_window: 1, //Image links open in new window/tab
			pause_hover: 0, //Pause slideshow on hover
			keyboard_nav: 0, //Keyboard navigation on/off
			performance: 1, //0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
			image_protect: 1, //Disables image dragging and right click with Javascript

			//Size & Position
			min_width: 0, //Min width allowed (in pixels)
			min_height: 0, //Min height allowed (in pixels)
			vertical_center: 1, //Vertically center background
			horizontal_center: 1, //Horizontally center background
			fit_portrait: 1, //Portrait images will not exceed browser height
			fit_landscape: 0, //Landscape images will not exceed browser width

			//Components
			navigation: 1, //Slideshow controls on/off
			thumbnail_navigation: 1, //Thumbnail navigation
			slide_counter: 1, //Display slide numbers
			slide_captions: 1, //Slide caption (Pull from "title" in slides array)
			slides: [ //Slideshow Images
				{
					image: 'assets/images/slides-banner/bg-1.jpg',
					title: 'Slide 1'
				},
				{
					image: 'assets/images/slides-banner/bg-2.jpg',
					title: 'Slide 2'
				},
				{
					image: 'assets/images/slides-banner/bg-3.jpg',
					title: 'Slide 3'
				},
				{
					image: 'assets/images/slides-banner/bg-4.jpg',
					title: 'Slide 4'
				},
				{
					image: 'assets/images/slides-banner/bg-6.jpg',
					title: 'Slide 5'
				},
			]

		});
	});
	$("#searchButton").click(function () {
		var errMsg = '';
		if ($('#destination_airport').val() == '') errMsg += '&bull;&nbsp;&nbsp;Please Enter Destination Airport.<br/>';
		if ($('#departure_date').val() == '') errMsg += '&bull;&nbsp;&nbsp;Please Enter Departure Date.<br/>';
		if ($('#departure_airport').val() == '') errMsg += '&bull;&nbsp;&nbsp;Please Enter Departure Airport.<br/>';
		if ($('#return_date').val() == '' && $('input[name=flight_type]:checked', '#frmsearch').val() == 'Return') errMsg += '&bull;&nbsp;&nbsp;Please Enter Return Date.<br/>';
		if(!is_rebot()){
			errMsg += '&bull;&nbsp;&nbsp;Please Confirm You Are Not a Robot.<br/>'   
		}
		if (errMsg != '') {
			$('#dialog').html(errMsg);
			$("#dialog").dialog({
				bgiframe: true,
				modal: true,
				title: 'Reliance Travels Ltd: Flight Search',
				buttons: {
					Ok: function () {
						$(this).dialog('destroy');
					}
				}
			});
		} else {
			document.getElementById("frmsearch").submit();
		}
	});
});

function search_hotel() {
	var hdestination = $("#hdestination").val();
	var hcheckin = $("#hcheckin").val();
	var hcheckout = $("#hcheckout").val();
	var hname = $("#hname").val();
	var hemail = $("#hemail").val();
	var hphone = $("#hphone").val();
	var errMsg = '';
	if (hdestination === "") {
		errMsg += '&bull;&nbsp;&nbsp;Please Enter Destination.<br/>'
	}
	if (hcheckin === "") {
		errMsg += '&bull;&nbsp;&nbsp;Please Enter Check - in Date.<br/>'
	}
	if (hcheckout === "") {
		errMsg += '&bull;&nbsp;&nbsp;Please Enter Check - Out Date.<br/>'
	}
	if (hname === "") {
		errMsg += '&bull;&nbsp;&nbsp;Please Enter Passenger Name.<br/>'
	}
	if (hemail === "") {
		errMsg += '&bull;&nbsp;&nbsp;Please Enter Valid and active Email address.<br/>'
	}
	if (hphone === "") {
		errMsg += '&bull;&nbsp;&nbsp;Please Enter Valid and active Phone Number.<br/>'
	}
	if (errMsg !== "") {
		$("#alert_msg").html(errMsg);
		$('#modal-alert').modal("show");
	} else {
		document.getElementById("frmhotel").submit();
	}
}

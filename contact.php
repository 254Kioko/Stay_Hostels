<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $to = "stayhostels@gmail.com";
    $subject = "New Booking Request";
    $message = "Name: ".$name."\n"."Number: ".$number."\n"."Email: ".$email."\n"."Gender: ".$gender;
    $headers = "From: ".$email;
    if(mail($to, $subject, $message, $headers)) {
        echo "Your booking has been sent successfully!";
    } else {
        echo "Sorry, your message could not be sent at this time.";
    }
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>STAY HOSTELS </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
	
    
</head>
<body class="contact-page">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.html">Home</a></li>
				    
				   <li><a href="contact.html">BOOK</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</header>


	


<!--////////////////////////////////////Container-->


<!--////////////////////////////////////Footer-->
<footer>
	
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				<h3>Contact</h3>
				<span>Phone / +254799543648</span></br>
				<span><a href="mailto:stayhostels@gmail.com"> EMAIL</a>   </span></br>
				<span> Nairobi West </span></br>
				<span><strong>Copyright  - Designed by <a href="0741056273" title="DEVELOPER">EDDIE KIOKO</a> </strong></span>
				<ul class="social-buttons">
				<li><a href="tel:tel:0799543648"><i class=" fa fa-phone"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-whatsapp"></i></a>
					</li>
					<li><a href="https://www.instagram.com/mwendwa2.0/"><i class="fa fa-instagram"></i></a>
					</li>

					<li><a href="mailto:stayhostels@gmail.com"><i class="fa fa-envelope"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
	
</div>
</body></html>
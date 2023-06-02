<?php
// define variables and set to empty values
$name = $phone = $email = $gender = "";

// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);

  // send email
  $to = "stayhostels@gmail.com";
  $subject = "New booking submission";
  $message = "Name: $name\nPhone: $phone\nEmail: $email\nGender: $gender";
  $headers = "From: stayhostels@gmail.com";

  mail($to,$subject,$message,$headers);

  // insert data into database
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "STAY HOSTELS";

  // create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // prepare and bind statement
  $stmt = $conn->prepare("INSERT INTO myTable (name, phone, email, gender) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $phone, $email, $gender);

  // execute statement
  $stmt->execute();

  // close statement and connection
  $stmt->close();
  $conn->close();

  // redirect to thank you page
  header("Location: thankyou.html");
  exit();
}

// function to test input values
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
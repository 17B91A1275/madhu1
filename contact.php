<!DOCTYPE html>
<html lang="en">
<head>
<title>Blood Donors</title>
<link href="images/1_large.jpg" rel="shortcut icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		
		<!-- Top Bar -->

		<!--<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
						<div class="event_timer">
							<span>Next Big Event:</span>
							<ul class="timer">
								<li class="d-inline-flex">
									<div id="day" class="timer_num">03</div>
									<div class="timer_unit">Days</div>
								</li>
								<li class="d-inline-flex">
									<div id="hour" class="timer_num">15</div>
									<div class="timer_unit">Hours</div>
								</li>
								<li class="d-inline-flex">
									<div id="minute" class="timer_num">45</div>
									<div class="timer_unit">Minutes</div>
								</li>
								<li class="d-inline-flex">
									<div id="second" class="timer_num">23</div>
									<div class="timer_unit">Seconds</div>
								</li>
							</ul>
						</div>
						<div class="donations_button ml-auto">
							<a href="#">Send Donations</a>
						</div>
					</div>
				</div>
			</div>
		</div>-->

		<!-- Header Content -->

		<!--<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">

							<!-- Logo -->
							<!--<div class="logo_container">
								<div class="logo">
									<a href="#">
										<span>Believe</span>
										<img src="images/logo.jpg" alt="">
									</a>
								</div>
							</div>

							<!-- Navigation and Search -->
						<!--	<div class="header_nav_container ml-auto">
								<nav class="main_nav">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="ministries.html">Ministries</a></li>
										<li><a href="sermons.html">Sermons</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li class="active"><a href="#">Contact</a></li>
									</ul>
								</nav>
								<div class="search">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="13px" height="14px">
										<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
									</svg>
								</div>
							</div>

							<!-- Hamburger -->

							<!--<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form">
									<input type="search" class="search_input" placeholder="Search" required="required">
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
											<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
										</svg>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
		<?php include "header.php" ?>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
			<form action="#" class="menu_search_form">
				<input type="search" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button d-flex flex-column align-items-center justify-content-center">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
					<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
				</svg>
			</button>
			</form>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="ministries.html">Ministries</a></li>
					<li><a href="sermons.html">Sermons</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Contact</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="index.php">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Map 

	<div class="contact_map">

		<!-- Google Map -->
		
		<!--<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>

	</div>

	<!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Contact Info</div>
				</div>
			</div>
			<div class="row contact_info_row row-eq-height">
				
				<!-- Contact Info Content -->
				<div class="col-lg-6 d-flex flex-column align-items-start justify-content-end">
					<div class="row">
						<div class="col-lg-6 contact_info_col">
							<div class="contact_info_title">Los Angeles Church</div>
							<ul class="contact_info_list">
								<li><span>Address: </span>1481 Creekside Lane Avila Beach, CA 93424</li>
								<li class="footer_contact_phone">
									<span>Phone: </span>
									<div>
										<div> +53 345 7953 32453</div>
										<div> +53 345 7557 822112</div>
									</div>
								</li>
								<li><span>Email: </span>yourmail@gmail.com</li>
							</ul>
						</div>
						<div class="col-lg-6 contact_info_col">
							<div class="contact_info_title">San Francisco Church</div>
							<ul class="contact_info_list">
								<li><span>Address: </span>1481 Creekside Lane Avila Beach, CA 93424</li>
								<li class="footer_contact_phone">
									<span>Phone: </span>
									<div>
										<div> +53 345 7953 32453</div>
										<div> +53 345 7557 822112</div>
									</div>
								</li>
								<li><span>Email: </span>yourmail@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Info Image -->
				<div class="col-lg-6">
					<div class="contact_info_image"><img src="images/blo.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Contact Us</div>
					<form action="#" class="contact_form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="contact_input contacts_input_name" placeholder="Your Name" required="required">
							</div>
							<div class="col-md-6">
								<input type="email" class="contact_input contact_input_email" placeholder="Your E-mail" required="required">
							</div>
						</div>
						<textarea id="contact_text_area" placeholder="Your Message" class="contact_text"></textarea>
						<button class="contact_button trans_200">Submit</button>
					</form>
				</div>
			</div>
			<div class="row">
				
			</div>
		</div>
	</div>

	<!-- Newsletter 

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your email" required="required">
								<button id="newsletter_button" class="newsletter_button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php include "footer.php" ?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>
</html>
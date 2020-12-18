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
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

<?php
	    if(isset($_REQUEST['error']))
		 {
           session_destroy(); ?>
		  <script>
		    alert("Invalid user name and password!");
			</script>
	<?php
           	unset($_SESSION['mobile']);   
           	}
	 ?>
   <?php
	    if(isset($_REQUEST['pwderror']))
		 {
           session_destroy(); ?>
		  <script>
		    alert("Password does not match!");
			</script>
	<?php
           	unset($_SESSION['mobile']);   
           	}
	 ?>
	<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
			<form action="#" class="menu_search_form">
				<input type="search" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button d-flex flex-column align-items-center justify-content-center">
				
			</button>
			</form>
			<nav class="menu_nav">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="blog.php">About Us</a></li>
					<li><a href="sermons.php">Search Donor</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- Home -->

	<div class="home">
		<?php include "header1.php";?>
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/25.jpg)"></div>
					<div class="home_slider_content text-center">
					</div>
				</div>
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/b3.jpg)"></div>
					<div class="home_slider_content text-center">
					</div>
				</div>
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/b5.jpg)"></div>
					<div class="home_slider_content text-center">
					</div>
				</div>
			</div>
			<div class="home_slider_nav d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>
		</div>
	</div>
	<?php include "footer.php"; ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
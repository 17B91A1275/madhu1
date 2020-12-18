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
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>
<div class="super_container">
		<?php include "header1.php" ?>	
		<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
			<form action="#" class="menu_search_form">
				<input type="search" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button d-flex flex-column align-items-center justify-content-center">
				<!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
					<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
				</svg>-->
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
	<div class="blog">
		<div class="container">
			<div class="row">
				<!-- Blog Content -->
				<div class="col-lg-9">
					<div class="blog_content">
						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_image">
								<img src="images/v1.png" alt="">
							</div>
						</div>
						<div class="blog_post">
							<div class="blog_image">
								<img src="images/19.jpg" alt="">
							</div>
							<div class="blog_title"><h2><b>What Is This??</b></h2></div>
							<div class="blog_text">
								<p><h3><a href="blood donation.com">www.blood donation.com</a> is an address which can save your life.
										 From Kashmir to Kanya Kumari, from the most common blood group to the rarest, 
										the site has a database of blood donors. 
										So if you need blood, it's a good place to turn to.
										 It's simple. It's effective. It's Free.
										 It can match you with a donor near you in minutes. 
										And you can save the life of a loved one. 
										You can also Sign up as a donor at the site and save the life of someone else's loved one.
										 Pass the message and let's build a community that cares !</h3> </p>
							</div>
						</div>
						<div class="blog_post">
							<div class="blog_image">
								<img src="images/26.jpg" alt="">
							</div>
							<div class="blog_text">
								<p><h3>The Blood Transfusion Service in the country is highly decentralised
								and lacks many vital resources like manpower, adequate infrastructure and financial base.
								The main issue, which plagues blood banking system in the country, is fragmented management. The standards vary from state to state, cities to cities and centre to 
								centre in the same city. In spite of hospital based system, many large hospitals and nursing homes do not have their 
								own blood banks and this has led to proliferation of stand-alone private blood banks.</h3></p>
							</div>
						</div>
					</div>
				</div>
				<!-- Blog Sidebar -->
				<div class="col-lg-3 sidebar_col">
					<div class="blog_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_search">
								<form action="#">
									</button>
								</form>
							</div>
						</div>
						<div class="sidebar_section">
						<div class="blog_post">
							<div class="blog_image">
								<img src="images/vin.jpg" alt="">
								</div>
								</div>
								<div class="sidebar_section">
						<div class="blog_post">
							<div class="blog_image">
								<img src="images/27.jpg" alt="">
								</div>
								</div>
						<div class="sidebar_section">
							<div class="sidebar_quote">
								<div class="sidebar_quote_background" style="background-image:url(images/sidebar_quote.jpg)"></div>
								<div class="sidebar_quote_char"><img src="images/quote_char.png" alt=""></div>
								<div class="sidebar_quote_text"><b><h3>"If You're A Blood Donar,You're 
							<br>	A Hero To Someone,
							<br>Somewhere,
							<br>Who Received Your Gracious Gift Of Life."</h3></b></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php" ?>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog_custom.js"></script>
</body>
</html>
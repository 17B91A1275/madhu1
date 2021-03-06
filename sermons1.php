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
<link rel="stylesheet" type="text/css" href="styles/sermons.css">
<link rel="stylesheet" type="text/css" href="styles/sermons_responsive.css">
<style>
.button{
background_color: #ff0000;
border:none;
padding:15px 32px;
text-align:center;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;
}
</style>
</head>
<body>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `blood`	WHERE CONCAT(`bloodgroup`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `blood`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "user", "123456", "spardha");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		
		<!-- Top Bar -->

		<!--<div class="top_bar">
			<div class="container">
				<div class="row">
				<div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
				<div class="donations_button ml-auto" align='top_bar_left'>
							<!--<a href="login.php">Donor Register</a>-->
					
						<!--<div class="event_timer">
							<!--<span>Next Big Event:</span>-->
						<!--	<ul class="timer">
							<!--	<li class="d-inline-flex">
									<!--<div id="day" class="timer_num">03</div>
									<div class="timer_unit">Days</div>-->
							<!--	</li>
							<!--	<li class="d-inline-flex">
									<!--<div id="hour" class="timer_num">15</div>
									<div class="timer_unit">Hours</div>-->
							<!--	</li>
							<!--	<li class="d-inline-flex">
									<!--<div id="minute" class="timer_num">45</div>
									<div class="timer_unit">Minutes</div>-->
							<!--	</li>
							<!--	<li class="d-inline-flex">
									<!--<div id="second" class="timer_num">23</div>
									<div class="timer_unit">Seconds</div>-->
							<!--	</li>
							</ul>
						</div>-->
						
								
						
						<!--<div class="donations_button ml-auto">
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
					    </div>-->
					</div>
		
		<!--</div>-->

		<!-- Header Content -->

		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">

							<!-- Logo -->
							<div class="logo_container">
								<div class="logo">
									<a href="#">
										<span>Every blood donor <br>is a Life saver</span>
										<img src="images/logo_large.jpg" alt="">
									</a>
								</div>
							</div>

							<!-- Navigation and Search -->
							<div class="header_nav_container ml-auto">
								<nav class="main_nav">
									<ul>
										<li class="active"><a href="index.php">Home</a></li>
										<li><a href="sermons.php">Search donor</a></li>
										<li><a href="blog.php">About us</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
								
							</div>
							


							<!-- Hamburger -->

					<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!--<div class="header_search_container">
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
			</div>-->
		</div>

	</header>
		
		<!-- Top Bar -->

		<!--<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
						<!--<div class="event_timer">
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
						</div>-->
					

		<!-- Header Content -->


	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="images/cross_1.png" alt=""></div>
			<!--<form action="#" class="menu_search_form">
				<input type="search" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button d-flex flex-column align-items-center justify-content-center">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
					<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
				</svg>
			</button>
			</form>-->
			<nav class="menu_nav">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="sermons.php">Search Donor</a></li>
					<li><a href="blog.php">About Us</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/sermons.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Search Donor</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="index.php">Home</a></li>
									<li>Search Donor</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Sermon -->

	<div class="sermon">
		<div class="sermon_background" style="background-image:url(images/sermon.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<!--<div class="section_image"><img src="images/church_3.png" alt=""></div>-->
						<div class="section_title"><h2>Donors Information</h2></div>
						<!--<div class="section_subtitle">God loves us all</div>-->
					</div>
				</div>
			</div>
			<div class="row sermon_row">

				<!-- Sermon Image -->
				<div class="col-lg-6">
					<div class="sermon_image"><img src="images/b213.jpg" alt=""></div>
				</div>
				
				<!-- Sermon Content -->
				<div class="col-lg-6">
					<div class="sermon_content">
						<div class="sermon_title">
						
					
						<tr>
				<div class="sermon_buttons">
				<font size="4">Blood Group:</font>
				
				<select name="bloodgroupp" id="bloodgroup">
				<option value="">----</option>
				<option value="A+">A +ve</option>
				<option value="A-">A -ve</option>
				<option value="B+">B +ve</option>
				<option value="B-">B -ve</option>		
				<option value="O+">O +ve</option>
				<option value="O-">O -ve</option>
				<option value="AB+">AB +ve</option>
				<option value="AB-">AB -ve</option>
				</select>
			</div>	
		
			<a href="index.php" class="button" style="color:white">Search</a>
			<table>
                <tr>
                    <th>fname</th>
                    <th>gender</th>
                    <!--<th>Age</th>-->
                    <th>bloodgroup</th>
					 <th>town</th>
                    <!--<th>pincode</th>
                    <th>mobile</th>-->
                    <th>email</th>
					 <!--<th>password</th>-->
                    <th>request</th>
					
					
                </tr>

            <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    
                    <td><?php echo $row['bloodgroup'];?></td>
					<td><?php echo $row['town'];?></td>
                    
                    <td><?php echo $row['email'];?></td>
					<td><a href="send_email.php"><button type="submit ">send</button></a></td>
					
                </tr>
                <?php endwhile;?>
					
				
            </table>

			</div>
			</div>
			
					<!--<div class="sermon_buttons">
							<ul>
								<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
								<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
								<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
								<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
								<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
								<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	  
      

        
		<label for="scode"><b>Special code:</b></label>
      <input type="password" placeholder="Enter Special code"id="scode" name="scode" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}" title="Must contain uppercase and lowercase letters, and size equal to 8 " required>
		
		<!--<label for="email"><b>email</b></label>
      <input type="text" placeholder="Enter email" name="email" id="email" required>
	  
	  <label for="date"><b>Date</b></label>
      <input type="date" placeholder="Enter Date" name="date" id="date" required>-->
        
		
      
      <!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    
	<!-- Popular -->

	<!--<div class="popular">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_image"><img src="images/church_7.png" alt=""></div>
						<div class="section_title"><h2>Popular Sermons</h2></div>
						<div class="section_subtitle">God loves us all</div>
					</div>
				</div>
			</div>
			<div class="row popular_row">-->

				<!-- Popular Sermon -->
			<!--	<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_1.jpg" alt="https://unsplash.com/@joshapplegate"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
-->
				<!-- Popular Sermon -->
			<!--	<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_2.jpg" alt="https://unsplash.com/@joshapplegate"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

				<!-- Popular Sermon -->
	<!--			<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_3.jpg" alt="https://unsplash.com/@joshapplegate"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

				<!-- Popular Sermon -->
<!--				<div class="col-lg-6">
					<div class="popular_item">
						<div class="popular_image"><img src="images/popular_4.jpg" alt="https://unsplash.com/@knixon"></div>
						<div class="sermon_content">
							<div class="sermon_title"><a href="sermon_single.html">Receive The Holy Spirit By Jesus Christ</a></div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
-->
	<!-- Featured -->

<!--	<div class="featured">
		<div class="container-fluid">
			<div class="row">-->

				<!-- Featured 1 -->
			<!--	<div class="col-lg-6 featured_col">
					<div class="featured_background parallax-window" data-parallax="scroll" data-image-src="images/featured_1.jpg" data-speed="0.8"></div>
					<div class="featured_1">
						<div class="sermon_content">
							<div class="sermon_title">Receive The Holy Spirit By Jesus Christ</div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

				<!-- Featured 2 -->
				<!--<div class="col-lg-6 featured_col_2">
					<div class="featured_background parallax-window" data-parallax="scroll" data-image-src="images/featured_2.jpg" data-speed="0.8"></div>
					<div class="featured_2">
						<div class="sermon_content">
							<div class="sermon_title">Receive The Holy Spirit By Jesus Christ</div>
							<ul class="sermon_list">
								<li>Sermon by: <a href="#">Priest Jack Smith</a></li>
								<li>Categories: <a href="#">Jesus Christ</a>, <a href="#">Holy</a></li>
								<li>Date: <a href="#">Monday 11 March, 2018</a></li>
							</ul>
							<div class="sermon_text">
								<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.nteger nec bibendum lacus.</p>
							</div>
							<div class="sermon_buttons">
								<ul>
									<li class="sermon_item"><img class="svg" src="images/sermon_1.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_2.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_3.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_4.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_5.svg" alt=""></li>
									<li class="sermon_item"><img class="svg" src="images/sermon_6.svg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!--<div class="newsletter">
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/sermons_custom.js"></script>
</body>
</html>
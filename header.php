<header class="header">
		
		<!-- Top Bar boijojo -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
				<div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
				<div class="donations_button ml-auto" align='top_bar_left'>
							<!--<a href="login.php">Donor Register</a>-->
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Donor Register</button>
		      <?php include "register.php" ?>
			 </div>
			 <div class="donations_button ml-auto" align='top_bar_right'>
							<!--<a href="login.php">Donor Register</a>-->
						<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Donor login</button>
						<?php include 'login.php'; ?>
						</div>
				</div>	
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
				</div>
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

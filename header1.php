<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo">
									<a href="#">
										<span>Every blood donor <br>is a Life saver</span>
										<img src="images/logo_large.jpg" alt="">
									</a>
								</div>
							</div>
							<div class="header_nav_container ml-auto">
								<nav class="main_nav">
									<ul>
										<li class="active"><a href="index.php">Home</a></li>
										<li><a href="search.php">Search donor</a></li>.
										<li><a href="blog.php">About us</a></li>
										<li><button onclick="document.getElementById('id01').style.display='block'">Register</li>
										<li><button onclick="document.getElementById('id02').style.display='block'">Login</li>
										 <?php include ('register.php') ?>
                                         <?php include ('login.php'); ?>	
									</ul>
								</nav>	
							</div>
					<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
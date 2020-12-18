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
<link rel="stylesheet" type="text/css" href="styles/sermon_single.css">
<link rel="stylesheet" type="text/css" href="styles/sermon_single_responsive.css">
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
<?php include "connect.php";
      session_start();
	  $mobile=$_SESSION['mobile'];
	  $query="select name from user where mobile='$mobile'";
	  $res=mysqli_query($con,$query);
	  while($row=mysqli_fetch_array($res))
	  {
		  $name=$row[0];
	  }
?>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		
		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>

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
										
										<img src="images/v5.png" alt="">
									</a>
								</div>
							</div>
							</div>

							<!-- Navigation and Search -->
							
							<div align="center" style="float:right">
							<span><b><h2>Every blood donor is a Life saver</h2></b></span>
								
							</div>	

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						
					</div>
				</div>
			</div>

			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
						</div>
					</div>
				</div>			
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					
					<li><a href="blog.php">About Us</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="index.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/sermon_single.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">MY Profile</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="index.php">Home</a></li>
									<li><a href="Profile.html">My Profile</a></li>
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
		<div class="sermon_image_big"><img src="images/b5.jpg" alt=""></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="sermon_title_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="sermon_content">
                   <table width="100%" border="0" style=" height: 300px">
                       <tr height="30" valign="top">
                     <td><h3>Welcome<?php echo " <b>".$name."!</b>";?></h3></td></tr>
                       <tr><td class="page_content1" valign="top"><p align="justify"><strong><h3>Dear <?php echo " ".$name.",";?></h3></strong>
<br/>
<br/>
<h3>Thank you for Registering as a blood donor on blood donation.com .</h3>

<br/>
<br/><h3>
We request you to Invite your Friends to  join this helpline. You also spread the word by Pasting our Poster
in your Office / College / Residential Complex / Hospitals / Blood Banks. Whenever you
go to a blood bank to donate blood please help create awareness about
the helpline.</h3>
<br/>
<br/>
<h3>Please check this space for further updates.</h3>
<br/>
<br/>
<h4>Warm Regards
<br/>
</br>
In Service</h4>
<br/>
<br/>
<h3>FAB 5</h3>
  </p>
 </table>
 </div>
				</div>
			</div>
			</div>
			</div>
			
			</div>
			<div class="col-lg-11" align="center" >
			<a href="index.php" class="button" style="color:white">Log out</a>
			</div>
	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">

					<!-- Logo -->
					<div class="logo_container">
						<div class="logo">
							<a href="#">
								<span>Give Blood<br>Save Life</span>
								<img src="images/logo_large.jpg" alt="">
							</a>
						</div>
						<div class="logo_subtitle">Blood Donation</div>
					</div>
				</div>
				<div class="col-lg-4 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="profile.php">Donor Login</a></li>
							<li><a href="blog.html">About Us</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="index.php">Log Out</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Us</div>
						<div class="contact_info_title">Bhimavaram Town</div>
							<ul class="contact_info_list">
								<li><span>Address: </span>SRKR Engineering College,Juvallapalem Road,Bhimavaram,pincode:535204,A.P.</li>
								<li class="footer_contact_phone">
									<span>Phone: </span>
									<div>
										<div> +91 9908276025</div>
										<div> +91 7893458645</div>
									</div>
								</li>
								<li><span>Email: </span>spardhablood@gmail.com</li>
							</ul>
					</div>
				</div>

			</div>
		</div>
</div>

	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/sermon_single_custom.js"></script>
</body>
</html>
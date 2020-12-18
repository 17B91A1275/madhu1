<!DOCTYPE html>
<html lang="en">
<head>
<?php include "connect.php";?>
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
.td{
	padding:25px;
}
table,tr,th,td
            {
                border: 1px solid black;
            }
           body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

<?php include "header1.php";?>
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
</div>
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
					<li><a href="index.php">Home</a></li>
					<li  class="active"><a href="search.php">Search Donor</a></li>
					<li><a href="blog.php">About Us</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/29.jpg" data-speed="0.8"></div>
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
<section>

	<div class="sermon">
		<div class="sermon_background" style="background-image:url(images/sermons.png)"></div>
		<div class="container">
			<div class="row" align="center">
				<div class="col">
					<div class="section_title_container">
						<!--<div class="section_image"><img src="images/church_3.png" alt=""></div>-->
						<div class="section_title"><h2>Find A Donor?</h2></div>
  <div class="container">
  	<form action="submit_register.php" width="50%" onsubmit='return validate();' method="POST">
    <h1 align="center" style="color:red;"><b>Register</b></h1>
    <p>Please fill in this form to create an account.</p>
</div>
<div>	
        <label ><b>Register as:</b></label>
        <SELECT name='register' id='register'>
       <OPTION value=''>select</OPTION>
       <OPTION value='SHG'>SHG</OPTION>
       <OPTION value='Seller'>Seller</OPTION>
       <OPTION value='Buyer'>Buyer</OPTION>
       </SELECT>
	   
	  <div id="type_err" style='color:red';></div> 
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" id="name">
	 <div id="name_err" style='color:red';></div>  
        <label><b>Gender:</b></label>
        <input  type="radio" name="gender" id="male" value='Male'>
        <label for='male'>Male</label>
       <input type='radio' name='gender' id='female' value='Female'>
       <label for='female'>Female</label>
      </div>
    <div id="gender_err" style='color:red';></div> 
      
    <label for="phno"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter mobile Number" name="mobile" id="mobile">
	 <div id="mobile_err" style='color:red';></div>  
     <?php
     if(isset($_REQUEST['mobileerror']))
	  {
	    echo "<center><span style='color:red;'>Mobile already exists!</span></center>";
      }
    ?>	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">
	 <div id="email_err" style='color:red';></div> 
   	 

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd">
	 <div id="pwd_err" style='color:red';></div>  

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwd_repeat" id="pwd_repeat">
	 <div id="pwd_repeat_err" style='color:red';></div> 
    <?php
      if(isset($_REQUEST['repeatpwderror']))
       {
	    echo "<center><span style='color:red;'>Password does not match!</span></center>";
      }
    ?>	 
    <label for="address"><b>Street</b></label>
    <input type="text" placeholder="Enter Address" name="street" id="street">
	 <div id="street_err" style='color:red';></div> 
	 
	 <label for="address"><b>City</b></label>
    <input type="text" placeholder="Enter Address" name="city" id="city">
	 <div id="city_err" style='color:red';></div>
	 
	 <label for="address"><b>Pin</b></label>
    <input type="text" placeholder="Enter Address" name="pin" id="pin">
	 <div id="pin_err" style='color:red';></div> 
   
   <label for="address"><b>State</b></label>
    <input type="text" placeholder="Enter Address" name="state" id="state">
	 <div id="state_err" style='color:red';></div> 
	 
   <label for="psw"><b>Alternate Mobile Number</b></label>
    <input type="text" placeholder="Enter alternate mobile Number" name="mobile_alt" id="mobile_alt">
	 <div id="mobile_alt_err" style='color:red';></div>  
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</div>
</div>
</div>
</div>	  
</div>
</div>
</div>
</section>
	<?php include "footer.php" ?>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/sermons_custom.js"></script>
<script>

var myInput = document.getElementById("scode");
var length = document.getElementById("length");

myInput.onkeyup = function() {
	

if(myInput.value.length == 8) {

    length.classList.remove("invalid");

    length.classList.add("valid");

  } else {

    length.classList.remove("valid");

    length.classList.add("invalid");
  }
}


</script>
</body>
</html>
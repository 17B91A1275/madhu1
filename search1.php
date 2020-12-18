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
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ffffff;
  
}
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

	<div class="sermon">
		<div class="sermon_background" style="background-image:url(images/sermons.png)"></div>
		<div class="container">
			<div class="row" align="center">
				<div class="col-lg-12">
					<div class="section_title_container">
						<!--<div class="section_image"><img src="images/church_3.png" alt=""></div>-->
						<div class="section_title"><h2>Find A Donor?</h2></div>
						
						<!--<div class="section_subtitle">God loves us all</div>-->
					</div>
 <form action="search1.php" method="post">
           <label> Enter Blood Group:</label>
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
           
 </form>
			
			<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `user`	WHERE CONCAT(`blood`) LIKE '%".$valueToSearch."%'";
	//echo $query;
   $res=mysqli_query($con,$query);
	//echo $search_result;?>
	           <table id="customers">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Blood Group</th>
					 <th>City</th>
                    <!--<th>pincode</th>-->
                    <th>Mobile</th>
                    <th>Email</th>
					 <!--<th>password</th>-->
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($res)){?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
				</tr>
                <?php }?>
				
                
		
				
            </table>
			<?php
    
}
 else {
    $query = "SELECT * FROM `user`";
    $res=mysqli_query($con,$query);
	?>
	       <table id="customers">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Blood Group</th>
					 <th>City</th>
                    <!--<th>pincode</th>-->
                    <th>Mobile</th>
                    <th>Email</th>
					 <!--<th>password</th>-->
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($res)){?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
				</tr>
                <?php }?>
				
                
		
				
            </table>
			<?php
}

// function to connect and execute the query
?>
 
	<?php include "footer.php" ?>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/sermons_custom.js"></script>
</body>
</html>
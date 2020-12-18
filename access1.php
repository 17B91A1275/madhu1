<?php
$message="";
if(count($_POST)>0) {
	$con = mysqli_connect("localhost","user","123456","spardha");
	$result = mysqli_query($con,"SELECT * FROM blood WHERE fname=  ' " . $_POST["fname"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>
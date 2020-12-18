<html>
<head>
</head>
<body>
<?php
   include "connect.php"; 
   $fname=$_POST["fname"];
   $gender=$_POST["gender"];
   $age=$_POST["age"];
   $bloodgroup=$_POST["bloodgroup"];
   $town=$_POST["town"];
   $pincode=$_POST["pincode"];
   $mobile=$_POST["mobile"];
   $email=$_POST["email"];
   $password=$_POST["password"];
   $cpassword=$_POST["cpassword"];
   if($password!=$cpassword)
   {
	 header('Location:index.php?pwderror');
   }
	else
	{
	$query="insert into user (name,gender,age,blood,city,pin,mobile,email,password) values ('$fname','$gender','$age','$bloodgroup','$town','$pincode','$mobile','$email','$password')";
    //echo $query;
	session_start();
	mysqli_query($con,$query);
  	//$_SESSION['fname'] = $fname;
  	$_SESSION['mobile'] = $mobile;
  	header('location: profile.php');
    }
?>
</body>
</html>
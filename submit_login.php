<?php
include "connect.php";
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$query="select * from user where mobile='$mobile' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
   session_start();
   $_SESSION['mobile']=$mobile;
   header('Location:profile.php');
}
else
{
	header('Location:index.php?error');
}
?>
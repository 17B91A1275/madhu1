<?php

$host="localhost"; // Host name 
$username="user"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="spardha"; // Database name 
$tbl_name="blood"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$fname=$_POST['fname']; 
$password=$_POST['password']; 
$scode=S_POST['scode'];
// To protect MySQL injection (more detail about MySQL injection)
$fname = stripslashes($fname);
$password = stripslashes($password);
$fname = mysql_real_escape_string($fname);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE fname='$fname' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("fname");
session_register("password"); 
session_start();
if(!session_is_registered(fname)){
header("location:profile.html");
}
}
else {
 header('Location: login.php?id=err');
}
?>
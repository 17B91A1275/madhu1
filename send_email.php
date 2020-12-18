<HTML>
<HEAD>
</HEAD>
<BODY>
<CENTER>
<h2>Email</h2><br>
<?php

  require_once('email/class.phpmailer.php');
  include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "9908276025vinaykumar@gmail.com";  // GMAIL username
  $mail->Password   = "9908276025v";            // GMAIL password

  $mail->SetFrom('9908276025vinaykumar@gmail.com', 'BloodDonation, Fab5'); // Change the name as you want
  $mail->Subject = "request for blood donation";
  $mail->Body = "This is the test mail sent from blood doantion website!\n~FAB5 Project Team \n ";
  $mail->AddAddress("madhuri.setti02@gmail.com");

  $mail->Send();

  echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>
</BODY>
</HTML>

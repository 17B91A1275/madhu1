<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
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

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
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
<div id="id01" class="modal">
  <form class="modal-content animate" action="submit_register.php" method="post" onSubmit='return validate()'>
    <div class="container" width="100">			
	<table width="600" align="center" height="400" align="center">
			<tr>
				<td colspan="2" align="center">	
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<font color="Black" size="10" face="Algerian">Donor Registration Form</font>
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				</td>
			</tr>
			<tr>
				<td align="center">
					<font size="4">Full Name : </font>
				</td>
				<td>
					<input type="text" name="fname" id = "fname">
					<span id="nameerr" style="color:red"></span>
				</td>
		     </tr>
			  <tr>
				<td align="center">
					<font size="4">Gender :</font>
				</td>
				<td>
					<font size="4">
					 		<input type="radio" name="gender" value="M" id="male"> Male
							<input type="radio" name="gender" value="F" id="female"> Female
							<span id="gendererr" style="color:red"></span>
							</font>			
				</td>
			</tr>
			 <tr>
				<td align="center">
					<font size="4">Age: </font>
				</td>
				<td>
					<input type="text" name="age" id ="age" pattern="(?=.*[0-9]).{2}" title="Must contain numbers ">
					<span id="ageerr" style="color:red"></span>
				</td>
		     </tr>
			 <tr>
				<td align="center">
					<font size="4">Blood Group:</font>
				</td>
				<td>
				<select name="bloodgroup" id="bloodgroup">
				<option value="">----</option>
				<option value="A+">A +ve</option>
				<option value="A-">A -ve</option>
				<option value="B+">B +ve</option>
				<option value="B-">B -ve</option>		
				<option value="O+">O +ve</option>
				<option value="O-">O -ve</option>
				<option value="AB+">AB +ve</option>
				<option value="AB-">AB -ve</option>
				</select>
				</td>
		     </tr>
			 <tr>
				<td align="center">
					<font size="4">City/Town:</font>
				</td>
				<td>
					<input type="text" name="town" id ="town">
					<span id="townerr" style="color:red"></span>
				</td>
		     </tr>
			  <tr>
				<td align="center">
					<font size="4">Pin Code:</font>
				</td>
				<td>
					<input type="text" name="pincode" id ="pincode" pattern="(?=.*[0-9]).{6}" title="Must contain numbers and size equal to 6 " >
					<span id="pincodeerr" style="color:red"></span>
				</td>
		     </tr>
			 <tr>
				<td align="center">
					<font size="4">Mobile Number :</font>
				</td>
				<td>
					<input  type="text" name="mobile" size="30" id = "mobile" pattern="(?=.*[0-9]).{10}" title="Must contain numbers and size equal to 10 " >
					<span id="mobileerr" style="color:red"></span>
				</td>
			</tr>
			<tr>
				<td align="center">
					<font size="4">Email Address :</font>
				</td>
				<td>
					<input type="text" name="email" size="30" id = "email">
					<span id="emailerr" style="color:red"></span>
				</td>
			</tr>
			<tr>
				<td align="center">
					<font size="4">Password:</font>
				</td>
				<td>
					<input type="password" name="password"  id = "password"   title="Must contain uppercase and lowercase letters, and one number and size equal to 5 ">
					<span id="passworderr" style="color:red"></span>
				</td>
			</tr>
			<tr>
				<td align="center">
					<font size="4">Confirm Password:</font>
				</td>
				<td>
					<input type="password" name="cpassword" id ="cpassword"   title="Must contain uppercase and lowercase letters, and size equal to 8 ">
					<span id="cpassworderr" style="color:red"></span>
				</td>
		     </tr>
			 <tr>
				<td colspan="4" align="center">
			<!--	<input  type="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5}"
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5}"
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}"
				<input type='reset' name="clear" value="CLEAR">-->
				
				   <div class="container" style="background-color:#f1f1f1">
				   <button type="submit">Register</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                 </div>
				</td>
			</tr>
		</table>
		</div>
	</form>
	</div>
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
function validate()
{
  var name=document.getElementById("fname").value;
  var age=document.getElementById("age").value;
  var male=document.getElementById("male").value;
  var female=document.getElementById("female").value;
  var town=document.getElementById("town").value;
  var pincode=document.getElementById("pincode").value;
  var email=document.getElementById("email").value;
  var mobile=document.getElementById("mobile").value;
  var password=document.getElementById("password").value;
  var cpassword=document.getElementById("cpassword").value;
  document.getElementById("nameerr").innerHTML="";
  document.getElementById("ageerr").innerHTML="";
  document.getElementById("gendererr").innerHTML="";
  document.getElementById("townerr").innerHTML="";
  document.getElementById("pincodeerr").innerHTML="";
  document.getElementById("emailerr").innerHTML="";
  document.getElementById("mobileerr").innerHTML="";
  document.getElementById("passworderr").innerHTML="";
  document.getElementById("cpassworderr").innerHTML="";
   if(name=="")
   {
	   document.getElementById("nameerr").innerHTML="Name should not be empty!!";
	   return false;
   }	
   if(male.checked==false && female.checked==false)
   {
	   document.getElementById("gendererr").innerHTML="Gender should not be empty!!";
	   return false;
   }
   if(age=="")
   {
	   document.getElementById("ageerr").innerHTML="Age should not be empty!!";
	   return false;
   } 
   if(town=="")
   {
	   document.getElementById("townerr").innerHTML="Town should not be empty!!";
	   return false;
   }
   if(pincode=="")
   {
	   document.getElementById("pincodeerr").innerHTML="Pincode should not be empty!!";
	   return false;
   }
   if(mobile=="")
   {
	   document.getElementById("mobileerr").innerHTML="Mobile should not be empty!!";
	   return false;
   }
   if(email=="")
   {
	   document.getElementById("emailerr").innerHTML="Email should not be empty!!";
	   return false;
   }
    if(password=="")
   {
	   document.getElementById("passworderr").innerHTML="Password should not be empty!!";
	   return false;
   }
    if(cpassword=="")
   {
	   document.getElementById("cpassworderr").innerHTML="Password should not be empty!!";
	   return false;
   }
   return true;
}
</script>	
</body>
</html>

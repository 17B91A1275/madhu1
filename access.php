 <?php

         session_start();
		 //include ("conn.php");

         if(isset($_POST['fname'])) //check if login data is present
           {
             $con =mysqli_connect("localhost", "user", "123456", "spardha");
         
             $fname=$_POST['fname'];             //Fetch userid and password from login form
             $password=$_POST['password'];  
             $scode=$_POST['scode'];
             $query = "select * from blood where fname='$fname' and password='$password' and scode='$scode'";
             //echo $query;
			 $result = mysqli_query($query);       //check for correct userid and password in database 
			//echo "$result";
			
            $no=mysqli_num_rows($result);         //get the number of rows of the query - 0 indicates invalid userid & password
              if($no==0)
               {
		       header('Location: login.php?id=err'); 
	           } 
	           else
               {
		       $_SESSION['fname']=$fname;
		      //store data in session variable that can be accessed in all pages
		       header('Location: profile.php');
	           }
	      }
           else if(!isset($_SESSION['fname']))   //if the user tries to access a page directly      
                  {
		    header('Location: login.php'); //redirect to login page
		          }
 ?>

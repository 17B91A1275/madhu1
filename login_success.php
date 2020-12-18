<?php
session_start();
if(!session_is_registered(fname)){
header("location:profile.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>
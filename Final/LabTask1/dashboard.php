<?php
   session_start();
   /*if(!isset($_SESSION["user"])){
       header ("Location:login.php");
   }*/
   
   if(!isset($_COOKIE["user"])){
       header ("Location:login.php");
   }
   
  ?>


<html>
     <body>
	 
	       <h1>WELCOME<?php echo $_COOKIE["user"]?></h1>
	       <a href="change_password.php">Change Password </a>
	 </body>
	 

</html>
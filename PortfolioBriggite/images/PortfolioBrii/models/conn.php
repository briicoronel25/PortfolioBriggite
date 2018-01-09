
<?php
 $mysqli = new mysqli("127.0.0.1", "root", "newpassword", "portfolio");

 // check Connection
 if($mysqli === false){
 	die("ERROR: Could Not connect. " . $mysqli->connect_error);

 }
  	 // print host information
 echo " Connect Successfully. Host info: " . $mysqli->host_info;

 // Close connection
 $mysqli->close();
 ?>

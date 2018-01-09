<?php
	//Set connection credentianls
	$user = "root";
	$pass = ""; // for Pc
	//$pass = "root" for MAC only
	$url = "localhost";
	$db = "db_portfolio";

	//$link = mysql_connect($url, $user, $pass, $db, "8889"); // MAC only add "8889(localhost code)"
	//create us access token to our database
	$link = mysqli_connect($url, $user, $pass, $db);

	//Check connection w/ error message
	if(mysqli_connect_errno()){
		printf("Connection failed: %s\n", mysqli_connect_error);
		exit();
	}
?>

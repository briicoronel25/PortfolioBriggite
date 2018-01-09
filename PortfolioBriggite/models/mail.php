<?php

	function redirect_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}
	//echo "From mail file.";
	function submitMessage($direct, $name, $email, $message) { //make sure the arguments are in the same order. copy and paste
		//echo "From submitMessage()";
		$to = "briicoronel25@gmail.com";
		$subject = "Message from user from hosting";
		$extra = "Reply to: ".$email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
		//mail($to, $subject, $msg, $extra);
		$direct = $direct."?name={$name}";

	}

?>

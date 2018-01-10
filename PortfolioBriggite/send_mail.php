<!DOCTYPE html>
<html>
<body>

<?php
ob_start();
$name=$_POST["Name"];
$message=$_POST["Message"];
$email=$_POST["Email"];
include ('PHPMailer.php');
include ('SMTP.php');
include ('OAuth.php');

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings                                 // Enable verbose debug output
    $mail->SMTPDebug = 2;   
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hawk_crowxx@hotmail.com';                 // SMTP username
    $mail->Password = 'yinchurikiHAWK';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hawk_crowxx@hotmail.com');
    $mail->addAddress('hawkcrowxx@gmail.com');
    $mail->AddReplyTo($email);               // Name is optional
    //Attachments
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Message From '.$name;
    $mail->Body    = "<html>
					  <head>
					<title>HTML email</title>
					</head>
					<body>
						<h2> Message information </h2>
						<table>
						<tr>
							<td>Name:</td>
							<td>".$name."</td>
						</tr>
						<tr>
							<td>email</td>
							<td>".$email."
						</table>
						<h3> Message </h3>
						<br><br>".$message."
					</body>
					</html>
	";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    header("Location: message_sent.html");
    exit;
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("Location: message_sent.html");
    exit;
}
ob_end_flush();
?> 

<script>
	window.location.href= "message_sent.html"
</script>

</body>
</html>
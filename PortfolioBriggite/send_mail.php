<!DOCTYPE html>
<html>
<body>

<?php
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
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.briggitecoronel.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'briggite_coronel@briggitecoronel.com';                 // SMTP username
    $mail->Password = '25Briicoroneld';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('briggite_coronel@briggitecoronel.com');
    $mail->addAddress('briggite_coronel@hotmail.com');
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
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("Location: message_sent.html");
}
?>

<script>
	window.location.href= "message_sent.html"
</script>

</body>
</html>

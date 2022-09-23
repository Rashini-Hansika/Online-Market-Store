<?php
//IT20622596 - Weerasinghe R B	


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

   require __DIR__."/vendor/autoload.php";
   $name = $_POST['name'];
	$customer_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'expressmarketing1010@gmail.com';
	$password="expressmar123";
	$email_subject = "New Submission";
	
	$email_body = "User Name: $name.\n".
	               "User Email: $customer_email.\n".
                    "User Message:$message.\n";

	$to = "ravbuddhima@gmail.com";

   
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = $email_from;
    $mail->Password = $password;
    $mail->SetFrom($email_from);
    $mail->Subject = $email_subject;
    $mail->Body = $email_body;
    $mail->AddAddress($to);

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>

 	
	
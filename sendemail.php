<?php
include('PHPMailer.php');
echo "<script>alert('Send Email to Conference Invitees');</script>";
$mail = new PHPMailer();  
try {
	$mail->SMTPSecure = "tls";  
	$mail->Host='smtp.gmail.com';  
	$mail->Port=587;   
	$mail->Username = 'PhpMailerRao@gmail.com'; 
	$mail->Password = 'SSRao_123';  
	$mail->SMTPKeepAlive = true;  
	$mail->Mailer = "smtp"; 
	$mail->IsSMTP(); // telling the class to use SMTP  
	$mail->SMTPAuth   = true;                  // enable SMTP authentication  
    //Recipients
    $mail->setFrom('PhpMailerRao@gmail.com','Administrator');
    $mail->addAddress('chaitratotad27@gmail.com', 'Chaitra');     // 
    //Content
    $mail->isHTML(true);                                  // Set email 
	//$mail->Subject = $_POST["subject"];
    //$mail->Body    = $_POST["content"];
	    $mail->Subject = "Hi Chaitra!";
		$mail->Body = "Welcome to NCCC Conference!";
    $mail->send();
    
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


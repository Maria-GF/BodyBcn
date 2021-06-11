<?php 
	$name = $_POST['name'];
    $from = $_POST['from'];
    $to = 'm.g.f@live.com';
	$subject = 'Request info from bodybcn.es';
	$message = $_POST['message'];
    $headers = 'From: '. $from . "\r\n" .
    'Reply-To: ' .$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	if(mail($to, $subject, $message, $headers)){
        header("Location: index.html");
        exit();
    }
 ?>
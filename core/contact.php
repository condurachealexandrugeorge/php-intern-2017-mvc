<?php
$to      = 'conduracheee@yahoo.com';
$subject = $_POST['subject'];
$message = $_POST['text'];
$headers = 'From: '.$_POST['mail']. "\r\n" .
    'Reply-To: '.$_POST['mail']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: ../");
?> 


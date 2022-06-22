<?php
$text = $_POST["mess"];

$to      = 'dimasgo1985@example.com';
$subject = 'the subject';
$message = $text;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
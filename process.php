<?php

$youremail = "lildave78@gmail.com";
$subject = "Website Contact Form Submission";

$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

 $headers = "From: $email";

$content = "Hello there!\r\n 
You just received a message from your contact form. Here are the details:
\r\n
Name: $name\r\n
E-mail: $email\r\n
Message: $message\r\n";

$send = mail($youremail, $subject, $content, $headers);

?>
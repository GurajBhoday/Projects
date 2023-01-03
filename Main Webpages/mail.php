<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "autogaslpgke@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <!--Link to css-->
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">To go back click<a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>


';


?>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "gambin.thibaut@gmail.com";
$subject = "Contact Form GitHub Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
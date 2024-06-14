<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
$formcontent=" From: $name \n Subject: $subject \n Email: $email \n Message: $message";
$to = "prajwaldhage14@gmail.com";
$subject = "Mail from Mr. Prajwal.cf";
$mailheader = "From: hello@mrprajwal.cf";
mail($to, $subject, $formcontent, $mailheader) or die("Error!");

//redirect
header("Location:thankyou.html")
?>

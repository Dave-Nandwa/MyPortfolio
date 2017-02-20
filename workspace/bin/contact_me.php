<?php
// Check for empty fields
if(empty($_POST['name'])      ||
  empty($_POST['surname'])    ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "<div class='alert alert-success' role='alert'>Message not sent!</div>";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$surname = strip_tags(htmlspecialchars($_POST['surname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'dnandwa5@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "My Portfolio Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nFirst Name: $name \n\nLast Name: $surname \n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@myportfolio.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
echo"<div class='alert alert-success' role='alert'>Message Sent!</div>";
return true;

?>

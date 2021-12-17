<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message= $_POST['message'];


$email_from='shantanuverma2003@gmail.com';

$email_subject= "NEW FEEDBACK SUBMISSION";

$email_body= "Users Name: $name.\n".
                 "Users Email: $visitor_email.\n".
                 "Users Message: $message.\n";

$to= "eatsandbeatslko@gmail.com";

$headers="From: $email_from \r\n";

$headers="Reply-To: $visitor_email \r\n";
  
mail($to,$email_subject,$email_body,$headers);

header("Location: eats.html");

?>
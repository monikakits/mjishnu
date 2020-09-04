<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$email_from='Pinkypin189@gmail.com';
$email_subject= "Need help";
$email_body = "User Name:$name.\n".
                "User Email:$visitor_email.\n".
                  "User Message: $message./n";
                  $to = "Pinkypin189@gmail.com";
          $headers="From: $email_from \r\n";
          $headers.= "Reply-To: $visitor_email \r\n";
          mail($to,$email_subject,$email_body,$headers);
          header("Location: html.html")

?>

<?php
 
  $admin_email = "alfred.rezk@yahoo.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $mailheader = "From: $email \r\n";

//   mail($admin_email, "New Form Subission", $message, $mailheader) or die("Error!");
// echo "Thank You!";
  mail($admin_email, "New Form Subission", $message . ' - '. $phone "From": . $email);
  header('Location: http://google.com');


?>



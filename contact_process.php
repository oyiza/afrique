<?php
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $to = "jonathan.hutchinson@ymail.com";
   $subject = "Afrique Mesage Test";
   
   mail($to, $subject, $message, "from: " . $name);
   echo "Your message Has been sent";
?>
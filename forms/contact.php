<?php
  
  function filter_email_header($form_field) {  
    return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
    }
  
  $receiving_email_address = 'raj.ypareek@gmail.com';
  $email_address = $_POST['email'];
  $sender_name = $_POST['name'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  
  $email_addressl  = filter_email_header($email_address);
  $main_message = "Message From: ". $sender_name ."\n"."Sender's Email: ". $email_address."\n"."Message: ". $message;
  $headers = "From: noreply@exoticindia.com.au";
  $sent = mail($receiving_email_address, $subject, $main_message, $headers);
   echo "Form Submitted Successfully";
  
?>
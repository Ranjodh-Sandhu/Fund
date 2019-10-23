<?php
  include('PersonsInsert.php');
  include("sendmail.php");
  $to       =   $_POST['email'];
  $subject  =   'Welcome to Fundd';
  $message  =   'This is an email confirming that we have received your information.';
  $name     =   $_POST['name'];
  $mailsend =   sendmail($to,$subject,$message,$name);
?>
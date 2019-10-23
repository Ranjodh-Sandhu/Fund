<?php
      include("sendmail.php");
      $to       =   $_POST['email'];
      $subject  =   $_POST['subject'];
      $message  =   $_POST['message'];
      $name     =   $_POST['name'];
      $mailsend =   sendmail($to,$subject,$message,$name);
?>
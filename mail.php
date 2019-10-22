<?php
      include("sendmail.php");
      $to       =   "funddteam@gmail.com";
      $subject  =   $_POST['subject'];
      $message  =   $_POST['message'];
      $name     =   $_POST['name'];
      $mailsend =   sendmail($to,$subject,$message,$name);
      if($mailsend==1){
        echo '<h2>Thank You! </h2>';
      }
      else{
        echo '<h2>There are some issue.</h2>';
      }
?>
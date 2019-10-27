<?php
      include("sendmail.php");
      $to       =   $_POST['email'];
      $subject  =   $_POST['subject'];
      $message  =   $_POST['message'];
      $name     =   $_POST['name'];
      $mailsend =   sendmail($to,$subject,$message,$name);


  
      $dbhost = "ec2-174-129-210-249.compute-1.amazonaws.com";
      $dbUser = "xlfqpddygnpwxc";
      $dbpass = "b02909f3f17e94614fe4a4cf445cf2a85484ca8aafc9f5b1bbdb53b52509e420";
      $dbname = "ddhp0guq8tbh5u";
      $password = '$_POST[password]';
      
      $hash = password_hash($password, PASSWORD_BCRYPT);
      try {
      
          $myPDO = new PDO("pgsql:host=$dbhost;dbname=$dbname", "$dbUser", "$dbpass");
          //echo 'Connected';
       // Check connection
      }catch(PDOException $e){
          echo $e->getMessage();
      }
      
       
       $sql1 = "INSERT INTO contact_us(contact_name, contact_email, contact_subject, contact_message) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
     
       $myPDO->query($sql1);
      $myPDO=null;
      
?>
<?php
    require_once('class.phpmailer.php');
    function sendmail($to,$subject,$message,$name)
    {
                  $mail             = new PHPMailer();
                  $body             = $message;
                  $mail->IsSMTP();
                  $mail->SMTPAuth   = true;
                  $mail->Host       = "smtp.gmail.com";
                  $mail->Port       = 587;
                  $mail->Username   = "funddteam@gmail.com";
                  $mail->Password   = "RJLH4753";
                  $mail->SMTPSecure = 'tls';
                  $mail->SetFrom("funddteam@gmail.com", $_POST['name']);
                  $mail->AddReplyTo($_POST['email'], $_POST['name']);
                  $mail->Subject    = $_POST['subject'];
                  $mail->AltBody    = $_POST['message'];
                  $mail->MsgHTML($body);
                  $address = $to;
                  $mail->AddAddress($address, $name);
                  if(!$mail->Send()) {
                        echo 'Thank you!';
                  } else {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                 }
    }
?>
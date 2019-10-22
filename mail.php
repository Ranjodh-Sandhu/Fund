<?php
    require_once('class.phpmailer.php');
    $to = "funddteam@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
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
                  $mail->SetFrom("funddteam@gmail.com", $name);
                  $mail->AddReplyTo($_POST['email'], $name);
                  $mail->Subject    = $_POST['subject'];
                  $mail->AltBody    = "Any message.";
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
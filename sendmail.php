<?php
    require_once('PHPMailer-master/src/PHPMailer.php');
    require_once('PHPMailer-master/src/SMTP.php');
    require_once('PHPMailer-master/src/Exception.php');
    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail($to,$subject,$message,$name)
    {
                  $mail             = new PHPMailer(true);
                  try{
                    $body             = "{$name} <br> {$to} <br> {$message}";
                    $mail->IsSMTP();
                    $mail->SMTPAuth   = true;
                    $mail->Host       = "smtp.gmail.com";
                    $mail->Port       = 587;
                    $mail->Username   = "funddteam@gmail.com";
                    $mail->Password   = "RJLH4753";
                    $mail->SMTPSecure = 'tls';
                    $mail->SetFrom('funddteam@gmail.com', 'Fundd team');
                    $mail->AddReplyTo("funddteam@gmail.com", "Fundd team");
                    $mail->Subject    = "Contact Us: {$subject}";
                    $mail->AltBody    = "Any message.";
                    $mail->MsgHTML($body);
                    $address = "funddteam@gmail.com";
                    $mail->AddAddress($address, $name);
                    $mail->send();
                    echo '<h2>Thank You!</h2>';
                  }catch(Exception $e) {
                      echo "Mail cannot be sent: {$mail->ErrorInfo}";
                  }
                  
    }
?>
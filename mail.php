<?php 
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'funddteam@gmail.com';                     // SMTP username
    $mail->Password   = 'RJLH4753';                               // SMTP password
    $mail->Port       = 587;                                    // TCP port to connect to

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    //$mail->setFrom($_POST['email'], $_POST['name']);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    $mail->send();
    echo 'Thank you!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
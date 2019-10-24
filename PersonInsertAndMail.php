<?php
    require_once('PHPMailer-master/src/PHPMailer.php');
    require_once('PHPMailer-master/src/SMTP.php');
    require_once('PHPMailer-master/src/Exception.php');
    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail1($to,$subject,$message,$firstname)
    {
                  $mail             = new PHPMailer(true);
                  try{
                    $body             = "{$firstname} <br> {$to} <br> {$message}";
                    $mail->IsSMTP();
                    $mail->SMTPAuth   = true;
                    $mail->Host       = "smtp.gmail.com";
                    $mail->Port       = 587;
                    $mail->Username   = "funddteam@gmail.com";
                    $mail->Password   = "RJLH4753";
                    $mail->SMTPSecure = 'tls';
                    $mail->SetFrom('funddteam@gmail.com', 'Fundd team');
                    $mail->AddReplyTo("{$to}", "{$firstname}");
                    $mail->Subject    = "{$subject}";
                    $mail->AltBody    = "Any message.";
                    $mail->MsgHTML($body);
                    $address = "{$to}";
                    $mail->AddAddress($address, $name);
                    $mail->send();
                    echo '<h2>Thank You!</h2>';
                  }catch(Exception $e) {
                      echo "Mail cannot be sent: {$mail->ErrorInfo}";
                  }
                  
    }
      $to       =   $_POST['email'];
      $subject  =   'Welcome to fundd';
      $message  =   'This is a message to confirm that you have joined fundd.';
      $firstname     =   $_POST['firstname'];
      $mailsend =   sendmail1($to,$subject,$message,$firstname);


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
/* 
 if (!preg_match('/[a-zA-Z]+/',$_POST['firstname'])){
	$errorFirstName = "First name is invalid";
 } else {
	echo "first name ok";
 }
 if (!preg_match('/[a-zA-Z]+/',$_POST['lastname'])){
	$errorLastName = "Last name is invalid";
 } else {
	echo "last name ok";
 }
 if (!preg_match('/[a-zA-Z0-9_.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/',$_POST['email'])){
	$errorEmail = "email name is invalid";
 } else {
	echo "email ok";
 }
 if (!preg_match('/[0-9]{5}/',$_POST['zipcode'])){
	$errorZipCode = "Zip Code is invalid";
 } else {
	echo "zipcode ok";
 }
 if (!preg_match('/[a-zA-Z]+/',$_POST['city'])){
	$errorCity = "City is invalid";
 } else {
	echo "zipcode ok";
 }
 if (!preg_match('/^[0-9]+[ ][a-z. ]+$/',$_POST['address'])){
	$errorAddress = "Address is invalid";
 } else {
	echo "address ok";
 } */
 
 $sql1 = "INSERT INTO user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip, user_state, user_password) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[zipcode]','$_POST[State]', '$hash')";
 $testdupes = $myPDO->prepare("SELECT COUNT(*) from user_login where user_email = '$_POST[email]'");
 $testdupes->execute();
 $result = $testdupes->fetch(PDO::FETCH_ASSOC);
 //print_r($result);
 $answer = implode("|", $result);
 if($answer == 0) {
     echo "Thank you for signing up";
 }
 else {
     echo "That email address is already taken!";
 }
 //strcmp($result['user_first_name'], [string]);
//$result->stmt->fetchColumn();
 //$sql2 = "SELECT COUNT(*) from user_login where user_email = '$_POST[email]'";
 //$myPDO->query($sql2); 
 $myPDO->query($sql1);
 //echo "1 record added"; // Output to user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip) VALUES ('J', 'L', 'lop@virg.edu', '5201 street', 'Dirtville', '25022' )
$myPDO=null;


?>
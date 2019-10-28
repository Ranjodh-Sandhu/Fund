<?php
   


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
 
 $testdupes = $myPDO->prepare("SELECT COUNT(*) from user_login where user_email = '$_POST[email]'");
 $testdupes->execute();
 $result = $testdupes->fetch(PDO::FETCH_ASSOC);
 //print_r($result);
 $answer = implode("|", $result);
 if($answer == 0) {
     echo "1";
 }
 else {
     echo "0";
     exit();
 }
 //strcmp($result['user_first_name'], [string]);
//$result->stmt->fetchColumn();
 //$sql2 = "SELECT COUNT(*) from user_login where user_email = '$_POST[email]'";
 //$myPDO->query($sql2); 
 //echo "1 record added"; // Output to user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip) VALUES ('J', 'L', 'lop@virg.edu', '5201 street', 'Dirtville', '25022' )



?>
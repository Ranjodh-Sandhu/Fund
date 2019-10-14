<?php
 
// include_once("./library.php"); // To connect to the database
$dbhost = "ec2-174-129-210-249.compute-1.amazonaws.com";
$dbUser = "xlfqpddygnpwxc";
$dbpass = "b02909f3f17e94614fe4a4cf445cf2a85484ca8aafc9f5b1bbdb53b52509e420";
$dbname = "ddhp0guq8tbh5u";
try {

    $myPDO = new PDO("pgsql:host=$dbhost;dbname=$dbname", "$dbUser", "$dbpass");
    echo 'Connected';
 // Check connection
}catch(PDOException $e){
    echo $e->getMessage();
}

 $hashedPassword = hash('sha256', $password);

 if(isset($email)){
	$mysql_get_users = mysql_query("SELECT * FROM table_name where username='$email'");
	
	$get_rows = mysql_affected_rows($myPDO);

	if($get_rows >=1){
		$errorExists = "Email is taken";
		die();
	}
	else{
		echo "user do not exists";
	}
 }

 if (!preg_match('/[a-zA-Z]+',$firstname)){
	$errorFirstName = "First name is invalid";
 } else {
	echo "first name ok";
 }

 if (!preg_match('/[a-zA-Z]+',$lastname)){
	$errorLastName = "Last name is invalid";
 } else {
	echo "last name ok";
 }

 if (!preg_match('/[a-zA-Z0-9_.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+',$email)){
	$errorEmail = "email name is invalid";
 } else {
	echo "email ok";
 }

 if (!preg_match('/[0-9]{5}',$zipcode)){
	$errorZipCode = "Zip Code is invalid";
 } else {
	echo "zipcode ok";
 }

 if (!preg_match('/[a-zA-Z]+',$city)){
	$errorCity = "City is invalid";
 } else {
	echo "zipcode ok";
 }

 if (!preg_match('^[0-9]+[ ][a-z. ]+$',$address)){
	$errorAddress = "Address is invalid";;
 } else {
	echo "address ok";
 }

 $sql1 = "INSERT INTO user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[zipcode]')";
 $myPDO->query($sql1);

 echo "1 record added"; // Output to user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip) VALUES ('J', 'L', 'lop@virg.edu', '5201 street', 'Dirtville', '25022' )
$myPDO=null;
?>
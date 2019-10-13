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
 $sql1 = "INSERT INTO user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[zipcode]')";
 $myPDO->query($sql1);

 echo "1 record added"; // Output to user_login(user_first_name, user_last_name, user_email, user_address, user_city, user_zip) VALUES ('J', 'L', 'lop@virg.edu', '5201 street', 'Dirtville', '25022' )
$myPDO=null;
?>
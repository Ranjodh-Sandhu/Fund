<?php  
 session_start();  
 
$dbhost = "ec2-174-129-210-249.compute-1.amazonaws.com";
$dbUser = "xlfqpddygnpwxc";
$dbpass = "b02909f3f17e94614fe4a4cf445cf2a85484ca8aafc9f5b1bbdb53b52509e420";
$dbname = "ddhp0guq8tbh5u";
$username = $_POST['email'];
$password = $_POST['password'];

     try {

          $myPDO = new PDO("pgsql:host=$dbhost;dbname=$dbname", "$dbUser", "$dbpass");
          //echo 'Connected';
       // Check connection
      }catch(PDOException $e){
          echo $e->getMessage();
      }
     $query = $myPDO->prepare("SELECT user_password from user_login where user_email = '$_POST[email]'");  
     $query->execute();  
     $result = $query->fetch(PDO::FETCH_ASSOC);
     if($result) {
     $answer = implode("|", $result);
     //echo $answer;
     //echo $password;
     $answer = substr( $answer, 0, 60 );
     $query2 = $myPDO->prepare("SELECT user_first_name from user_login where user_email = '$_POST[email]'");  
     $query2->execute();  
     $result2 = $query2->fetch(PDO::FETCH_ASSOC);
     if($result2) {
          $result2 = implode("|", $result2);
    if (password_verify($password, $answer)) 
     {
          echo 'Password is valid!';
          $_SESSION["username"] = $_POST["email"];  
          $_SESSION["firstname"] = $result2;
          header("location:member_home.php"); 
     }
     else {
          $_SESSION['message'] = "Please enter a valid username or password";
          header("location:loginl.html");
     } 
}
     }
           
     

 ?>  
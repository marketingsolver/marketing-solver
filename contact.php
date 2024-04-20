<?php

// $conn = new mysqli('localhost', 'root', '', 'marketingsolver_contactdata');

// if(isset($_POST["submit"])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $number = $_POST['number'];
//     $message = $_POST['message'];

//     echo ('hello');
//      //Database connection
//      if($conn->connect_error) {
//      die('Connection Failed : ' .$conn->connect_error);
//      }else{
//      $stmt = $conn->prepare("insert into contacct_info ( name, number, email, message)
//      values(?, ?, ?, ?)");
//      $stmt->bind_param("siss",$name, $number, $email, $message);
//      $stmt->execute();
//      echo "message sent successfully...";
//      $stmt->close();
//      $conn->close();
//      }
// }

define('MAILHOST', "smtp.gmail.com");
define('USERNAME', "iankitrj.pic@gmail.com");
define('PASSWORD', "voxvrdwehcgqfaqi");
define('SEND_FROM', "iankitrj.pic@gmail.com");
define('SEND_FROM_NAME', "marketingsolver.in");

?>
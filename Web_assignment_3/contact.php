<?php
  
  $name = $_POST["name"];
  $mbl = $_POST["mobile"];
  $visitor_email = $_POST["email"];
  $msg = $_POST["message"];

  //create connection with database

  $connection = mysqli_connect("localhost","root","",
  "contact_information") or die("connection failed!");  
  $sql = "INSERT INTO user_info(name, Mobile, Email, Message) VALUES(
    '{$name}','{$mbl}','{$visitor_email}','{$msg}')";

   $result = mysqli_query($connection,$sql) or die("query failed ");

header("location: http://localhost/Web_assignment_3/contactform.php");

mysqli_close($connection);


?>
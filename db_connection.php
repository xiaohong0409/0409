<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dbhost="localhost";
      $dbuser="root";
      $dbpassword="386465721";
      $dbname="booking_system";
//connection
      $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
//check connection
if($conn->connect_error){
  die ("Connection failed: " . $conn->connect_error);
}
//create database
$sql ="CREATE DATABASE train";

if($conn->query ($sql) ===TRUE) {
echo "Database cteated successfully";
}  else{
    echo "Error: " .$sql ."<br>" . $conn->error;
  }

$conn->close();

   ?>
  </body>
</html>

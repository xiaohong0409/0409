<?php
$mysqli=new mysqli('localhost', 'root','386465721','booking_system') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
  $fname=$_POST['fname'];
    $lname=$_POST['lname'];
      $address=$_POST['address'];
        $email=$_POST['email'];
          $bookingnumber=$_POST['bookingnumber'];

          $mysqli->query("INSERT INTO passenger(fname,lname,address,email,bookingnumber) VALUES('$fname','$lname','$address','$email','$bookingnumber')")
          or die($mysqli->error);
}

 ?>

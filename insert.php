
<?php
$conn=mysqli_connect("localhost","root","386465721","booking_system");
if(!$conn){
  echo 'Not connected';
}
if(!mysqli_select_db($conn,'booking_system')){
  echo 'database not select';
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$email=$_POST['email'];
$bookingnumber=$_POST['bookingnumber'];
$sql="INSERT INTO passenger(fname,lname,address,email,bookingnumber) VALUES('$fname','$lname','$address','$email','$bookingnumber')";

if(mysqli_query($conn,$sql)){
echo "New record saved successfully";
}else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
mysqli_close($conn);


?>

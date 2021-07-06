<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googlrapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <div class="container-fluid">
      <h2>Add new data into database</h2>
   <form action=" " method="post">
      <fieldset>
        <p><lable for="fname">First Name</lable>
          <input type="text" id="fname" name="fname" maxlenght="20" size="20"/></p>

        <p><lable for="lname">Last Name</lable>
            <input type="text" id="lname" name="lname" maxlenght="20" size="20"/></p>

        <p><lable for="Address">Address</lable>
              <input type="text" id="address" name="address" maxlenght="40" size="40"/></p>

        <p><lable for="email">Email</lable>
                <input type="text" id="email" name="email" maxlenght="20" size="20"/></p>

        <p><lable for="Bookingnumber">Booking Number</lable>
                  <input type="text" id="Bookingnumber" name="Bookingnumber" maxlenght="20" size="20"/></p>
                </fieldset>

         <p><input type="submit" value="Add New Passenger"/></p>
              </form>
    <?php
      $dbhost="localhost";
      $dbuser="root";
      $dbpassword="386465721";
      $dbname="booking_system";

      $conn =new mysqli($dbhost, $dbuser, $dbpassword,$dbname);

if(isset($_POST['submit'])){

  if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['Bookingnumber'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $bookingnumber=$_POST['Bookingnumber'];

  $query="insert into booking_system(fname, lname, address, email, Bookingnumber)";

  $run=mysqli_query($conn, $query) or die(mysqli_error());

  if($run){
    echo"Form submitted successfully";
  }else{
    echo"form not submitted";
  }
  }
  else{
  echo "All fields required";
}}
     ?>
  </body>
</html>

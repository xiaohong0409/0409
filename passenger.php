<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

      <div class="container">
      <h3>Add new passenger into database</h3>
      <form action="insert.php" method="post">
        <div class="from-group">
        <label>First Name</lable>
        <input type="text" name="fname" class="form-control" value="">
        <div class="from-group">
        <lable>Last Name</lable>
        <input type="text" name="lname" class="form-control" value="">
        <div class="from-group">
        <lable>Address</lable>
        <input type="text" name="address" class="form-control" value="">
        <div class="from-group">
        <lable>Email</lable>
        <input type="tetx" name="email" class="form-control" value="">
        <div class="from-group">
        <lable>Booking Number</lable>
        <input type="text" name="bookingnumber" class="form-control" value="">
      </div>
      <div class="from-group">
        <button type="submit" class="btn btn-primary" name="save">Save</button>
      </div>
                </form>
    </div>
    </table>
    </div>
    <?php
    $conn=mysqli_connect("localhost","root","386465721","booking_system");
    $query="select * from passenger";
    $result=mysqli_query($conn,$query);
echo"
    <table>
    <thead><td>First Name</td><td>Last Name</td><td>Address</td><td>Email</td><td>Booking Number</td></thead>";

    while($row=mysqli_fetch_array($result)){
    //  echo"".$row['fname']." ".$row['lname']." ".$row['address']." ".$row['email']." ".$row['bookingnumber']."<br>";

      echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['address']."</td><td>".$row['email']."</td><td>".$row['bookingnumber']."</td></tr>";
    }
    ?>




  </body>
</html>

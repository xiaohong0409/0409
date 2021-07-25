
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

    <title>Bootstrap</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
      <div class="container">
<a href="#" class="navbar-brand">Booking System</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">

<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navmenu">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="home.php" class="nav-link">Home</a>
    </li>


    <li class="nav-item">
      <a href="https://www.google.com" class="nav-link">help</a>
    </li>
</div>
</div>
    </nav>
<include function.php>
  <div class="container">
  <h3>Add new value into database</h3>
  <form action="process.php" method="post">
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

        <?php

        $conn=mysqli_connect("localhost","root","386465721","booking_system");
        $query="select * from passenger";
        $result=mysqli_query($conn,$query);

        while($row=mysqli_fetch_array($result)){
          echo"".$row['fname']." ".$row['lname']." ".$row['address']." ".$row['email']." ".$row['bookingnumber']."<br>";
        }
        ?>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


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
      <a href="#home" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a href="#features" class="nav-link">Features</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">help</a>
    </li>
</div>
</div>
    </nav>
     <table class="table">
       <thead>
         <tr>
           <th scope="col">ID</th>
           <th scope="col">FirstName</<th>
           <th scope="col">LastName</th>
           <th scope="col">Address</th>
           <th scope="col">Email</th>
           <th scope="col">BookingNumber</th>
</tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>711 Nulla St. Mankato Mississippi</td>
    <td>mark@gmail.com</td>
    <td>0000001</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>John</td>
    <td>Johnson</td>
    <td>Bangkok</td>
    <td>john@gmail.com</td>
    <td>0000002</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Ally</td>
    <td>Aagaard</td>
    <td>Azusa New York 39521</td>
    <td>ally@gmail.com</td>
    <td>0000003</td>
  </tr>
  <tr>
    <th scope="row">4</th>
    <td>Lyla</td>
    <td>Abbatiello</td>
    <td>1655 Phetchaburi Rd</td>
    <td>lyla@gmail.com</td>
    <td>0000005</td>
  </tr>
  <tr>
    <th scope="row">5</th>
    <td>Jacob</td>
    <td>Abraham</td>
    <td>Sukhumvit 28</td>
    <td>jacob@gmail.com</td>
    <td>0000006</td>
  </tr>
  </tbody>
  </table>
<?php require_once 'process.php';?>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

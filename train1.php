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
    <?php require_once 'process.php';?>
      <div class="container">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">

<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navmenu">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="home.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a href="train1.php" class="nav-link">Train</a>
    </li>

    <li class="nav-item">
      <a href="https://www.google.com" class="nav-link">help</a>
    </li>
</div>
</div>
    </nav>
    <div id="booktkt">
    <h1 align="center" id="journeytext">Ticket booking page</h1><br/><br/>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">

  <div class="container">
  <form action="process.php" method="post">
    <div class="from-group">
    <label>From City</lable>
    <input type="text" name="fromcity" class="form-control" value="">
  </div>

    <div class="from-group">
    <lable>To City</lable>
    <input type="text" name="tocity" class="form-control" value="">
  </div>
    <div class="from-group">
    <lable for="start">Date</lable>
    <input type="date" name="start" class="form-control" value="2018-04-03" min="2000-01-01 max=2025-010">
  	</div>
    <div class="from-group">
      <button type="book" class="btn btn-primary" name="book">Book</button>
    </div>
</form>

<?php
print_r($_POST);
if(isset($_POST["fromcity"])){
  $fromcity=$_POST["fromcity"];
  $tocity=$_POST["tocity"];
  $date=$_POST["date"];

  $sql="insert into train(fromcity,tocity,date) values(?,?,?)";
  $sta=mysqli_prepare($conn,$sql);

  mysqli_stmt_bind_param($sta,'ssi',$fromcity,$tocity,$date);
  echo $conn->errno;
  //$sta->execute();
  echo $conn->errno;
  echo $sta;

}

//$conn->close();
?>
  </body>
</html>

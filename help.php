<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
    <div id="wrapper">
      <div id="top_header">
        <div id="logo">
          <hi><a href="<?php echo SITE_ADDR;?>">Search engine</a></h1>
      </div>
    </div>
      <div id="main" class="shadow-box"><idv id="comtent">
<center>
<form action="" method="GET" name="">
  <table>
    <tr>
      <td><input type="text" name="key" placeholder="Search for something" autocomplete="off"></td>
      <td><input type="submit" name="" value="Search"></td>
    </tr>
  </table>
</form>
</center>
<?php
if(isset($_GET['key']) && $_GET['key'] !=' '){

  $key=trim($_GET['key']);

  $query_string="SELECT *FROM search WHERE";
  $display_word=" ";

  $keywords=explode(' ',$key);

  foreach($keywords as $word){
    $query_string .="keywords like '%".$word."%' or";
  }
  $query_string=substr($query_string, 0, strlen($query_string) - 3);

  $mysqli=new mysqli('localhost', 'root','386465721','booking_system') or die(mysqli_error($mysqli));

  $query=mysqli_query($mysqli,$query_string);
  $result_count=mysqli_num_rows($query);

  if($result_count >0){
    echo'<div class="right"><b><u>'.$result_count.'</u></b> result found</div>';

  }else {
    echo 'No result found.';
  }


}else{
echo '';
}

 ?>


      </div></div>
  </body>
</html>

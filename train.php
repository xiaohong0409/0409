
<html>
<body style=" background-image: url(adminlogin.jpeg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">


<?php

$conn=mysqli_connect("localhost","root","386465721","booking_system");

$query="SELECT * FROM train";
$result=mysqli_query($conn,$query);
echo "
<table>
<thead><td>Train_no</td><td>Train_name</td><td>Starting_Point</td><td>Arrival_Time</td><td>Destination_Point</td><td>Departure_Time</td><td>Day</td><td>Distance</td><td></td></thead>
";

while ($row=mysqli_fetch_array($result))
{
	echo "
<tr><td>".$row['trainno']."</td><td>".$row['tname']."</td><td>".$row['sp']."</td><td>".$row['st']."</td><td>".$row['dp']."</td><td>".$row['dt']."</td><td>".$row['dd']."</td><td>".$row['distance']."";
}
echo "</table>";



?>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","QSTNS");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$res=mysqli_query($con, 'SELECT COUNT(*) FROM qstns');
$row = mysqli_fetch_array($res);

$sql="TRUNCATE TABLE QSTNS";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


header('Location: admin.html');

mysqli_close($con);
?>

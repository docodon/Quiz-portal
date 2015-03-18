<?php
$con=mysqli_connect("localhost","root","","QSTNS");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$qstn = mysqli_real_escape_string($con, $_POST['qstn']);
$opta = mysqli_real_escape_string($con, $_POST['opta']);
$optb= mysqli_real_escape_string($con, $_POST['optb']);
$optc= mysqli_real_escape_string($con, $_POST['optc']);
$optd= mysqli_real_escape_string($con, $_POST['optd']);
$optca= mysqli_real_escape_string($con, $_POST['c_a']);




$res=mysqli_query($con, 'SELECT COUNT(*) FROM qstns');
$row = mysqli_fetch_array($res);
//echo $row[0];

$sql="INSERT INTO QSTNS (qname,opta,optb,optc,optd,c_a,qid)
VALUES ('$qstn', '$opta', '$optb','$optc','$optd','$optca','$row[0]')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


header('Location: admin.html');

mysqli_close($con);
?>

<?php
session_start();
$conn=mysqli_connect("localhost","root","","qstns");
$u=$_POST['user'];
$p=$_POST['pass'];
$_SESSION['temp']=$p;
$_SESSION['temp1']=$u;
$result=mysqli_query($conn,"select pass from login where user = '$u' ");
$number= mysqli_num_rows($result);
if($number==0)
{
	header('Location: error.php');
}
while($row = mysqli_fetch_array($result))
	{
	
	if($p===$row['pass']){
	
	$_SESSION['login_user']=1;
	header('Location: admin.html');
	}
	else{
	header('Location:error.php');
	}
	}

?>

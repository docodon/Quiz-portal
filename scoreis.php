<html>
<?php
session_start();

$con=mysqli_connect("localhost","root","","qstns");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$res=mysqli_query($con, 'SELECT COUNT(*) FROM qstns');
$row = mysqli_fetch_array($res);

$scoreis=0;
//echo $row[0];


for ($i = 0; $i < $row[0]; $i++)
{
//echo $_SESSION['score'][$i] ;
    $scoreis=$scoreis + $_SESSION['score'][$i] ;   
}

$a=$_SESSION['i_am'];
$sql="UPDATE student SET scr='$scoreis' where rln ='$a'" ;

if($con->query($sql) ===TRUE)
;


mysqli_close($con);

?>
<body>

<style>
#header {
    background-color:#FFCC99;
    color:BLACK;
    text-align:center;
    padding:5px;
}
#nav {
    
    background-color:#CCFFFF;
    height:520px;
    width:250px;
    float:left;
    padding:5px; 
}
#section {
	background-color:#F0F0FF;
    width:1053px;
	height:510px;
    float:left;
    padding:10px; 
}
#footer {
    background-color:#FFCC99;
    color:BLACK;
    clear:both;
    text-align:center;
    padding:5px; 
}
</style>
<div id="header">
<h1>TESTbag</h1>
</div>
<div id="nav">
</div>
<div id="section"">
<center>
<font face="Segoe Script" size="5" color="blue">Your score is :  
<?php 
echo $scoreis 
?>
<br>
<br> 
</font>
</center>
</div>
<div id="footer">
<B>test for the BEST<B>
</div>
</body>
</html>



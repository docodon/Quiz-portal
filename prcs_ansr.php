<?php
session_start() ;

$con=mysqli_connect("localhost","root","","QSTNS");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res=mysqli_query($con, 'SELECT COUNT(*) FROM qstns');
$row = mysqli_fetch_array($res);

$dsply=$_SESSION['q_indx'][$_SESSION['cindx']] ;

$qstn = mysqli_query($con,"SELECT * FROM qstns where qid = '". $dsply ."'");

$qstn = $qstn->fetch_array(MYSQLI_ASSOC);

if($qstn['c_a']==$_POST['rply'])
{
$_SESSION['score'][$_SESSION['cindx']]=1;
}
else 
{
$_SESSION['score'][$_SESSION['cindx']]=0;
}

$_SESSION['attmpt'][$_SESSION['cindx']]=$_POST['rply'];
if(!$_POST['rply'])
$_SESSION['attmpt'][$_SESSION['cindx']]='none';



if (isset($_POST['previous'])) {
if($_SESSION['cindx']>0)
 $_SESSION['cindx']-=1;
}
if(isset($_POST['next']))
{
if($_SESSION['cindx']<$row[0]-1)
 $_SESSION['cindx']+=1;
}
if(isset($_POST['finish']))
{
header('Location: scoreis.php');
}
else
{
header('Location: quiz_start.php');
}
mysqli_close($con);
?>

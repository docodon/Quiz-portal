<?php
session_start();
//connection made
$con=mysqli_connect("localhost","root","","QSTNS");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user"])) 
  {
    $nameErr = "Name is required";
  } else 
  {
    $user = test_input($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$user)) 
	{
      $nameErr = "Only letters and white space allowed"; 
	  header('Location: index.html');
    }
	else
	header('Location: quiz_start.php');
  }

}




//-----------------two variables entered in datavbase------------
$user= mysqli_real_escape_string($con, $_POST['user']);
$user1= mysqli_real_escape_string($con, $_POST['user1']);

$sql="INSERT INTO student (name,rln,scr)VALUES ('$user','$user1','0')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


$res=mysqli_query($con, 'SELECT COUNT(*) FROM qstns');
$row = mysqli_fetch_array($res);
echo $row[0];

$size=$row[0] ;
$_SESSION['i_am']=$user1;
//creating an array of size equal to number of questions in DATABASE....

$q_indx = array();                 //question indexes without permutation 
$attmpt=array() ;                  //check if a question attempted or not
$score=array();                    //score per question initially empty    
$chko=array() ;
//a bit random n

$chk1=0;  $chk4=$size-1; $chk2=rand($chk1,$chk4) ; $chk3=rand($chk2,$chk4) ;



for ($i = 0; $i < $size; $i++)
{
    array_push($q_indx, $i);
    array_push($attmpt,'none');
    array_push($score,0);    
}

shuffle($q_indx);
/*for($i=$chk4;$i>=$chk3;$i--)
if($chko[$i]==-1)
{
array_push($q_indx,$i);
$chko[$i]=1;
}


for($i=$chk2;$i<=$chk3;$i++)
if($chko[$i]==-1)
{
array_push($q_indx,$i);
$chko[$i]=1;
}

for($i=$chk2;$i>=chk1;$i--)
if($chko[$i]==-1)
{
array_push($q_indx,$i);
$chko[$i]=1;
}


for($i=0;i<$size;$i++)
if($chko[i]==-1)
{
array_push($q_indx,$i);
$chko[$i]=1;

}
*/
$cindx=0;


$_SESSION['q_indx']=$q_indx;
$_SESSION['attmpt']=$attmpt;
$_SESSION['score']=$score;
$_SESSION['cindx']=$cindx;
$_SESSION['timer']=1200;
$_SESSION['time_starts']=time();


mysqli_close($con);
?>

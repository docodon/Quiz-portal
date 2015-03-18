<html>
<head>
<?php
session_start();

$time1=time()-$_SESSION['time_starts'] ;
//echo $time1 ; 
//session_close() ;

?>

<span id="countdown" class="timer"></span>
<script>
var seconds = 600-<?php echo $time1 ?>;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
   if (seconds <= 0) {
window.location="scoreis.php";    
clearInterval(countdownTimer);
	document.getElementById('countdown').innerHTML ="Buzz Buzz";
  } 
else {    
       seconds--;
if(seconds<=1)
 window.location="scoreis.php";
}
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
</head>






<?php
//session_start();

//$time1=time()-$_SESSION['time_starts'] ;
//echo $time1 ;
$con=mysqli_connect("localhost","root","","QSTNS");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$dsply=$_SESSION['q_indx'][$_SESSION['cindx']] ;


$crnta = $_SESSION['attmpt'][$_SESSION['cindx'] ];

$qstn = mysqli_query($con,"SELECT * FROM qstns where qid = '". $dsply ."'");

$qstn = $qstn->fetch_array(MYSQLI_ASSOC);

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
<font face="Segoe Script" size="5">
<p><font color="blue">your current response is : <?php echo $_SESSION['attmpt'][$_SESSION['cindx'] ]; ?><br></font><br/>

QUESTION:<?php echo $qstn['qname'] ."<br>"; ?>
<form action="prcs_ansr.php" method="post">

<?php if($crnta=='a') {?>
<input type="radio" name="rply" value="a" checked="checked"/><?php echo $qstn['opta'] ; ?><br /> <?php  } ?>

<?php if($crnta!='a') {?> 
<input type="radio" name="rply" value="a" /><?php echo $qstn['opta'] ; ?><br /> <?php } ?>

<?php if( $crnta =='b') {?> 
<input type="radio" name="rply" value="b" checked="checked"/><?php echo $qstn['optb']; ?> <br /> <?php   }  ?>

<?php if($crnta !='b' ) { ?>
<input type="radio" name="rply" value="b"/><?php echo $qstn['optb']; ?> <br />  <?php } ?>

<?php if($crnta=='c')  { ?>
<input type="radio" name="rply" value="c"  checked="checked"/><?php echo $qstn['optc']; ?><br /> <?php }  ?>
<?php if($crnta!='c') { ?> 
<input type="radio" name="rply" value="c" /><?php echo $qstn['optc']; ?><br /> <?php } ?>

<?php if($crnta=='d'){ ?>
<input type="radio" name="rply" value="d" checked="checked" /><?php echo $qstn['optd']; ?> <br/> <?php } ?>
<?php if($crnta!='d'){?>
<input type="radio" name="rply" value="d"  /><?php echo $qstn['optd']; ?> <br/> <?php  } ?>

<input type="submit" name="previous" value="previous">
<input type="submit" name="next" value="next">
<input type="submit" name="finish" value="finish"></center>
</form>
<p> your current choice will be your answer </p>
</font>
</div>
<div id="footer">
<B>test for the BEST<B>
</div>
</body>
</html>

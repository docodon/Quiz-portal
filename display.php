<!DOCTYPE html>
<html>
<head>
<style>
body {background-color:lightblue;}
</style>
</head>
<body>
<h1 style="text-align:center;">Students Record</h1>
<div>
<div id="box">

</div>
<?php


$conn=mysqli_connect("localhost","root","","QSTNS");

$result=mysqli_query($conn,"SELECT name,rln,scr FROM student");
while($info = mysqli_fetch_array($result))
  
 {
 print "<table border='10' width='700' align='center'>
<tr>
<th>NAME</th>
<th>ENROLLMENT NO</th>
<th>SCORE</th>
</tr> " ; 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['rln'] . "</td>";
  echo "<td>" . $row['scr'] . "</td>";
  echo "</tr>";
  
  }
  }

 ?>

<form action="admin.html" method="post">
<pre>
                                                                                                                                                   <input type="submit" value="BACK" >
</pre>
</form>

   
 
 

</body>
</html>

 

<body>

<style>
#header {
    background-color:#F0F0FF;
    color:BLACK;
    text-align:center;
    padding:5px;
}
#nav {
    
    background-color:#F0F0FF;
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
    background-color:#F0F0FF;
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
<left>
<font face="Segoe Script" size="4" color="blue">  
<?php 

$con=mysqli_connect("localhost","root","","qstns");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



if ($con) {

$SQL = "SELECT * FROM qstns";
$result = mysqli_query($con,$SQL);

while ( $db_field = mysqli_fetch_assoc($result) ) {

print $db_field['qid'] . ")  "  ;
print $db_field['qname'] . "<BR>";

}



mysqli_close($con);

}
else {

print "Database NOT Found ";
mysqli_close($con);

}

?>





<br>
<br> 
</font>
</left>
</div>
<div id="footer">
<B>test for the BEST<B>
</div>
<form action="admin.html" method="post">
<pre>
                                                                                                                                                   <input type="submit" value="BACK" >
</pre>
</form>

</body>

</html>





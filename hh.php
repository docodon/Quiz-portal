<html>
<span id="countdown" class="timer"></span>
<head>
<script>
var seconds = 1200;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>

</head>
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
<font face="Cataneo BT" color="red" size="5"><b><u>WELCOME</u></b><br><br>
Select the choice of quiz:<br><br>
<form action="">
<input type="radio" name="quiz" value="cplus">C/C++<br>
<input type="radio" name="quiz" value="java">JAVA<BR>
<input type="radio" name="quiz" value="html">HTML<BR><br>
NAME:<BR> <input type="text" name="name"><br>
ENROLLMENT NO: <BR><input type="text" name="ENO"><br>
  <input type="submit" value="Submit">
</form>
</font>
</div>

<div id="section"">
<center>
<font face="Segoe Script" size="5">
<b><u>Do's and dont's</u></b><br>

Marking scheme +1 and -0<br>

You are not supposed to press the back button after going to the next question<br>

After successfully completing the quiz close the browser without pressing back button & shutdown the machine.<br>

Your IP is being monitored so do not login again after giving the quiz<br> 

<font color="red">Once you leave a question you won't be able to answer it again so leave wisely.<br></font>

Quiz Timing:10:00PM to 11:30 PM<br>

Please restart your browser if opened before the starting time<br>

All the best for the quiz<br>

Organiser :<br>
Interface Developer : <br>
</font>
</center>
</div>

<div id="footer">
<B>test for the BEST<B>
</div>

</body>

</html>

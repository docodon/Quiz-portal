<html>

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
input:required:invalid, input:focus:invalid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
    background-position: right top;
    background-repeat: no-repeat;
    -moz-box-shadow: none;
  }
  input:required:valid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
    background-position: right top;
    background-repeat: no-repeat;
  }


</style>


<div id="header">
<h1>TESTbag</h1>
</div>

<div id="nav">
<font face="Cataneo BT" color="red" size="5"><b><u>WELCOME</u></b><br><br>
<p>Enter your details .. </p>
<form name="input" action="logedin.php" method="post">
NAME:<BR> <input type="text" name="user" 
<?php 
if(preg_match("/^[A-Z][a-zA-Z -]+$/",$_POST["name"]) === 0)
$errName='<p class="errText">Name must be from letters</p>'; ?>
required><br>
ENROLLMENT NO: <BR><input type="number" name="user1" required><br><br>
  <input type="submit" value="Submit">
  </form>
<form name= "login" action="loginauh.php" method="post">
<h4>ADMIN</h4>
<font color="green">
 Username :
 <input type="text" name="user" required><br>
 Password:
 <input type="password" name="pass" required><br> <br>
 <input type="submit" value="Submit">
  </font>
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
<br>
<B>test for the BEST<B>
</div>
</body>
</html>

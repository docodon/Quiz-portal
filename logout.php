<?php
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private"); 
//create or continue a session
session_start(); 
// Clear destroy the session
if(@$_SESSION["user"]){
$_SESSION["user"] = false;
$_SESSION["pass"] = false;
session_destroy();
}

//finally redirect the user to the start page

header("location:index.html?logout=1");

?>

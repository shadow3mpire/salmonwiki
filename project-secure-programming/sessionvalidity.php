<?php
require_once('authentication.php');
if($_SESSION['IP'] != $_SERVER['REMOTE_ADDR'] 
OR $_SESSION['Agent'] != $_SERVER['HTTP_USER_AGENT']
){
  session_destroy();
  header("Location:index.php");
 die();
 }
?>
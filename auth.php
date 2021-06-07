<?php
session_start();
if(!isset($_SESSION["regno"])){
header("location:dash_student.php?q=0");
exit(); }
else
{
	$regno=$_SESSION['regno'];
}
?>
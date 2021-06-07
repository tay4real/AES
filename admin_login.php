<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$regno = $_POST['admin_id'];
$password = $_POST['admin_pass'];

$regno = stripslashes($regno);
$regno = addslashes($regno);
$password = stripslashes($password); 
$password = addslashes($password);

$result = mysqli_query($con,"SELECT regno FROM admin WHERE regno = '$regno' and password = '$password'") or die('Cannot Proceed');
$count=mysqli_num_rows($result);
if($count==1){
	session_start();
	if(isset($_SESSION['regno'])){session_unset();}
	$_SESSION["name"] = 'Admin';
	$_SESSION["key"] ='sunny7785068889';
	$_SESSION["regno"] = $regno;
	header("location:dash_admin.php?q=0");
}
else 
{
$result = mysqli_query($con,"SELECT username FROM examiner WHERE username = '$regno' and password = '$password'") or die('Cannot Proceed');
$count=mysqli_num_rows($result);
if($count==1){
session_start();
if(isset($_SESSION['regno'])){session_unset();}
$_SESSION["name"] = 'Examiner';
$_SESSION["key"] ='sunny7785068889';
$_SESSION["regno"] = $regno;
header("location:dash_examiner.php?q=0");
}
else
{
	header("location:$ref?w=Warning : Access denied");
}
}

?>
<?php
include_once 'dbConnection.php';
session_start();
//$regno=$_SESSION['addregno'];



if(isset($_SESSION['key']))
{
	if(@$_GET['q']=='addregno' && $_SESSION['key']=='sunny7785068889' && $_POST['addregno'] != "")
	{
		$username = $_POST['addregno'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		//$ref=@$_GET['q'];
		$result = mysqli_query($con,"SELECT username FROM examiner WHERE username = '$username'") or die('Error in Connection');
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
		$errmsg="Username already EXIST";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_examiner.php?q=10';</script>";
		}
		else
		{
		$q3=mysqli_query($con,"INSERT INTO examiner VALUES  ('' , '$username', '$password', '$fullname')");
		$errmsg="Examiner credential successfully created";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_examiner.php';</script>";
		}
	}
	else
	{
	$errmsg="Enter login credential to be added";
	echo "<script type='text/javascript'>alert('$errmsg');
	window.location.href='dash_examiner.php?q=10';</script>";
	}
	//header('location:dash.php?q=6=$errmsg');
}

?>






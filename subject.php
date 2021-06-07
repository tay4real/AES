<?php
include_once 'dbConnection.php';
require_once 'library.php';
session_start();


if(isset($_SESSION['key']))
{
	if(@$_GET['q']=='addsubject' && $_SESSION['key']=='sunny7785068889' && $_POST['school_id'] != "" && $_POST['class_id'] != ""  )
	{
		$school_id = strtoupper(trim($_POST['school_id']));
		$class = strtoupper(trim($_POST['class_id']));
				
		
		$subjects=implode(";",$_POST["subjects"]);
		
		//$ref=@$_GET['q'];
		$result = mysqli_query($con,"SELECT * FROM subject WHERE school_id = '$school_id' AND class_id = '$class'") or die('Error in Connection');
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
		$errmsg="Subject(s) already Added";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=5';</script>";
		}
		else
		{
		$result1=mysqli_query($con,"INSERT INTO subject VALUES  ('','$school_id','$class','$subjects')");
		
		$errmsg="Subject(s) added successfully";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=6';</script>";
		}
	}
	else
	{
	$errmsg="Enter Subject details to be added";
	echo "<script type='text/javascript'>alert('$errmsg');
	window.location.href='dash_admin.php?q=5';</script>";
	}
	//header('location:dash.php?q=6=$errmsg');
}




	

?>
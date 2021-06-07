<?php
include_once 'dbConnection.php';
require_once 'library.php';
session_start();

// add student
if(isset($_SESSION['key']))
{
	if($_POST['name'] != "" && $_POST['mob'] != "")
	{
		$name = $_POST['name'];
		$name= ucwords(strtolower($name));
		$name = stripslashes($name);
		$name = addslashes($name);
	
		$mob = $_POST['mob'];
		$mob = stripslashes($mob);
		
		$result = mysqli_query($con,"SELECT * FROM examiner WHERE fullname = '$name' and mob = '$mob'") or die('Error in connection');
		$count=mysqli_num_rows($result);
		
		if($count == 1 )
		{
				$errmsg="Examiner already Registered. Contact the administrator for examiner login details.";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=7';</script>";
		}
		else
		{
			
			$name = $_POST['name'];
			$name= ucwords(strtolower($name));
			$name = stripslashes($name);
			$name = addslashes($name);
			
			$gender = $_POST['gender'];
			$gender = stripslashes($gender);
			$gender = addslashes($gender);
			
			$school_id = $_POST['school_id'];
			$school = stripslashes($school_id);
			$school = addslashes($school_id);
			
			$email = $_POST['email'];
			$email  = stripslashes($email );
			$email  = addslashes($email );
		
			$password = $_POST['password'];
			$password = stripslashes($password);
			$password = addslashes($password);
			$password = md5($password);
			
			$subjects=implode(";",$_POST["subjects"]);


			$ref=@$_GET['q'];


			// Examiner student
			$sql2=mysqli_query($con,"INSERT INTO examiner VALUES  ('','$username' ,'$name', '$gender' , '$school_id','$mob','$email' ,'$password', 'subjects')");
			
			
			$msg="CONGRATULATION! Examiner Registration Successful.";
					echo "<script type='text/javascript'>alert('$msg');
					window.location.href='dash_admin.php?q=7';</script>";
			
			
		}
	
	}
	else
	{
		$errmsg="Enter Examiner details to be added";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=7';</script>";
	}
}

	

?>
<?php
include_once 'dbConnection.php';
require_once 'library.php';
session_start();

// add student
if(isset($_SESSION['key']))
{
	if($_POST['name'] != "" && $_POST['dob'] != "")
	{
		$name = $_POST['name'];
		$name= ucwords(strtolower($name));
		$name = stripslashes($name);
		$name = addslashes($name);
		
		$username = $_POST['username'];
		$username= ucwords(strtolower($username));
		$username = stripslashes($username);
		$username = addslashes($username);
	
		$dob = $_POST['dob'];
		$dob = stripslashes($dob);
		
		$result = mysqli_query($con,"SELECT * FROM student WHERE name = '$name' and username = '$username' and dob = '$dob'") or die('Error in connection');
		$count=mysqli_num_rows($result);
		
		if($count == 1 )
		{
				$errmsg="Student already Registered. Contact the administrator for student login details.";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=3';</script>";
		}
		else
		{
			
			
			
			$res = getSchool($_POST['school_id']);

			while( $row = mysqli_fetch_array($res) ){
				$s = $row['school_code'];	
			}
			$year = date('y');
			
			$result = mysqli_query($con,"SELECT * FROM student") or die('Error');
			$count=mysqli_num_rows($result);
			
			// increment id by 1
			$id = (int)$count + 1;
			$regno = $s . "/" . $year . "/". $id;
			$regno = stripslashes($regno);
			
			$gender = $_POST['gender'];
			$gender = stripslashes($gender);
			$gender = addslashes($gender);
		
			$reg = $regno;
			$regno = stripslashes($reg);
			
			$school = $_POST['school_id'];
			$school = stripslashes($school);
			$school = addslashes($school);
			
			$c = $_POST['class_id'];
			$c  = stripslashes($c );
			$c  = addslashes($c );
		
			$mob = $_POST['mob'];
			$mob = stripslashes($mob);
			$mob = addslashes($mob);
			
			$password = $_POST['password'];
			$password = stripslashes($password);
			$password = addslashes($password);
			$password = md5($password);


			$ref=@$_GET['q'];


			// Register student
			$sql2=mysqli_query($con,"INSERT INTO student VALUES  ('','$name', '$username' ,'$dob', '$gender' , '$school','$c','$reg' ,'$mob', '$password')");
			
			
			$msg="CONGRATULATION! Student Registration Successful. Your Registration No is: $regno. Keep Safe.";
					echo "<script type='text/javascript'>alert('$msg');
					window.location.href='dash_admin.php?q=4';</script>";
			
			
		}
	
	}
	else
	{
		$errmsg="Enter Student details to be added";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=3';</script>";
	}
}

	

?>
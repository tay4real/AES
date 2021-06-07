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
		
		$username = $_POST['username'];
		$username= ucwords(strtolower($username));
		$username = stripslashes($username);
		$username = addslashes($username);
			
		$mob = $_POST['mob'];
		$mob = stripslashes($mob);
		$mob = addslashes($mob);
		
				
		$result = mysqli_query($con,"SELECT * FROM examiner WHERE fullname = '$name' and username = '$username' and mob = '$mob'") or die('Error in connection');
		$count=mysqli_num_rows($result);
		
		if($count == 1 )
		{
				$errmsg="Examiner already Registered. Contact the administrator for Examiner login details.";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=7';</script>";
		}
		else
		{
			
			$res = getSchool($_POST['school_id']);

			while( $row = mysqli_fetch_array($res) ){
				$s = strtolower($row['school_code']);	
			}
			
			
			$result = mysqli_query($con,"SELECT * FROM examiner") or die('Error');
			$count=mysqli_num_rows($result);
			
			// increment id by 1
			$id = (int)$count + 1;
			$examiner_id = "examiner/". $s . "/" . $id;
			$examiner_id = stripslashes($examiner_id);
			
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


			// Register Examiner
			$sql2=mysqli_query($con,"INSERT INTO examiner VALUES  ('','$examiner_id','$username' ,'$name', '$gender' , '$school_id','$mob','$email' ,'$password', '$subjects')");
			
			
			$msg="CONGRATULATION! Examiner Registration Successful. Your Examiner ID is: $examiner_id. Keep Safe.";
					echo "<script type='text/javascript'>alert('$msg');
					window.location.href='dash_admin.php?q=8';</script>";
			
			
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

<?php
session_start();
include_once 'dbConnection.php';
require_once 'library.php';


	if(isset($_SESSION['regno'])){
		$regno = $_SESSION['regno'];
	}
	$student = getStudent($regno);	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		function check_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		
	if(!isset($_POST['name']))
	{$name = $student["name"];}
	$name=check_input($_POST['name']);
	

	if(!isset($_POST['username']))
	{$username = $student["username"];}
	$username=check_input($_POST['username']);

	if(!isset($_POST['dob']))
	{$dob = $student["dob"];}
	$dob=check_input($_POST['dob']);
	
	if(!isset($_POST['gender']))
	{$gender = $student["gender"];}
	$gender=check_input($_POST['gender']);

	if(!isset($_POST['school_id']))
	{$school_id = $student["school_id"];}
	$school_id=check_input($_POST['school_id']);
	
	if(!isset($_POST['class_id']))
	{$class_id = $student["class_id"];}
	$class_id=check_input($_POST['class_id']);

	if(!isset($_POST['mob']))
	{$mob = $student["mob"];}
	$mob=check_input($_POST['mob']);



	
		 if(!get_magic_quotes_gpc())
		{
			$name = addslashes($name);
			$username = addslashes($username);
			$dob = addslashes($dob);	
			$gender = addslashes($gender);
			$school_id = addslashes($school_id);
			$class_id = addslashes($class_id);
			$mob = addslashes($mob);
			//$password = addslashes($password);
		} 
		
			//$cc = $row['class_id'];
			//$school_id = $row['school_id'];
		
			$getClass_ids = getClass_ids($class_id);
			while($row3=$getClass_ids->fetch_array()){
			$class_id = $row3['class'];
			}
			
			$getSchool = getSchool($school_id);
			while($row3=$getSchool->fetch_array()){
			$school_id = $row3['school_name'];
			}
		
		
		//$regno = $_SESSION['regno'];
    	$query = "update student set name = '$name', username = '$username', dob = '$dob', gender = '$gender', mob = '$mob' WHERE regno='$regno'";//change query according to you
    	
    
    	
			if(mysqli_query($con, $query) or die('Error, query failed')){
				
				
				
				
			$_SESSION['success_msg']= "Your profile has been successfully UPDATED!";
			header('Location: dash_student.php?q=1');
			}else{
			$_SESSION['err_msg']= "Update Failed";
			header('location:dash_student.php?q=0');
		}
		
}

	
?>
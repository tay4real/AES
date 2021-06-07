//add school
<?php
include_once 'dbConnection.php';
if(isset($_SESSION['key']))
{
	if(@$_GET['q']=='addschool' && $_SESSION['key']=='sunny7785068889' && $_POST['school_name'] != "" && $_POST['school_code'] != "" && $_POST['classes']!= ""  )
	{
		$school_name = strtoupper(trim($_POST['school_name']));
		$school_name = stripslashes($school_name);
		$school_name = addslashes($school_name);
		$school_code = strtoupper(trim($_POST['school_code']));
		$school_code = stripslashes($school_code);
		$school_code = addslashes($school_code);
		$classes=implode(";",$_POST["classes"]);
		
		//$ref=@$_GET['q'];
		$result = mysqli_query($con,"SELECT school_code FROM schools WHERE school_code = '$school_code'") or die('Error in Connection');
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
		$errmsg="School already EXIST";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=1';</script>";
		}
		else
		{
		$result1=mysqli_query($con,"INSERT INTO schools VALUES  ('','$school_code','$school_name')");
		
		$sql = "SELECT id FROM schools WHERE school_code= '$school_code'";

			$result = mysqli_query($con,$sql);
		
			while( $row = mysqli_fetch_array($result) ){
				$school_id = $row['id'];	
			}
		
		$result2=mysqli_query($con,"INSERT INTO classes VALUES  ('','$school_id','$classes')");
		$errmsg="School account successfully created";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=2';</script>";
		}
	}
	else
	{
	$errmsg="Enter School details to be added";
	echo "<script type='text/javascript'>alert('$errmsg');
	window.location.href='dash_admin.php?q=1';</script>";
	}
	//header('location:dash.php?q=6=$errmsg');
}
?>
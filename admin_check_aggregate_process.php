<?php
session_start();
include_once 'dbConnection.php';
$regno = $_POST["regno"];
//$examiner_id = $_SESSION["examiner_id"];
if (count($_POST) > 0)
{
	$result = mysqli_query($con, "SELECT * from obj_student_result WHERE regno='" . $regno . "'");
	$row = mysqli_fetch_array($result);
	
		if ($row > 0)
			{
				$err_msg = "Click OK to proceeds!";
					
					echo "<script type='text/javascript'>alert('$err_msg');
					window.location.href='dash_admin.php?q=36&r=$regno';</script>";
				//header("location:dash_examiner.php?q=5");
			}
		else
			{
	//$regno=@$_GET['r'];
		$result = mysqli_query($con, "SELECT * from theory_student_result WHERE regno='" . $regno . "'");
		$row = mysqli_fetch_array($result);
		//$exam_id= $row["exam_id"];
		
		
		if ($row > 0)
		{
			$err_msg = "Click Ok to proceeds!";
			
			echo "<script type='text/javascript'>alert('$err_msg');
			window.location.href='dash_admin.php?q=36&r=$regno';</script>";
			//header("location:dash_examiner.php?q=5");
		}
		else
		{
			$err_msg = "Invalid student registration number entered!. Contact the administrator!.";
			echo "<script type='text/javascript'>alert('$err_msg');
			window.location.href='dash_admin.php?q=35';</script>";
		}
	}
}
?>
 

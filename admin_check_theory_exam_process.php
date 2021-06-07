<?php
session_start();
include_once 'dbConnection.php';
$exam_id = md5($_POST["exam_code"]);
//$exam_id=@$_GET['e'];
//$examiner_id = $_SESSION["examiner_id"];
if (count($_POST) > 0)
{
	$result = mysqli_query($con, "SELECT * from theory_questions WHERE exam_id='" . $exam_id . "'");
	$row = mysqli_fetch_array($result);
	
	if ($row < 1)
		{
			$err_msg = "Wrong Exam Code Entered!. Contact the administrator!.";
			echo "<script type='text/javascript'>alert('$err_msg');
			window.location.href='dash_admin.php?q=32';</script>";
			//header("location:dash_examiner.php?q=5");
		}
	else
		{
	//$regno=@$_GET['r'];
    $result = mysqli_query($con, "SELECT * from theory_exam_submitted WHERE exam_id='" . $exam_id . "'");
	$row = mysqli_fetch_array($result);
	//$exam_id= $row["exam_id"];
	
	
	if ($row < 1)
	{
		$err_msg = "No student have done this exam!.";
		echo "<script type='text/javascript'>alert('$err_msg');
		window.location.href='dash_admin.php?q=32';</script>";
        //header("location:dash_examiner.php?q=5");
	}
	else
	{
		$err_msg = "Click Ok to proceeds!";
		
		echo "<script type='text/javascript'>alert('$err_msg');
		window.location.href='dash_admin.php?q=26&e=$exam_id';</script>";
	}
}
}
?>
 

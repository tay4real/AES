<?php
session_start();
include_once 'dbConnection.php';
$exam_code = md5($_POST["exam_code"]);
$regno = $_SESSION["regno"];
if (count($_POST) > 0)
{
	//$regno=@$_GET['r'];
    $result = mysqli_query($con, "SELECT * from theory_exam WHERE exam_id='" . $exam_code . "'");
	$row = mysqli_fetch_array($result);
	$exam_id= $row["exam_id"];
	
	
	if ($row < 1)
	{
		$err_msg = "You do not have the require credential(s) to write this exam!. Contact the administrator!.";
		echo "<script type='text/javascript'>alert('$err_msg');
		window.location.href='dash_student.php?q=14';</script>";
	}
	else
	{
		$query = mysqli_query($con, "select * from theory_exam_submitted where exam_id = '$exam_id' AND regno = '$regno'");
		$query_db = mysqli_fetch_array($query);
		if($query_db > 0)
		{
			$err_msg = "Excuse me! you have already done this exam.";
			echo "<script type='text/javascript'>alert('$err_msg');
			window.location.href='dash_student.php?q=14';</script>";
		}
		else
		{
			header("location:dash_student.php?q=16&e=$exam_code");
		}
    } 
	
}
?>
 

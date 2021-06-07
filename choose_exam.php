<?php
include_once 'dbConnection.php';
include_once 'library.php';
session_start();

if(isset($_SESSION["account_type"]))
{
	if (@$_GET['q']=='exam_choice')
	{			
		if(@validate($_POST['Exam_Category']) && ($_SESSION["account_type"] == 'Examiner' || $_SESSION["account_type"] == 'Admin')     )
		{
		$category = $_POST['Exam_Category'];
			if($category == "theory")
			{
				if($_SESSION["account_type"] == 'Admin'){
					header("location:dash_admin.php?q=21");
				}
				else if($_SESSION["account_type"] == 'Examiner')
				{
					header("location:dash_examiner.php?q=14");
				}
			}
			else if($category == "objective")
			{
				if($_SESSION["account_type"] == 'Admin')
				{
					header("location:dash_admin.php?q=15");
				}
				else if($_SESSION["account_type"] == 'Examiner')
				{
					header("location:dash_examiner.php?q=15");
				}
			}		
		}
		else
		{
			
			$errmsg="Choose an Exam Category";
			if($_SESSION["account_type"] == 'Admin'){
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=9';</script>";
			}else if($_SESSION["account_type"] == 'Examiner'){
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_examiner.php?q=3';</script>";
			}
		
			
		}
	}
	
	else if (@$_GET['q']=='view_question'){			
		if(@validate($_POST['Exam_Category']) && ($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') )
		{
			
			$category = $_POST['Exam_Category'];
			
			if($category == "theory"){
				if($_SESSION["account_type"] == 'Admin'){
					header("location:dash_admin.php?q=32");
				}else if($_SESSION["account_type"] == 'Examiner'){
					header("location:dash_examiner.php?q=18");
				}
			}else if($category == "objective"){
				if($_SESSION["account_type"] == 'Admin'){
					header("location:dash_admin.php?q=31");
				}else if($_SESSION["account_type"] == 'Examiner'){
					header("location:dash_examiner.php?q=28");
				}
			}		
		}
		else
		{
			$errmsg="Choose an Exam Category";
			if($_SESSION["account_type"] == 'Admin'){
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=10';</script>";
			}else if($_SESSION["account_type"] == 'Examiner'){
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_examiner.php?q=4';</script>";
			}

		}
	}
	
	//Set OBJECTIVE Question by Admin/Examiner
	else if (@$_GET['q']=='obj_exam')
	{			
		if(($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') && @validate($_POST[total_questions]) &&  @validate($_POST["time_limit"]) && @validate($_POST["exam_instructions"]) )
		{
			$school_id = formatString($_POST["school_id"]);
			$class_id = formatString($_POST["class_id"]);
			$subject_id = formatString($_POST["subj_id"]);
			
			$getSubject_ids = getSubject_ids($subject_id);
			while($r=$getSubject_ids->fetch_array())
			{
				$subject_id = $r['id'];
			}
			$obj = '1';
			$exam_id = formatString(md5($school_id."/".$class_id."/".$subject_id."/".$obj));
			
					
			$no_of_questions = formatString($_POST["total_questions"]);
			$exam_time = formatString($_POST["time_limit"]);
			$exam_instructions = formatString($_POST["exam_instructions"]);
			if($_SESSION["account_type"] == 'Admin')
			{
				$examiner_id = formatString($_SESSION["admin_user"]);
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
				$examiner_id = formatString($_SESSION["examiner_id"]);
			}
			$result = mysqli_query($con,"SELECT * FROM obj_exam WHERE exam_id = '$exam_id'") or die('Error in connection');
			$count=mysqli_num_rows($result);
			if($count == 1 )
			{
				// Check if Question Already Set
				$errmsg="Exam Questions already exist. View set Questions to edit";
				if($_SESSION["account_type"] == 'Admin')
				{
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_admin.php?q=31';</script>";
				}
				else if($_SESSION["account_type"] == 'Examiner')
				{
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_examiner.php?q=10';</script>";
				}
			}
			else
			{
				$_SESSION['exam_id'] = $exam_id;
				$_SESSION['school_id'] = $school_id;
				$_SESSION['class_id'] = $class_id;
				$_SESSION['subject_id'] = $subject_id;
				$_SESSION['no_of_questions'] = $no_of_questions;
				$_SESSION['exam_time'] = $exam_time;
				$_SESSION['exam_instructions'] = $exam_instructions;				
				$_SESSION['examiner_id'] = $examiner_id;
				
				// Set Question
				//$sql2=mysqli_query($con,"INSERT INTO  obj_exam VALUES  ('','$exam_id' ,'$school_id', '$class_id' , '$subject_id', '$no_of_questions' ,'$exam_time', '$exam_instructions')");
				//$sql3=mysqli_query($con,"INSERT INTO  obj_exam_audit VALUES  ('','$examiner_id' ,'$exam_id', '$subject_id','$no_of_questions', 'Set Exam',NOW())");
				
				//header("location:dash_admin.php?q=15");
				if($_SESSION["account_type"] == 'Admin')
				{					
					header("location:dash_admin.php?q=16&step=2&eid=$exam_id&n=$no_of_questions");
				}
				else if($_SESSION["account_type"] == 'Examiner')
				{
					header("location:dash_examiner.php?q=16&step=2&eid=$exam_id&n=$no_of_questions");
				}
			}
			$action_performed = formatString($str);
			$date_performed = formatString($str);			
		}
		else
		{
			if($_SESSION["account_type"] == 'Admin')
			{
				$errmsg="Please fill all neccessary fields";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=15';</script>";
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
					$errmsg="Please fill all neccessary fields";
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_examiner.php?q=15';</script>";
			}
		}
	}
	//Set THEORY Question by Admin/Examiner
	else if (@$_GET['q']=='theory_exam')
	{			
		if(($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') && @validate($_POST[total_questions]) &&  @validate($_POST["time_limit"]) && @validate($_POST["exam_instructions"]) )
		{
			$school_id = formatString($_POST["school_id"]);
			$class_id = formatString($_POST["class_id"]);
			$subject_id = formatString($_POST["subj_id"]);
			$_SESSION['subject'] = $subject_id;
			
			$getSubject_ids = getSubject_ids($subject_id);
			while($r=$getSubject_ids->fetch_array())
			{
				$subject_id = $r['id'];
			}
			$theory = '2';
			$exam_id = formatString(md5($school_id."/".$class_id."/".$subject_id."/".$theory));
			$no_of_questions = formatString($_POST["total_questions"]);
			$exam_time = formatString($_POST["time_limit"]);
			$exam_instructions = formatString($_POST["exam_instructions"]);
			if($_SESSION["account_type"] == 'Admin')
			{
				$examiner_id = formatString($_SESSION["admin_user"]);
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
				$examiner_id = formatString($_SESSION["examiner_id"]);
			}
			$result = mysqli_query($con,"SELECT * FROM theory_exam WHERE exam_id = '$exam_id'") or die('Error in connection');
			$count=mysqli_num_rows($result);
			if($count == 1)
			{
				$errmsg="Exam Questions already exist. View set Questions to edit";
				if($_SESSION["account_type"] == 'Admin')
				{
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_admin.php?q=32';</script>";
				}
				else if($_SESSION["account_type"] == 'Examiner')
				{
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_examiner.php?q=18';</script>";
				}
			}
			else
			{
				$_SESSION['exam_id'] = $exam_id;
				$_SESSION['school_id'] = $school_id;
				$_SESSION['class_id'] = $class_id;
				$_SESSION['subject_id'] = $subject_id;
				$_SESSION['no_of_questions'] = $no_of_questions;
				$_SESSION['exam_time'] = $exam_time;
				$_SESSION['exam_instructions'] = $exam_instructions;				
				$_SESSION['examiner_id'] = $examiner_id;
				//Set Question
				//$sql2=mysqli_query($con,"INSERT INTO theory_exam VALUES  ('','$exam_id', '$school_id', '$class_id', '$subject_id','$no_of_questions', '$exam_time', '$exam_instructions')");
				//$sql3=mysqli_query($con,"INSERT INTO theory_exam_audit VALUES  ('','$examiner_id' ,'$exam_id', '$subject_id','$no_of_questions', 'Set Exam', NOW())");
				//header("location:dash_admin.php?q=21");
				if($_SESSION["account_type"] == 'Admin')
				{					
					header("location:dash_admin.php?q=22&step=2&eid=$exam_id&n=$no_of_questions");
				}
				else if($_SESSION["account_type"] == 'Examiner')
				{
					header("location:dash_examiner.php?q=22&step=2&eid=$exam_id&n=$no_of_questions");
				}
			}
			$action_performed = formatString($str);
			$date_performed = formatString($str);			
		}
		else
		{
			if($_SESSION["account_type"] == 'Admin')
			{
				$errmsg="Please fill all neccessary fields";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=21';</script>";
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
					$errmsg="Please fill all neccessary fields";
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_examiner.php?q=14';</script>";
			}
		}
		
	}
}
?>
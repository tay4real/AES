<?php
include_once 'dbConnection.php';
include_once 'library.php';
session_start();

//Add Theory Score

if(isset($_SESSION["account_type"]))
{
	if(@$_GET['q']== 'addtheoryans' && $_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') 
	{
		
		$examiner_id=@$_GET['examiner_id'];
		$name=@$_GET['name'];
		$subject_id = @$_GET['subject_id'];
		$class_id = @$_GET['class_id'];
		
		$exam_id=@$_GET['eid'];
		$n=@$_GET['n'];
		$regno=@$_GET['regno'];
		
		$result10 = mysqli_query($con, "select exam_id, SUM(mark) AS Total FROM theory_questions where exam_id = '$exam_id'");
		$row10 = mysqli_fetch_array($result10);
		$Tot=$row10["Total"];
		
		
		$qid = $_SESSION["qid"];//Array of questions id
		
		$total_score = '0';
		
		
		//$score=$_POST['sco'.$i];
		$i='1';
		$flag = '0';
		for($i=1;$i<=$n;$i++)
		{
			foreach ($qid[$i - 1] as $qes_id)
			{
			$result11 = mysqli_query($con, "select mark FROM theory_questions where question_id = '$qes_id'");
			$row11 = mysqli_fetch_array($result11);
			$mark_assigned=$row11["mark"];
				
			$score=$_POST['sco'.$i];
			
			
				if ($score <= $mark_assigned)
				{	
					
					$flag= $i - 1;	//0,1
					$c=mysqli_query($con,"UPDATE theory_exam_submitted SET score = '$score', status = 'Graded' WHERE regno = '$regno' AND question_id = '$qes_id'");
				}
				
						
			
			}
			
				$total_score = $total_score + $score;
 		}
		
		$check_flag = $flag + 1;
		
		if ($check_flag == $n)
		{
			
			$scorepercent = (($total_score/$Tot) * 100);
			//$t_score = $total_score."|".$Tot;
			$t_score = $scorepercent."%";
			
				if ($scorepercent >= '70')
				{$grade="A";}
				else if ($scorepercent >= '60')
				{$grade="B";}
				else if ($scorepercent >= '50')
				{$grade="C";}
				else if ($scorepercent >= '45')
				{$grade="D";}
				else if ($scorepercent >= '40')
				{$grade="E";}
				else 
				{$grade="F";}
				
			$t_score = round($t_score,0);	
			$q3=mysqli_query($con,"UPDATE theory_student_result SET score = '$t_score', grade = '$grade' WHERE regno = '$regno'");
			$score = $t_score * 0.6;
			$exam_type = '2';
			
			$re = mysqli_query($con, "select * from result_aggregate where regno = '$regno' AND exam_id = '$exam_id' AND exam_type = '$exam_type'");
			$r4 = mysqli_fetch_array($re);
			if ($r4 == 0)
			{
$sql3=mysqli_query($con,"INSERT INTO result_aggregate VALUES ('','$exam_id','$regno','$class_id','$subject_id','$score','2')");
			}
			else
			{
				$q=mysqli_query($con,"UPDATE result_aggregate SET score = '$score' WHERE regno = '$regno' AND exam_id = '$exam_id' AND exam_type = '$exam_type'");
			}
		
			
			
			$errmsg="Score successfully added";
			if($_SESSION["account_type"] == 'Admin')
			{
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=25';</script>";
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_examiner.php?q=18';</script>";
			}
		}
		else
		{
			$errmsg="Score entered is out of range of assigned mark.";		
			if($_SESSION["account_type"] == 'Admin')
			{
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=25';</script>";
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_examiner.php?q=18';</script>";
			}
			
		}
	}
}




<?php
//add question
session_start();
include_once 'dbConnection.php';
require_once 'library.php';

if(isset($_SESSION["account_type"]) && isset($_SESSION["regno"])){
	if(@$_GET['q']== 'addans')
{
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		$ch=@$_GET['ch'];
		$regno = $_SESSION["regno"];
		$class_id = $_SESSION["class_id"];
		$subject_id = $_SESSION["subject_id"];
		
		$qid = $_SESSION["qid"];
		$ans = $_SESSION["oid"];
		
		//echo $qid;
		for($i=1;$i<=$n;$i++)
		{
			
			foreach ($qid[$i - 1] as $qes_id)
				{	}
				
			if(@validate($_POST['ans'.$i]))	{	
				
				$send_options=formatString($_POST['ans'.$i]);
				$get_send_option=get_send_option($send_options);
					
					$ansid = $get_send_option['option_id'];
								
			}else{
				$send_options='';
				$ansid = '';
			}
			$get_correct_option=get_correct_option($qes_id,$eid);
			while($row3=$get_correct_option->fetch_array()){
				$correct_answer_id = $row3['answer_id'];
			}		
			if ($ansid == $correct_answer_id)
				{
					$result = "correct";
				}
			else
				{
					$result  = "wrong";
				}
			$qans=mysqli_query($con,"INSERT INTO obj_exam_submitted VALUES('','$eid','$qes_id','$send_options','$ansid','$correct_answer_id','$regno','$subject_id','$class_id','$n','$result')");	
		
		}
		
		if(isset($_SESSION['regno']))
		{
			session_destroy();
		}

			$errmsg="You have successfully completed your exam and all your answers have been submitted for grading.";
			echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='logout.php?q=account.php';</script>";
	}
}

?>
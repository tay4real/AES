<?php
include_once 'dbConnection.php';
include_once 'library.php';
session_start();

//add theory question
if(isset($_SESSION["account_type"])){
	if(@$_GET['q']== 'addqnstheory' && $_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') {
		
		
		$exam_id = $_SESSION['exam_id'] ;
		$school_id = $_SESSION['school_id'];
		$class_id = $_SESSION['class_id'];
		$subject_id = $_SESSION['subject_id'];
		$no_of_questions = $_SESSION['no_of_questions'];
		$exam_time = $_SESSION['exam_time'];
		$exam_instructions = $_SESSION['exam_instructions'];				
		$examiner_id = $_SESSION['examiner_id'];
				
		
		
		
		
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		$ch=@$_GET['ch'];
		
		
		for($i=1;$i<=$n;$i++)
		{
			
			$qid=uniqid();
 			$qns=formatString($_POST['qns'.$i]);
			$qnsimg = "";
			$m_ans=formatString($_POST['m_ans'.$i]);
			$m_ansimg = "";
			$mark = formatString($_POST['mark'.$i]);
			if(@validate($_FILES['qnsimg'.$i]["name"])){
			$filename = $qid. '.jpg';
    		$uploadDir = 'question_img/';
			$savedPicture = $uploadDir . $filename;
			$qnsimg = './'. $savedPicture;
			$target_file = $uploadDir . basename($_FILES['qnsimg'.$i]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			
				if (move_uploaded_file($_FILES['qnsimg'.$i]["tmp_name"], $savedPicture)) {
					
				} else {
					$err_msg = "Sorry, there was an error uploading your file.";
					
					
					if($_SESSION["account_type"] == 'Admin')
					{
						echo "<script type='text/javascript'>alert('$err_msg');
						window.location.href='dash_admin.php?q=22';</script>";
					}
					else if($_SESSION["account_type"] == 'Examiner')
					{
						echo "<script type='text/javascript'>alert('$err_msg');
					window.location.href='dash_examiner.php?q=22';</script>";
					}
					
					
					
					
				}
			}
			if(@validate($_FILES['m_ansimg'.$i]["name"])){
			$filename = $qid. '.jpg';
    		$uploadDir = 'answer_img/';
			$savedPicture = $uploadDir . $filename;
			$m_ansimg = './'. $savedPicture;
			$target_file = $uploadDir . basename($_FILES['m_ansimg'.$i]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			
				if (move_uploaded_file($_FILES['m_ansimg'.$i]["tmp_name"], $savedPicture)) {
					
				} else {
					$err_msg = "Sorry, there was an error uploading your file.";
					if($_SESSION["account_type"] == 'Admin')
					{
						echo "<script type='text/javascript'>alert('$err_msg');
						window.location.href='dash_admin.php?q=22';</script>";
					}
					else if($_SESSION["account_type"] == 'Examiner')
					{
						echo "<script type='text/javascript'>alert('$err_msg');
					window.location.href='dash_examiner.php?q=22';</script>";
					}
				}
			}
			$q3=mysqli_query($con,"INSERT INTO theory_questions VALUES  ('', '$eid', '$qid', '$qns', '$qnsimg', '$m_ans', '$m_ansimg', '$mark')");
			$r= mysqli_query($con, "select * from theory_exam where exam_id = '$exam_id'");
			$r = mysqli_fetch_array($r);
				
			if ($r == 0)
			{
				//Set Question
		$sql2=mysqli_query($con,"INSERT INTO theory_exam VALUES  ('','$exam_id', '$school_id', '$class_id', '$subject_id','$no_of_questions', '$exam_time', '$exam_instructions')");
		$sql3=mysqli_query($con,"INSERT INTO theory_exam_audit VALUES  ('','$examiner_id' ,'$exam_id', '$subject_id','$no_of_questions', 'Set Exam', NOW())");
			}		
		
				
 		}
		if($q3){
		$errmsg="Questions has been successfully added.";
		}else{
			$errmsg="Questions not successfully added.";
		}
		
		if($_SESSION["account_type"] == 'Admin'){
			// unset sessions
			unset($_SESSION['exam_id']) ;
			unset($_SESSION['school_id']);
			unset($_SESSION['class_id']);
			unset($_SESSION['subject_id']);
			unset($_SESSION['no_of_questions']);
			unset($_SESSION['exam_time']);
			unset($_SESSION['exam_instructions']);				
			unset($_SESSION['examiner_id']);
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_admin.php?q=9';</script>";
		}else if($_SESSION["account_type"] == 'Examiner'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_examiner.php?q=3';</script>";
		}
	}
}


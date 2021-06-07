<?php
//add question
session_start();
include_once 'dbConnection.php';
require_once 'library.php';

if(isset($_SESSION["account_type"]) && isset($_SESSION["regno"]))
{
	if(@$_GET['q']== 'addtheoryans')
{
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		$ch=@$_GET['ch'];
		$regno = $_SESSION["regno"];
		$class_id = $_SESSION["class_id"];
		$subject_id = $_SESSION["subject_id"];
		
		$qid = $_SESSION["qid"];
		//$ans = $_SESSION["oid"];
		
		//echo $qid;
		for($i=1;$i<=$n;$i++)
		{
			
			foreach ($qid[$i - 1] as $q_id)
				{ $qes_id = $q_id;	}
				
			if(@validate($_POST['s_ans'.$i]))
			{			
				$s_ans=$_POST['s_ans'.$i];
				
			}
			else
			{
				$s_ans="";
				
			}
				
			if(@validate($_FILES['s_ansimg'.$i]["name"])){
			$filename = $q_id. '.jpg';
    		$uploadDir = 'student_ans_img/';
			$savedPicture = $uploadDir . $filename;
			$s_ansimg = './'. $savedPicture;
			$target_file = $uploadDir . basename($_FILES['s_ansimg'.$i]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			
				if (move_uploaded_file($_FILES['s_ansimg'.$i]["tmp_name"], $savedPicture)) {
					
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
				
			
			$qans=mysqli_query($con,"INSERT INTO theory_exam_submitted VALUES('','$eid','$qes_id', '$regno', '$subject_id','$class_id','$s_ans','$s_ansimg','','Ungraded')");	
		
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
}

?>
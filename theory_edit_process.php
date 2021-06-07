<?php
include_once 'dbConnection.php';
include_once 'library.php';
session_start();

//edit theory question

if(isset($_SESSION["account_type"]))
{
	if(@$_GET['q']== 'edit_theory_qns' && $_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') 
	{
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		//$ch=@$_GET['ch'];
		$qid = $_SESSION["qid"];//Array of questions id
		$qnsimg = $_SESSION["qnsimg"];
		$m_ansimg = $_SESSION["m_ansimg"];
		//echo $_SESSION["account_type"];
		for($i=1;$i<=$n;$i++)
		{
			foreach ($qid[$i - 1] as $qes_id)
			{
				$qns=$_POST['qns'.$i];
				$m_ans=$_POST['m_ans'.$i];
				$mark=$_POST['mark'.$i];
				
				if(@validate($_FILES['qnsimg'.$i]["name"]))
				{
					$filename = $qes_id. '.jpg';
					$uploadDir = 'question_img/';
					$savedPicture = $uploadDir . $filename;
					$qnsimg = './'. $savedPicture;
					$target_file = $uploadDir . basename($_FILES['qnsimg'.$i]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					move_uploaded_file($_FILES['qnsimg'.$i]["tmp_name"], $savedPicture);
					
					$q3=mysqli_query($con,"UPDATE theory_questions SET question_imagepath = '$qnsimg' WHERE question_id = '$qes_id'");
				}
				if(@validate($_FILES['m_ansimg'.$i]["name"]))
				{
					$filename = $qes_id. '.jpg';
					$uploadDir = 'answer_img/';
					$savedPicture = $uploadDir . $filename;
					$m_ansimg = './'. $savedPicture;
					$target_file = $uploadDir . basename($_FILES['m_ansimg'.$i]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					move_uploaded_file($_FILES['m_ansimg'.$i]["tmp_name"], $savedPicture);
					$q3=mysqli_query($con,"UPDATE theory_questions SET answer_imagepath = '$m_ansimg' WHERE question_id = '$qes_id'");
				}
				
				$q3=mysqli_query($con,"UPDATE theory_questions SET question = '$qns', answer = '$m_ans', mark = '$mark' WHERE question_id = '$qes_id'");
			}
			
 		}
		
			
			if($_SESSION["account_type"] == 'Examiner')
			{
				$errmsg="Questions has been successfully updated examiner.";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_examiner.php?q=18';</script>";
			}
	}
}

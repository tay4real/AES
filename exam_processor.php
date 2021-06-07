<?php
include_once 'dbConnection.php';
include_once 'library.php';
session_start();


//add obj question
if(isset($_SESSION["account_type"])){
	if(@$_GET['q']== 'addqns' && ($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner')) {
		
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
					echo "<script type='text/javascript'>alert('$err_msg');
					window.location.href='dash_admin.php?q=16';</script>";
				}
			}
			$q3=mysqli_query($con,"INSERT INTO obj_questions VALUES  ('', '$qid', '$eid', '$qns','$qnsimg', '$ch' , '$i')");
			
			$res= mysqli_query($con, "select * from obj_exam where exam_id = '$eid'");
			$r4 = mysqli_fetch_array($res);
				
			if ($r4 == 0)
			{
				//Set Question
		$sql2=mysqli_query($con,"INSERT INTO  obj_exam VALUES  ('','$exam_id' ,'$school_id', '$class_id' , '$subject_id', '$no_of_questions' ,'$exam_time', '$exam_instructions')");
		$sql3=mysqli_query($con,"INSERT INTO  obj_exam_audit VALUES  ('','$examiner_id' ,'$exam_id', '$subject_id','$no_of_questions', 'Set Exam',NOW())");	
			}
  			$oaid=uniqid();
  			$obid=uniqid();
			$ocid=uniqid();
			$odid=uniqid();
			$a=formatString($_POST[$i.'1']);
			$b=formatString($_POST[$i.'2']);
			$c=formatString($_POST[$i.'3']);
			$d=formatString($_POST[$i.'4']);
			$qa=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$eid','$qid','$a','$oaid')") or die('Error61');
			$qb=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$eid','$qid','$b','$obid')") or die('Error62');
			$qc=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$eid','$qid','$c','$ocid')") or die('Error63');
			$qd=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$eid','$qid','$d','$odid')") or die('Error64');
			$e=formatString($_POST['ans'.$i]);
			switch($e)
			{
				case 'a':
					$ansid=$oaid;
					break;
				case 'b':
					$ansid=$obid;
					break;
				case 'c':
					$ansid=$ocid;
					break;
				case 'd':
					$ansid=$odid;
					break;
				default:
					$ansid=$oaid;
			}

			$qans=mysqli_query($con,"INSERT INTO obj_answer VALUES  ('','$eid','$qid','$ansid')");	
			
 		}
		if($qans){
				$errmsg="Questions has been successfully added.";
			}else{
			$errmsg="Questions not successfully added.";		
		}
		
		
		
		if($_SESSION["account_type"] == 'Examiner'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_examiner.php?q=3';</script>";
			
		}else if($_SESSION["account_type"] == 'Admin'){
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
		}
	}
}

//add theory question
if(isset($_SESSION["account_type"])){
	if(@$_GET['q']== 'addqnstheory' && ($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner')) {
		
		$exam_id = $_SESSION['exam_id'] ;
		$school_id = $_SESSION['school_id'];
		$class_id = $_SESSION['class_id'];
		$subject_id = $_SESSION['subject_id'];
		$no_of_questions = $_SESSION['no_of_questions'];
		$exam_time = $_SESSION['exam_time'];
		$exam_instructions = $_SESSION['exam_instructions'];				
		$examiner_id = $_SESSION['examiner_id'];
		
		$r= mysqli_query($con, "select * from theory_exam where exam_id = '$exam_id'");
			$r = mysqli_fetch_array($r);
				
			if ($r == 0)
			{
				//Set Question
		$sql2=mysqli_query($con,"INSERT INTO theory_exam VALUES  ('','$exam_id', '$school_id', '$class_id', '$subject_id','$no_of_questions', '$exam_time', '$exam_instructions')");
		$sql3=mysqli_query($con,"INSERT INTO theory_exam_audit VALUES  ('','$examiner_id' ,'$exam_id', '$subject_id','$no_of_questions', 'Set Exam', NOW())");
			}
				
		
		
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		$ch=@$_GET['ch'];
		
		
		for($i=1;$i<=$n;$i++)
		{
			
			$qid=uniqid();
 			$qns=$_POST['qns'.$i];
			$qnsimg = "";
			$m_ans=$_POST['m_ans'.$i];
			$m_ansimg = "";
			$mark = $_POST['mark'.$i];
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
					
 		}
		$errmsg="Your questions has been successfully added.";
		if($_SESSION["account_type"] == 'Admin'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_admin.php?q=9';</script>";
		}else if($_SESSION["account_type"] == 'Examiner'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_examiner.php?q=3';</script>";
		}
	}
}


//edit obj question
if(isset($_SESSION["account_type"])){
	if(@$_GET['q']== 'editqns' && ( $_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner')){
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		$ch=@$_GET['ch'];
		$qid = $_SESSION["qid"];
		//$qnsimg = $_SESSION["qnsimg"];
		$optionid = $_SESSION["oid"];
		
		for($i=1;$i<=$n;$i++)
		{
			foreach ($qid[$i - 1] as $qes_id){
				$qns=$_POST['qns'.$i];
				
				
				if(@validate($_FILES['qnsimg'.$i]["name"])){
					$filename = $qes_id. '.jpg';
					$uploadDir = 'question_img/';
					$savedPicture = $uploadDir . $filename;
					$qnsimg = './'. $savedPicture;
					$target_file = $uploadDir . basename($_FILES['qnsimg'.$i]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					
					
					move_uploaded_file($_FILES['qnsimg'.$i]["tmp_name"], $savedPicture);
					$q3=mysqli_query($con,"UPDATE obj_questions SET question = '$qns', question_imagepath = '$qnsimg'  WHERE question_id = '$qes_id'");
					 
				}else{
					$q3=mysqli_query($con,"UPDATE obj_questions SET question = '$qns'  WHERE question_id = '$qes_id'");
				}
				
				
			}
			if($i==1){
				$j = 0;
			}else{
				$j = $j + 1;
			}
  			foreach ($optionid[$j] as $data){
				$id_a = $data;	
			}
			$j = $j + 1;
			foreach ($optionid[$j] as $data){
				$id_b = $data;
			}
			$j = $j + 1;
			foreach ($optionid[$j] as $data){
				$id_c = $data;
			}
			$j = $j + 1;
			foreach ($optionid[$j] as $data){
				$id_d = $data;
			}			
			
			$a=$_POST[$i.'1'];
			$b=$_POST[$i.'2'];
			$c=$_POST[$i.'3'];
			$d=$_POST[$i.'4'];
			$qa=mysqli_query($con,"UPDATE obj_options SET options = '$a'  WHERE option_id = '$id_a'");
			$qb=mysqli_query($con,"UPDATE obj_options SET options = '$b'  WHERE option_id = '$id_b'");
			$qc=mysqli_query($con,"UPDATE obj_options SET options = '$c'  WHERE option_id = '$id_c'");
			$qd=mysqli_query($con,"UPDATE obj_options SET options = '$d'  WHERE option_id = '$id_d'");
			
			
			$e=$_POST['ans'.$i];
			switch($e)
			{
				case 'a':
					$ansid=$id_a;
					break;
				case 'b':
					$ansid=$id_b;
					break;
				case 'c':
					$ansid=$id_c;
					break;
				case 'd':
					$ansid=$id_d;
					break;
				default:
					$ansid=$id_d;
			}

			
			$qans=mysqli_query($con,"UPDATE obj_answer SET answer_id = '$ansid'  WHERE question_id = '$qes_id'");
			
 		}
		$errmsg="Questions has been successfully updated.";
		if($_SESSION["account_type"] == 'Admin'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_admin.php?q=31';</script>";
		}else if($_SESSION["account_type"] == 'Examiner'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_examiner.php?q=4';</script>";
		}
	}
}


//edit theory question

if(isset($_SESSION["account_type"]))
{
	if(@$_GET['q']== 'edit_theory_qns' && ($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner')) 
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
		
			if($_SESSION["account_type"] == 'Admin')
			{
				$errmsg="Questions has been successfully updated.";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=32';</script>";
			}
			if($_SESSION["account_type"] == 'Examiner')
			{
				$errmsg="Questions has been successfully updated examiner.";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_examiner.php?q=18';</script>";
			}
	}
}

//Add Theory Score

if(isset($_SESSION["account_type"]))
{
	if(@$_GET['q']== 'addtheoryans' && ($_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner'))
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
		
		
		$qid = $_SESSION["qid"];	//Array of questions id
		
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
			
			$exam_type = '2';
			$result2 = mysqli_query($con, "select * from result_aggregate where regno = '$regno' AND exam_id = '$exam_id' AND exam_type = '$exam_type'");
$row4 = mysqli_fetch_array($result2);
				
				if ($row4 == 0)
					{ $t_score = $t_score * 0.6;
			$sql3=mysqli_query($con,"INSERT INTO result_aggregate VALUES ('','$exam_id','$regno','$class_id','$subject_id','$t_score','2')");
					}
				else
			{
				$q=mysqli_query($con,"UPDATE result_aggregate SET score = '$t_score' WHERE regno = '$regno' AND exam_id = '$exam_id' AND exam_type = '$exam_type'");
			}
			
			$errmsg="Score successfully added";
			if($_SESSION["account_type"] == 'Admin')
			{
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=34';</script>";
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




?>






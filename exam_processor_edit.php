<?php
include_once 'dbConnection.php';
session_start();



//Update question
if(isset($_SESSION["account_type"])){
	if(@$_GET['q']== 'addqns' && $_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') {
		$n=@$_GET['n'];
		$eid=@$_GET['eid'];
		$ch=@$_GET['ch'];

		for($i=1;$i<=$n;$i++)
		{
			$qid=uniqid();
 			$qns=$_POST['qns'.$i];
			$q3=mysqli_query($con,"SELECT * FROM obj_questions WHERE exam_id = '$eid'");
			
			$res=mysqli_num_rows($q3);
		
				if($res > 0)
				{
						$qns = $res['question'];
				}
					
			
			
			
  			$oaid=uniqid();
  			$obid=uniqid();
			$ocid=uniqid();
			$odid=uniqid();
			$a=$_POST[$i.'1'];
			$b=$_POST[$i.'2'];
			$c=$_POST[$i.'3'];
			$d=$_POST[$i.'4'];
			$qa=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$qid','$a','$oaid')") or die('Error61');
			$qb=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$qid','$b','$obid')") or die('Error62');
			$qc=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$qid','$c','$ocid')") or die('Error63');
			$qd=mysqli_query($con,"INSERT INTO obj_options VALUES  ('','$qid','$d','$odid')") or die('Error64');
			$e=$_POST['ans'.$i];
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

			$qans=mysqli_query($con,"INSERT INTO obj_answer VALUES  ('','$qid','$ansid')");					
 		}
		$errmsg="Questions submitted successfully";
		if($_SESSION["account_type"] == 'Admin'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_admin.php?q=9';</script>";
		}else if($_SESSION["account_type"] == 'Examiner'){
			echo "<script type='text/javascript'>alert('$errmsg');
			window.location.href='dash_examiner.php?q=9';</script>";
		}
	}
}





?>






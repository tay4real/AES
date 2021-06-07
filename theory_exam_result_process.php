<?php
include_once 'dbConnection.php';
include_once 'library.php';
//session_start();
$exam_code = md5($_POST["exam_code"]);
$regno = $_SESSION["regno"];
$name = $_SESSION["name"];


if(@$_GET['q']==20)
	{
	
	if (count($_POST) > 0)
		{
			$result = mysqli_query($con, "select * from theory_exam_submitted where exam_id = '$exam_code' AND regno = '$regno'");
			$row = mysqli_fetch_array($result);
			//$exam_id= $row["exam_id"];
			$subject_id = $row["subject_id"];
			$status = $row["status"];
				if ($row == 0)
					{
						$err_msg = "You do not have the require credential(s) to check result for this exam!. Contact the administrator!.";
						echo "<script type='text/javascript'>alert('$err_msg');
						window.location.href='dash_student.php?q=19';</script>";
					}
				else if ($status == 'Ungraded')
					{
						$err_msg = "Your exam have not been graded, check back for your grade!";
						//header("location:dash_student.php?q=19");
						echo "<script type='text/javascript'>alert('$err_msg');
						window.location.href='dash_student.php?q=19';</script>";
						
						
					}
				else	
					{
						
						$result = mysqli_query($con, "SELECT * FROM theory_student_result WHERE exam_id = '$exam_code' AND regno = '$regno'");
						$row = mysqli_fetch_array($result);
						$exam_id= $row["exam_id"];
						$name= $row["name"];
						$regno= $row["regno"];
						$school_name= $row["school_name"];
						$subject_id= $row["subject_id"];
						$class_id= $row["class_id"];
						$score= $row["score"];
						$grade= $row["grade"];
						
						
						
						
					}
		}
	}
?>

<center>
<div class="row" style="background-color:#fff; padding-top:10px">			
<font size="+6"><b><u>Theory Result</u></b></font><br /><br />
<font size="+2">
<?php echo "<strong>".$name."</strong>"; ?>, your result for <b>
<?php 
$e_name = getSubject_ids_Opp($subject_id);
					
						$subject_id = $e_name['subject'];
						//echo $exam_n;
					
			

echo $subject_id; 


?>
</b>&nbsp;is given below:<br /><br />
                          <font size="+1">
                          <table>
                          
                           <tr><td>Registration no.:&nbsp;&nbsp;&nbsp;</td><td><?php echo $regno; ?></td></tr>
                          <tr><td>School Name:&nbsp;&nbsp;&nbsp;</td><td><?php echo $school_name; ?></td></tr>
                          <tr><td>Subject Name.:&nbsp;&nbsp;&nbsp;</td><td><?php echo $subject_id; ?></td></tr>
                          <tr><td >Class:&nbsp;&nbsp;&nbsp;</td><td><?php echo $class_id; ?></td></tr>
                          <tr><td colspan="2"><hr /></td></tr>
                          <tr><th><font color="green" size="+5">Score.:&nbsp;&nbsp;&nbsp;</td><th><font color="green" size="+5"><?php echo $score."%"; ?></font></th></tr>
                          <tr><th><font color="green" size="+5">Grade.:&nbsp;&nbsp;&nbsp;</td><th><font color="green" size="+5"><?php echo $grade; ?></font></th></tr>
                          
                          </table>
                              <br />
                               
                          </font> 

</font> 

<p>



</div>
</center>

<?php
include_once 'dbConnection.php';
require_once 'library.php';
$e=$_GET['e'];
$Exam_code=getExam_code($_GET['e']);

while($row3=$Exam_code->fetch_array()){
			$subject_id = $row3['subject_id'];
			$class_id = $row3['class_id'];
			$exam_instructions = $row3['exam_instructions'];
			$_SESSION['exam_instructions'] = $exam_instructions;
			$exam_time = $row3['exam_time'];
			$no_of_questions = $row3['no_of_questions'];
			}

$getClass_ids = getClass_ids($class_id);
			while($row3=$getClass_ids->fetch_array()){
			$class_id = $row3['class'];
			}
?>

<center>
<div class="row" style="background-color:#fff; padding-top:10px">			
<font size="+6"><b>Welcome</b></font><br /><br />
<font size="+2">
You are about to write OBJECTIVE exam for <b>
<?php 
$e_name = getSubject_ids_Opp($subject_id);				
$subject_id = $e_name["subject"];			
echo $subject_id; 
$_SESSION['subject_id'] = $subject_id;


?>
</b><br /><br />
                          <font size="+1">
                          <table>
                          <tr><td>Class:&nbsp;&nbsp;&nbsp;</td><td ><?php echo $class_id; ?></td></tr>
                          <tr><td>Exam Duration:&nbsp;&nbsp;&nbsp;</td><td><?php echo $exam_time." "."minutes"; ?></td></tr>
                          <tr><td>Exam Instruction:&nbsp;&nbsp;&nbsp;</td><td><?php echo $exam_instructions; ?></td></tr>
                          <tr><td>Total Questions:&nbsp;&nbsp;&nbsp;</td><td><?php echo $no_of_questions; ?></td></tr>
                          <tr><td>Registration no.:&nbsp;&nbsp;&nbsp;</td><td><?php echo $regno; ?></td></tr>
                          
                          </table>
                              <br />
                               Goodluck!
                          </font> 

</font> 
<hr />
<p>
<?php
$_SESSION["class_id"]=$class_id;
$_SESSION["subject_id"]=$subject_id;

$exam_id=$_GET['e'];

$Exam_code=getExam_code($exam_id);
			while($row3=$Exam_code->fetch_array())
			{
				$no_of_questions = $row3['no_of_questions'];
			}

echo '
<td> <a title="Start Exam" href="dash_student.php?q=17&step=3&eid='.$exam_id.'&n='.$no_of_questions.'&t='.$exam_time.'"><b> <button type="submit" class="btn btn-primary" name = "exam_start">Start Exam</button></b></a> </td>
';
?>


</div>
</center>

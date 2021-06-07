<?php
require_once 'library.php';
$search_theory_questions=search_theory_questions($_POST["name"]);
//$allSubjects=get_AllSubjects();
//$allExaminers=get_AllExaminers();


		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><b>View All Theory Questions</b></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>Set By</b></td><td><b>Full Name</b></td><td><b>Exam Name</b></td><td><b>Total Questions</b></td><td><b>Exam Code</b></td><td><b>Date of submission</b></td><td></td><td></td></tr>';
		$c=1;
		/*		while($row3=$search_theory_questions->fetch_array() ) {
			
				$exam_id = $row3['exam_id'];
				$exam_name = $row3['subject_id'];
				$no_of_questions = $row3['no_of_questions'];
				$examiner_id = $row3['examiner_id'];
				$date_performed = $row3['date_performed'];
				
			
			echo '<tr><td>'.$c++.'</td><td>'.$examiner_id.'</td><td>'.$exam_name.'</td><td>'.$no_of_questions.'</td><td>'.$date_performed.'</td><td> <a title="Delete Question" onclick="return verifyDelete()" href="update.php?del_obj_question='.$exam_id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		</tr>';
		}
		*/
		while($row=$search_theory_questions->fetch_array() ) {
			
			
			$exam_id = $row['exam_id'];
			$id = $row['id'];
			
			$Exam_name = getTheoryExam_name($exam_id);
			while($row3=$Exam_name->fetch_array())
			{
				$exam_name = $row3['subject_id'];
				$no_of_questions = $row3['no_of_questions'];
				$examiner_id = $row3['examiner_id'];
				$date_performed = $row3['date_performed'];
				
				
				if ($examiner_id == "Admin")
					{
						$fullname = "Admin";		
					}
				else
					{
						$fullname = $row3['examiner_id'];
						$getExaminer_name = getExaminer_name($fullname);
						while($row3=$getExaminer_name->fetch_array())
							{
								$fullname = $row3['fullname'];
							}
					}
			}
			
			$Exam_code = getTheoryExam_code($exam_id);
			while($row4=$Exam_code->fetch_array()){
				$school_id = $row4['school_id'];
				$class_id = $row4['class_id'];
				$subject_id = $row4['subject_id'];
				
				$exam_code = formatString($school_id."/".$class_id."/".$subject_id);
			}
			echo '<tr><td>'.$c++.'</td><td>'.$examiner_id.'</td><td>'.$fullname.'</td><td>'.$exam_name.'</td><td>'.$no_of_questions.'</td><td><a href="dash_admin.php?q=26&e='.$exam_id.'&examiner_id='.$examiner_id.'">'.$exam_code.'</a></td><td>'.$date_performed.'</td>
			<td> <a title="Delete Theory Question" onclick="return verifyDelete()" href="update.php?del_theory_question='.$exam_id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
			
			<td> <a title="View/Update Theory Question" href="dash_admin.php?q=24&step=3&eid='.$exam_id.'&n='.$no_of_questions.'"><b><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></b></a> </td>
			
			
			
			
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>
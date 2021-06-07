<?php
require_once 'library.php';



$search_obj_questions=search_obj_questions($_POST["name"]);
//$allSubjects=get_AllSubjects();
//$allExaminers=get_AllExaminers();


		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><b>View All OBJ Questions</b></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>Set By</b></td><td><b>Exam Name</b></td><td><b>Total Questions</b></td><td><b>Date of submission</b></td><td></td></tr>';
		$c=1;
		while($row3=$search_obj_questions->fetch_array() ) {
			
				$exam_id = $row3['exam_id'];
				$exam_name = $row3['subject_id'];
				$no_of_questions = $row3['no_of_questions'];
				$examiner_id = $row3['examiner_id'];
				$date_performed = $row3['date_performed'];
				
			
			echo '<tr><td>'.$c++.'</td><td>'.$examiner_id.'</td><td>'.$exam_name.'</td><td>'.$no_of_questions.'</td><td>'.$date_performed.'</td><td> <a title="Delete Question" onclick="return verifyDelete()" href="update.php?del_obj_question='.$exam_id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		
		<td> <a title="Update OBJ Question" href="dash_admin.php?q=17&step=3&eid='.$exam_id.'&n='.$no_of_questions.'"><b><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></b></a> </td>
		
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>
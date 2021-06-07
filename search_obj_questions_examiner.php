<?php
include_once 'dbConnection.php';
require_once 'library.php';
$exam_id=@$_GET['e'];
$_SESSION["exam_id"] = $exam_id;
$search_obj_result_list=search_obj_result_list($_POST["name"]);
//$allSubjects=get_AllSubjects();
//$allExaminers=get_AllExaminers();


		
	echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		 <div class="col-md-4"><a href = "export_student_list.php?e='.$_SESSION["exam_id"].'"><img src="image/exp.gif" /></a></div><div class="col-md-8"><span class="title1" style="margin-center:40%;font-size:30px;"><b><u>Student Result List</u></b></span></div>
		 <div class="col-md-12"><hr></div>
		<table class="table table-striped title1">
		
		<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Regno</b></td><td><b>School Name</b></td><td><b>Subject</b></td><td><b>Class</b></td><td><b>Score</b></td><td></td><td></td></tr>';
		$c=1;
		while($row3=$search_obj_result_list->fetch_array() ) {
			
				$name = $row3['name'];
				$regno = $row3['regno'];
				$school_name = $row3['school_name'];
				$subject_id = $row3['subject_id'];
				$class_id = $row3['class_id'];
				$score = $row3['score'];
				$exam_id = $row3['exam_id'];
					
			echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$regno.'</td><td>'.$school_name.'</td><td>'.$subject_id.'</td><td>'.$class_id.'</td><td>'.$score.'</td><td> <a title="Delete OBJ Question" onclick="return verifyDelete()" href="update.php?del_obj_question='.$exam_id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
			
			
			
			
			
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>
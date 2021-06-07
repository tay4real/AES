<?php
require_once 'library.php';
$allObj_Questions=get_AllObj_Questions();
?>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_obj_questions.php",data:{"name":$("#name").val()}}).done(function(msg){
		$("#result").html(msg);
		
	});
}
</script>
<script language="javascript">
			function verifyDelete(){
				msg = "Are you sure you want to Delete? \nClick OK to Delete or Cancel to keep record";
				return confirm(msg);
			}
			function verifyUpdate(){
				msg = "Are you sure you want to Update? \nClick OK to Update or Cancel to keep record";
				return confirm(msg);
			}
</script>

<form name="form1" method="post" action="">
<input name="name" placeholder="Search Examiner/Subjects" type="text" id="name" size="150" onkeyup="doSearch()">
  <div id="result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><b>View All OBJ Questions</b></span><br /><br />
		<table class="table table-striped title1">
		
		<tr><td><b>S.N.</b></td><td><b>Set By</b></td><td><b>Fullname</b></td><td><b>Exam Name</b></td><td><b>Class</b></td><td><b>Total Questions</b></td><td><b>Exam Code</b></td><td><b>Date of submission</b></td><td></td><td></td></tr>';
		$c=1;
		while($row=$allObj_Questions->fetch_array() ) {
			
			
			
			$exam_id = $row['exam_id'];
			$id = $row['id'];
			
			$Exam_name = getExam_name($exam_id);
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
			
			$Exam_code = getExam_code($exam_id);
			while($row4=$Exam_code->fetch_array()){
				$school_id = $row4['school_id'];
				$class_id = $row4['class_id'];
				$subject_id = $row4['subject_id'];
				
				
				$getSubject_ids = getSubject_ids($subject_id);
				while($r=$getSubject_ids->fetch_array())
				{
					$subject_id = $r['id'];
				}
				$obj = '1';
				$exam_code = ($school_id."/".$class_id."/".$subject_id."/".$obj);
				$exam_id = formatString(md5($school_id."/".$class_id."/".$subject_id."/".$obj));
				}
				
					
				$getClass = getClass_ids($class_id);
				while($row6=$getClass->fetch_array()){
					$class = $row6['class'];			
				}
					
				
				
				$e_name = getSubject_ids_Opp($subject_id);				
				$exam_name = $e_name["subject"];
					
			
			echo '<tr><td>'.$c++.'</td><td>'.$examiner_id.'</td><td>'.$fullname.'</td><td>'.$exam_name.'</td><td>'.$class.'</td><td>'.$no_of_questions.'</td><td><a href="dash_admin.php?q=20&e='.$exam_id.'&examiner_id='.$examiner_id.'">'.$exam_code.'</a></td><td>'.$date_performed.'</td><td> <a title="Delete OBJ Question" onclick="return verifyDelete()" href="update.php?del_obj_question='.$exam_id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
			
			<td> <a title="View/Update OBJ Question" href="dash_admin.php?q=17&step=3&eid='.$exam_id.'&n='.$no_of_questions.'"><b><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></b></a> </td>
			
			
			
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




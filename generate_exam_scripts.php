<?php
require_once 'library.php';
$allTheory_Questions=get_AllTheory_Questions();

?>

<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_theory_questions.php",data:{"name":$("#name").val()}}).done(function(msg){
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
<input name="name" placeholder="Search Script by Exam Code" type="text" id="name" size="150" onkeyup="doSearch()">
  <div id="result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="font-size:30px;"><center><b>Generate Exam Scripts</b></center></span><br /><br />
		
		<table class="table table-striped title1">
		
		<tr><td><b>S.N.</b></td><td><b>Exam Code</b></td><td><b>Exam Name</b></td><td><b>Class</b></td><td><b>No of Examined Student</b></td><td><b>Generate Exam Scripts</b></td></tr>';
		$c=1;
		while($row=$allTheory_Questions->fetch_array() ) {
			
			
			
			$exam_code = $row['exam_id'];
			$id = $row['id'];
				
			$Exam_code = getTheoryExam_code($exam_code);
			while($row4=$Exam_code->fetch_array()){
				$exam_name = $row4['subject_id'];
				$school_id = $row4['school_id'];
				$class_id = $row4['class_id'];
				$subject_id = $row4['subject_id'];
				
				$exam_code = formatString($school_id."/".$class_id."/".$subject_id);
			}
			
			$getClass = getClass_ids($class_id);
			while($row4=$getClass->fetch_array()){
				$class = $row4['class'];			
			}
			echo '<tr><td>'.$c++.'</td><td>'.$exam_code.'</td><td>'.$exam_name.'</td><td>'.$class.'</td><td></td>
			
			
			<td><center> <a title="Generate Exam Scripts" href="dash_admin.php?q=24&step=3&eid='.$exam_code.'"><b><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></b></a></center> </td>
			
			
			
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




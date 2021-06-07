<?php
include_once 'dbConnection.php';
require_once 'library.php';
$exam_id=@$_GET['e'];
$examiner_id=$_SESSION['examiner_id'];
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

<div class="col-md-1"></div>
<div class="col-md-11">
<form name="form1" method="post" action="">

<input name="name" placeholder="Search by Name/Regno/Subject name" type="text" id="name" size="130" onKeyUp="doSearch()">
</div>
  <div id="result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		 <div class="col-md-4"><a href = "export_theory_student_list.php?e='.$exam_id.'"><img src="image/exp3.gif" /></a></div><div class="col-md-8"><span class="title1" style="margin-center:40%;font-size:30px;"><b><u>Student Result List (Theory Exam)</u></b></span></div>
		 <div class="col-md-12"><hr></div>
		<table class="table table-striped title1">
		
		<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Regno</b></td><td><b>School Name</b></td><td><b>Subject</b></td><td><b>Class</b></td><td><b>Status</b></td><td></td><td></td></tr>';
		$c=1;
		
		$examiner_id=@$_GET['examiner_id'];
		//$examiner_id = $_SESSION["examiner_id"];
		//$exam_id = $_GET["e"];
		
		$getTheoryExam_code=getTheoryExam_code($exam_id);
		while($row5=$getTheoryExam_code->fetch_array() )
		{
			$school_id = $row5['school_id'];
			$subject_id = $row5['subject_id'];
			$class_id = $row5['class_id'];
			
			$getClass_ids=getClass_ids($class_id);
			while($row11=$getClass_ids->fetch_array() )
			{
				$class = $row11['class'];
				
			}
			
			
			
			$getSchool=getSchool($school_id);
			while($row6=$getSchool->fetch_array() )
			{
				$school_name = $row6['school_name'];
			}
			
			
		
			$getExaminedStudentRegNo = getExaminedStudentRegNo($exam_id);
			while($row=$getExaminedStudentRegNo->fetch_array() )
			{
				
				$regno = $row['regno'];	
				//$status = $row['status'];
				
				//$getReg = getReg($regno);
				//$status = $getReg["status"];
				
				
				$getStudent = getStudent($regno);
				$name = $getStudent["name"];
				
				$re = mysqli_query($con, "select * from theory_exam_submitted where regno = '$regno' AND exam_id = '$exam_id'");
				$r = mysqli_fetch_array($re);
				$status = $r["status"];
				
					if($status == "Graded")
					{
						$status = "<font color = green>$status</font>";
					}
					else
					{
						$status = "<font color = red>$status</font>";
					}
					
				
				$result1 = mysqli_query($con, "select * from theory_student_result where regno = '$regno' AND exam_id = '$exam_id'");
				$row3 = mysqli_fetch_array($result1);
								
					if ($row3 == 0)
						{
				$sql2=mysqli_query($con,"INSERT INTO theory_student_result VALUES ('','$exam_id','$name', '$regno' ,'$school_name', '$subject_id' , '$class','null', 'null')");
						}
				
				echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td><a title="View answer sheet for this student" href="dash_examiner.php?q=27&e='.$exam_id.'&examiner_id='.$examiner_id.'&regno='.$regno.'&name='.$name.'&class_id='.$class.'&subject_id='.$subject_id.'">'.$regno.'</a></td><td>'.$school_name.'</td><td>'.$subject_id.'</td><td>'.$class.'</td><td>'.$status.'</td>
				
				
				
			</tr>';	
		
			}
			
	}
	
		
		
			

			
				
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




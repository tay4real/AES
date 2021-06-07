<?php
include_once 'dbConnection.php';
require_once 'library.php';
$exam_id=@$_GET['e'];
?>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_obj_questions_examiner.php",data:{"name":$("#name").val()}}).done(function(msg){
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
<div class="col-md-12">
<form name="form1" method="post" action="">

<input name="name" placeholder="Search by Name/Regno/Subject name" type="text" id="name" size="150" onkeyup="doSearch()">
</div>
  <div id="result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		 <div class="col-md-4"><a href = "export_student_list.php?e='.$exam_id.'"><img src="image/exp3.gif" /></a></div><div class="col-md-8"><span class="title1" style="margin-center:35%;font-size:30px;"><b><u>Student Result List</u></b></span></div>
		 <div class="col-md-12"><hr></div>
		<table class="table table-striped title1">
		
		<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Regno</b></td><td><b>School Name</b></td><td><b>Subject</b></td><td><b>Class</b></td><td><b>Score</b></td></tr>';
		$c=1;
		
		$examiner_id=@$_GET['examiner_id'];
		//$examiner_id = $_SESSION["examiner_id"];
		//$exam_id = $_GET["e"];
		
		$getExam_code=getExam_code($exam_id);
		while($row5=$getExam_code->fetch_array() )
		{
			$school_id = $row5['school_id'];
		}
		
		$getSchool=getSchool($school_id);
		while($row6=$getSchool->fetch_array() )
		{
			$school_name = $row6['school_name'];
		}
		
		$Examiner_get_ALLOBJ=Examiner_get_ALLOBJ($exam_id);
		while($row=$Examiner_get_ALLOBJ->fetch_array() )
		{
			//$id = $row['id'];
			$regno = $row['regno'];
			$subject_id = $row['subject_id'];
			$class_id = $row['class_id'];
			$no_of_questions = $row['no_of_questions'];
			
			
				$result = mysqli_query($con, "select * from student where regno = '$regno'");
				$row2 = mysqli_fetch_array($result);
				//$exam_id= $row["exam_id"];
					$name = $row2["name"];
					
				$right = 0;
				$wrong = 0;
						
				$sql ="SELECT answer_id, correct_answer_id, result, subject_id FROM obj_exam_submitted
				WHERE exam_id = '$exam_id' AND regno = '$regno'";
					if ($result = $con->query($sql))
						{
							while ($row = $result->fetch_assoc()) 
								{
									$res = $row["result"];
									//echo "1st result=".$res."<br>";
										if ($res == "correct")
											{
												$right = $right + 1;
												//echo "right=".$right."<br>";
											}
										else
										{
											if ($res == "wrong") 
											{$wrong = $wrong + 1;
											//echo "wrong=".$wrong."<br>";
											}
										}
						}
						$total = $right + $wrong;
						//$final_result = $right."|".$total;
						$final_result = (($right/$total) * 100);
						$sc = round($final_result,0);
						$score = $sc;
						}
						
							$e_name = getSubject_ids($subject_id);
						while($r=$e_name->fetch_array())
						{
							$exam_name = $r['id'];
							//echo $exam_n;
						}
						
$result1 = mysqli_query($con, "select * from obj_student_result where regno = '$regno' AND exam_id = '$exam_id'");
$row3 = mysqli_fetch_array($result1);
				
	if ($row3 == 0)
		{
$sql2=mysqli_query($con,"INSERT INTO obj_student_result VALUES ('','$exam_id','$name', '$regno' ,'$school_name', '$exam_name' , '$class_id','$score')");
		}
$result2 = mysqli_query($con, "select * from result_aggregate where regno = '$regno' AND exam_id = '$exam_id'");
$row4 = mysqli_fetch_array($result2);
		//$exam_type = $row4["exam_type"];		
	if ($row4 == 0)
		{
			$score = $score * 0.4;
$sql3=mysqli_query($con,"INSERT INTO result_aggregate VALUES ('','$exam_id','$regno','$class_id','$exam_name','$score','1')");
		}



					
			echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$regno.'</td><td>'.$school_name.'</td><td>'.$subject_id.'</td><td>'.$class_id.'</td><td>'.$score.'%</td>
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




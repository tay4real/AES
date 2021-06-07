
<?php
include_once 'dbConnection.php';
require_once 'library.php';
$regno=@$_GET['r'];

$result2 = mysqli_query($con, "select * from student where regno = '$regno'");
$row1 = mysqli_fetch_array($result2);
				
				if ($row1 > 0)
					{ 
						$name = $row1['name'];
						$dob = $row1['dob'];
						$gender = $row1['gender'];
						$mob = $row1['mob'];
						$school_id = $row1['school_id'];
					}
					
					if ($gender == "M")
					{ 
						$gender = "Male";
						//$school_id = $row1['school_id'];
					}
					else if ($gender == "F")
					{ 
						$gender = "Female";
						//$school_id = $row1['school_id'];
					}
					
					
					

	$result5 = mysqli_query($con, "select class_id from result_aggregate where regno = '$regno'");
$row5 = mysqli_fetch_array($result5);
				
				if ($row5 > 0)
					{ 
						$class_id = $row5['class_id'];
						//$school_id = $row1['school_id'];
					}

			$e_name = getSchool($school_id);
						while($r=$e_name->fetch_array())
						{
							$school_name = $r['school_name'];
							//echo $exam_n;
						}

					
	


//$i = 1;

//echo "count = ".$count."<br>";
//$c = $count/2;
echo  '<div class="panel" id = "my_div"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		 <center><div class="col-md-12" style="background-color:#CCC; padding-bottom:25px">
		 	<span class="title1" style="margin-center;font-size:30px;"><center><img src="image/report_sheet.jpg" /></center></span>
		 </div></center>
		 
		<table class="table table-striped title1">
		
		<tr><td><b>S.N.</b></td><td><b>Subject(s)</b></td><td><b>Obj Score(%)</b></td><td><b>Theory Score(%)</b></td><td><b>Total</b></td><td><b>Grade</b></td><td><b>Remarks</b></td><td></td><td></td></tr>';
 

	
	
	echo '
	<div class="col-md-12" style="padding-top:15px">';
	
	echo '<center>';
		echo '<div class="col-md-1"></div>';
		echo '<div class="col-md-2" align="left"><b>Full Name:</b></div><div class="col-md-3" align="left">'.$name.'</div>';
		echo '<div class="col-md-2" align="left"><b>Registration No:</b></div><div class="col-md-4" align="left" style="padding-bottom:10px">'.$regno.'</div>';
		
		echo '<div class="col-md-1"></div>';
		echo '<div class="col-md-2" align="left"><b>Date of Birth:</b></div><div class="col-md-3" align="left">'.$dob.'</div>';
		echo '<div class="col-md-2" align="left"><b>Gender:</b></div><div class="col-md-4" align="left" style="padding-bottom:10px">'.$gender.'</div>';
		
		echo '<div class="col-md-1"></div>';
		echo '<div class="col-md-2" align="left"><b>Class:</b></div><div class="col-md-3" align="left">'.$class_id.'</div>';
		echo '<div class="col-md-2" align="left"><b>Phone No:</b></div><div class="col-md-4" align="left" style="padding-bottom:25px">'.$mob.'</div>';
	echo '</center>';
	
		
	
	 '</div>';
	
	
	
	$j=1;
	$today_date = date("Y-m-d h:i:sa");
	$Aggregate = Aggregate($regno);
	$c = mysqli_num_rows($Aggregate);
	
	
	
	while($row = $Aggregate->fetch_array()) 
	{ 
		for($i = 1; $i <= $c; $i++){
				
			//echo "i = ".$i."<br>";
			$score = $row['score'];
			$total = $row['Total'];
			$subject_id = $row['subject_id'];
			$exam_type = $row['exam_type'];
			
			 
			
			$school_name = "FGGS";
			$grade = "null";
			$remark = "Excellent";
			
			if($exam_type == 1)
			{
				$score_obj = $score;
				$score_theory = $total - $score;
			}
			else if($exam_type == 2)
			{
				$score_theory = $score;
				$score_obj = $total - $score;
			}
			
			//echo "Exam_type =".$exam_type;
			
		}
		$e_name = getSubject_ids_Opp($subject_id);
			
				$subject_id = $e_name['subject'];
				//echo $exam_n;
			


			if ($total >= '75')
				{$grade="A1";$remark="Distinction";}
				else if ($total >= '70' && $total <= '74')
				{$grade="B2";$remark="Very Good";}
				else if ($total >= '65' && $total <= '69')
				{$grade="B3";$remark="Good";}
				else if ($total >= '60' && $total <= '64')
				{$grade="C4";$remark="Credit";}
				else if ($total >= '55' && $total <= '59')
				{$grade="C5";$remark="Credit";}
				else if ($total >= '50' && $total <= '54')
				{$grade="C6";$remark="Credit";}
				else if ($total >= '45' && $total <= '49')
				{$grade="D7";$remark="Pass";}
				else if ($total >= '40' && $total <= '44')
				{$grade="E8";$remark="Pass";}
				else if ($total <= '39')
				{$grade="F9";$remark="Fail";}


			

	
	echo '<tr><td>'.$j++.'</td><td>'.$subject_id.'</td><td>'.$score_obj.'</td><td>'.$score_theory.'</td><td>'.$total.'</td><td>'.$grade.'</td><td>'.$remark.'</td>
			
		</tr>';
		}
		$j=0;
		
		echo '</table>';
				
				
			echo '<div class="col-md-6" style="padding-top:20px" align="center"><b>'.$today_date.'</b></div>';
			
			echo '<div class="col-md-6" style="padding-top:20px" align="center"><b>Signed By: Administrator</b></div>';
		
		
		echo '</div>';
		
		
		
		
		echo '</div>'; 



?>

  </div>
</form>
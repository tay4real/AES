<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/timing.js"></script>
<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php
if(@$_GET['q']==27 )
	{
require_once 'library.php';
$exam_id=@$_GET['e'];
		$examiner_id=@$_GET['examiner_id'];
		$regno=@$_GET['regno'];
		$name=@$_GET['name'];
		$subject_id = @$_GET['subject_id'];
		$class_id = @$_GET['class_id'];
		
$result = mysqli_query($con, "select * from theory_exam_audit where exam_id = '$exam_id'");
$row = mysqli_fetch_array($result);
	$no_of_questions = $row['no_of_questions'];
	$exam_id=$row['exam_id'];

?>
<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
       var loadFile = function(event){
		   var output = document.getElementById('output');
		   output.src = URL.createObjectURL(event.target.files[0]);
	   };	  	   
</script>

<div class="row panel">
<div class="col-md-2">
</div>
<div class="col-md-8">
<span class="title1" style="font-size:30px;"><center><b>Student Answer Sheet</b></center></span>
	<h2>Progress</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
<?php	echo '<form id="user_form" novalidate action="view_answer_sheet_examiner_process.php?q=addtheoryans&eid='.$exam_id.'&n='.$no_of_questions.'&examiner_id='.$examiner_id.'&regno='.$regno.'&name='.$name.'&class_id='.$class_id.'&subject_id='.$subject_id.'"  method="post">';



?>
						<div class="form-group">
                                        <table>
                                        
                                        <tr><th>Class:&nbsp;&nbsp;&nbsp;</th><td><?php echo $class_id;?></td></tr>
                                        <tr><th>Subject:&nbsp;&nbsp;&nbsp;</th><td><?php echo $subject_id;?></td></tr>
                                        </table>
                        </div>
						
						<?php
                        $exam_id=@$_GET['e'];
						//$total_score = '0';
						//$n=@$_GET['n'];
						$question_id = get_Theoryquestion_id($exam_id);
						$ques = array();
						$count = mysqli_num_rows($question_id);
						//select all exam QUESTION ID in an ARRAY
						if ($count > 0)
						{
							while($row = $question_id->fetch_array())
							{
								$ques[] = $row;
								$_SESSION["qid"] = $ques;
							}
						}
						?>
                        <?php
						
						for($i=1;$i<=$count;$i++)
						{
							$j = $i - 1;
							foreach ($ques[$j] as $q_id)
							{ $qes = $q_id;}
								$result = mysqli_query($con, "select * from theory_questions where question_id = '$qes'");
								$row = mysqli_fetch_array($result);
									$question_id = $row['question_id'];
									$qns = $row['question'];
									$qnsimg = $row['question_imagepath'];
									$_SESSION["qnsimg"] = $qnsimg;
									$m_ans = $row['answer'];
									$m_ansimg = $row['answer_imagepath'];
									$_SESSION["m_ansimg"] = $m_ansimg;
									$mark = $row['mark'];
									//$_SESSION['mark'] = $mark;
									
								$result = mysqli_query($con, "select * from theory_exam_submitted where question_id = '$qes' AND regno = '$regno'");
								$row = mysqli_fetch_array($result);
									//$question_id = $row['question_id'];
									$regno = $row['regno'];
									$subject_id = $row['subject_id'];
									$class_id = $row['class_id'];
									$s_ans = $row['answer'];
									$s_ansimg = $row['answer_imagepath'];
									$score = $row['score'];
									$status = $row['status'];
									
								/*$result5 = mysqli_query($con, "select * from theory_student_result where exam_id = '$exam_id'");
								$row5 = mysqli_fetch_array($result5);
								if ($row5 > 0)
								{$score = $row5['score'];}
								else
								{$score = "";}*/
								
						?>
                        
                        
									<fieldset>
                                   
									<h2>Question &nbsp: <?php echo $i; ?></h2>
									<div class="form-group">
									<?php echo $qns; ?>
									</div>
									
									
									
									<div class="form-group"> 
										<img height="200" src="<?php if(@validate($qnsimg)){echo $qnsimg;} ?>" class = "<?php if(!@validate($qnsimg)){echo "hide";} ?>" />
									</div>
									
									
                                    
                                    <strong>Student Answer</strong><hr>                                    
                                    
									<div class="form-group">
									<?php echo $s_ans; ?>
									</div>
									
									<div class="form-group"> 
										<img src="<?php if(@validate($s_ansimg)){echo $s_ansimg;} ?>" height="200" class="<?php if(!@validate($s_ansimg)){echo "hide";} ?>" />
									</div>
									
															
														
                                    <strong>Mark Scheme</strong><hr>
									
									<div class="form-group">
									<?php echo $m_ans; ?>
									</div>
									
									
									<div class="form-group"> 
										<img height="200" src="<?php if(@validate($m_ansimg)){echo $m_ansimg;} ?>" class = "<?php if(!@validate($m_ansimg)){echo "hide";} ?>"  />
									</div>
									
									
                                    <strong>Mark</strong><hr>
									
									<div class="form-group">
								
									<input name="mark<?php echo $i?>" value="<?php echo $mark; ?>" class="form-control input-md" type="text" disabled>
									</div>
                                    
                                    <strong>Scoring</strong><hr>
                                     <div class="form-group">
                                     
	<label for="<?php echo $i?>">Enter Score</label>
	
	
    <select name="sco<?php echo $i?>" class="form-control input-md">
        	
            <option value="" <?php if($status == "Ungraded") echo "selected"; ?> >Select Score</option>
			
            <?php $n = $mark;
				for($j=0;$j<=$n;$j++)
				{
					if($j == $score && $status != "Ungraded"){
						echo "<option value='".$j."' selected >".$j."</option>";
					}else{
					echo "<option value='".$j."' >".$j."</option>";
					}
				}
            ?>
    </select>
    
    
    
    </div>
    
    
									<?php
									
										if($i >= 1 && $i < $count)
										{
											$show_next = "";
										}
										else
										{
											$show_next = "hide";
										}
										
										if($i > 1 && $i <= $count)
										{
											$show_prev = "";
										}
										else
										{
											$show_prev = "hide";
										}
										
										if($i == $count)
										{
											$show_subm = "";
										}
										else
										{
											$show_subm = "hide";
										}
									?>
									<input type="button" name="previous" class="previous btn btn-default <?php echo $show_prev;?>" value="Previous" />
									<input type="button" name="next" class="next btn btn-info <?php echo $show_next;?>" value="Next" />
									<input id = "submit" type="submit" name="submit" class="submit btn btn-success <?php echo $show_subm;?>" value="Submit" />
									</fieldset>	
	

<?php
			//$i++;		
			}
				
		
 
?>
</form>

			
</div>	
<div class="col-md-2"></div>

</div>

<?php
}
?>

<script>
$(document).ready(function() {$('#score').on('keypress', function(key) {
        if(key.charCode < 48 || key.charCode > 57) {
			return false;
		}
    });
});


</script>



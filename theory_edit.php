<script type="text/javascript" src="js/form.js"></script>
<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php
	if(@$_GET['q']==24 && (@$_GET['step'])==3 )
	{
		require_once 'library.php';
		

?>
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
			<script type="text/javascript">
			   var loadFile = function(event)
			   {
				   var output = document.getElementById('output');
				   output.src = URL.createObjectURL(event.target.files[0]);
			   };
					   
		</script>
		<div class="row panel">
			<div class="col-md-3"></div>
			<div class="col-md-6">
            <?php 
$exam = getTheoryExam_code($_GET['eid']);
while($row = $exam->fetch_array()){
	$subject_id = $row['subject_id'];
	$subj = getSubject_ids_Opp($subject_id);
	$subject = $subj["subject"];		
}

?>
<span class="title1" style="font-size:30px;"><center><b><?php if(@validate($subject)) echo $subject; ?></b></center></span>
<br/>
				<span class="title1" style="font-size:30px;"><center>View/Edit Theory Question</center>
				</span>
                <center><h4></h4></center>
				<h2>Progress</h2>		
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="alert alert-success hide"></div>	
					<?php	echo '<form id="user_form" novalidate action="exam_processor.php?q=edit_theory_qns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'"  method="post" enctype="multipart/form-data">';?>
					<?php
						$exam_id=@$_GET['eid'];
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
						
						for($i=1;$i<=@$_GET['n'];$i++)
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
						?>
									<fieldset>
									<h2>Question &nbsp: <?php echo $i; ?></h2>
									<div class="form-group">
									<label for="qns<?php echo $i?>">Write question <?php echo $i?> here...</label>
									<textarea rows="3" cols="5" name="qns<?php echo $i?>" class="form-control"><?php echo $qns; ?></textarea>
									</div>
									
									<div class="form-group">
									<label for="qnsimg<?php echo $i?>">Upload image for Question <?php echo $i?> here</label>
									<input type = "file"  name="qnsimg<?php echo $i?>" accept="image/*" onchange="loadFile(event)" class="form-control" > 
									</div>
									
									<div class="form-group"> 
										<img src="<?php if(@validate($qnsimg)){echo $qnsimg;} ?>" height="200" class="<?php if(!@validate($qnsimg)){echo "hide";} ?>" />
									</div>
									
									
									
									<p><b>---------------------Marking Scheme (Optional)----------------------</b></p>
									
									<div class="form-group">
									<label for="m_ans<?php echo $i?>">Answer to Question<?php echo $i?> </label>
									<textarea rows="3" cols="5" name="m_ans<?php echo $i?>" class="form-control"><?php echo $m_ans; ?></textarea>
									</div>
									
									<div class="form-group">
									<label for="m_ansimg<?php echo $i?>">Upload image answer for Question <?php echo $i?> here</label>
									<input type = "file" name="m_ansimg<?php echo $i?>" accept="image/*" onchange="loadFile(event)" class="form-control" > 
									</div>
									
									<div class="form-group"> 
										<img  src="<?php if(@validate($m_ansimg)){echo $m_ansimg;} ?>" height="200" class="<?php if(!@validate($m_ansimg)){echo "hide";} ?>"/>
									</div>
									
									
									
									<div class="form-group">
									<label for="mark<?php echo $i?>">Set Mark for Correct Answer</label>
									<input name="mark<?php echo $i?>" value="<?php echo $mark; ?>" class="form-control input-md" type="text">
									</div>
					   
									<?php
										if($i >= 1 && $i < $_GET['n'])
										{
											$show_next = "";
										}
										else
										{
											$show_next = "hide";
										}
										
										if($i > 1 && $i <= $_GET['n'])
										{
											$show_prev = "";
										}
										else
										{
											$show_prev = "hide";
										}
										
										if($i == $_GET['n'])
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
									<input type="submit" name="submit" class="submit btn btn-success <?php echo $show_subm;?>" value="Update" />
									</fieldset>	
	

<?php
			//$i++;		
			}
				
		
 
?>
</form>

			
</div>	
<div class="col-md-3"></div>

</div>

<?php
}
?>





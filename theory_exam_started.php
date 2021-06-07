<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/timing.js"></script>
<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php
if(@$_GET['q']==18 && (@$_GET['step'])==3) {
	

require_once 'library.php';
$t=@$_GET['t'] * 6000;
$naz = @$_GET['n'];
$eid = @$_GET['eid'];
$addtheoryans = "addtheoryans";
$ch = 4;

?>
<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
       var loadFile = function(event){
		   var output = document.getElementById('output');
		   output.src = URL.createObjectURL(event.target.files[0]);
	   };	  	   
</script>

<div class="row panel">
<div class="col-md-3">
<span class="title1" style="font-size:20px; color:#06C"><b>Time Left:</b> 
    
<span id="countdown" class="timer"> 
<script>
    var seconds = <?php echo $t; ?>;
	var naz =  <?php echo $naz; ?>;
	var eid =  "<?php echo $eid; ?>";
	var addtheoryans =  "<?php echo $addtheoryans; ?>";
	var ch =  "<?php echo $ch; ?>";
	
        function secondPassed()
		{
			var minutes = Math.round((seconds - 30)/60);
			var remainingSeconds = seconds % 60;
			if (remainingSeconds < 10) {
				remainingSeconds = "0" + remainingSeconds; 
			}
			document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
			if (seconds == 0)
			{
				setTimeout(function() 
				{
					document.getElementById('submit-btn').click();
					 //window.location.href = "obj_exam_started_process.php?q="+ addtheoryans +"&n="+ naz +"&eid="+ eid +"&ch="+ ch; 
				}, seconds);
			 }
			 else
			 {    
				seconds--;
			 }
        }
    	var countdownTimer = setInterval('secondPassed()', 1000);
</script>
</span>

</span>
</div>
<div class="col-md-6">
<center><span class="title1" style="font-size:30px;">Subject: <?php if(@validate($_SESSION['subject_id'])) echo $_SESSION['subject_id']; ?></span></center><br/>
<span class="title1" style="font-size:16px;"><center><b>Exam Instruction: <?php if(@validate($_SESSION['exam_instructions'])) echo $_SESSION['exam_instructions'];   ?></b></center></span>

	<h2>Progress</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
<?php	echo '<form id="user_form" novalidate action="theory_exam_started_process.php?q=addtheoryans&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4"  method="post" enctype="multipart/form-data">';?>
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
									<?php echo $qns; ?>
									</div>
									
									
									
									<div class="form-group"> 
										<img id = "output" src="<?php if(@validate($qnsimg)){echo $qnsimg;} ?>" height="200" class="<?php if(!@validate($qnsimg)){echo "hide";} ?>" />
									</div>
									
									<div class="form-group"> 
										<img id = "output" />
									</div><br/>
                                    
                                    <h3>Mark &nbsp: <?php echo "[".$mark." "."marks"."]"; ?></h3><br /><br />
									
									<p><b>---------------------Student Answer ----------------------</b></p>
									
									<div class="form-group">
									<label for="s_ans<?php echo $i?>">Answer to Question<?php echo $i?> </label>
									<textarea rows="3" cols="5" name="s_ans<?php echo $i?>" class="form-control" placeholder="Enter your answers here"></textarea>
									</div>
									
									
									
									
                                   <div class="form-group">
	<label for="s_ansimg<?php echo $i?>">Upload image for Question <?php echo $i?> here</label>
	<input type = "file"  name="s_ansimg<?php echo $i?>" accept="image/*" class="form-control" > 
   
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
									<input id = "submit-btn" type="submit" name="submit" class="submit btn btn-success <?php echo $show_subm;?>" value="Submit" />
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





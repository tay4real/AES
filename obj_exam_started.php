<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/timing.js"></script>
<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php
if(@$_GET['q']==17 && (@$_GET['step'])==3) {
	

require_once 'library.php';
$t=@$_GET['t'] * 60;
$naz = @$_GET['n'];
$eid = @$_GET['eid'];
$addans = "addans";
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
	var addans =  "<?php echo $addans; ?>";
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
					 //window.location.href = "obj_exam_started_process.php?q="+ addans +"&n="+ naz +"&eid="+ eid +"&ch="+ ch; 
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
<center><span class="title1" style="font-size:30px;">Subject: <?php if(@validate($_SESSION['subject_id'])) echo $_SESSION['subject_id']; ?></span></center>
	<h2>Progress</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
<?php	echo '<form id="user_form" novalidate action="obj_exam_started_process.php?q=addans&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4"  method="post">	';?>
<?php

	 		$exam_id=@$_GET['eid'];
			$question_id = get_question_id($exam_id);
			$ques = array();
			$count = mysqli_num_rows($question_id);
			
			if ($count > 0){
			while($row = $question_id->fetch_array()) 
			{
					$ques[] = $row;
					$_SESSION["qid"] = $ques;
				}
			}
			
		 	$get_obj_questions=get_obj_questions($exam_id);
	 		$i=1;
			
			$optionid = array();
			while($row=$get_obj_questions->fetch_array()){
				$question_id = $row['question_id'];
				$question_no = $row['question_no'];
				$qns = $row['question'];
				$qnsimg = $row['question_imagepath'];
				$_SESSION["qnsimg"] = $qnsimg;
				
				$get_obj_option = get_obj_option($question_id);
				
				$datas = array();
				$count = mysqli_num_rows($get_obj_option);
				
				if ($count > 0){
					while($row = $get_obj_option->fetch_array()) {
						$datas[] = $row;
					}
				}
				
				
				foreach ($datas[0] as $data){
					$a = $data;
				}
				foreach ($datas[1] as $data){
					$b = $data;
				}
				foreach ($datas[2] as $data){
					$c = $data;
				}
				foreach ($datas[3] as $data){
					$d = $data;
				}
				
				
				$get_obj_optionid = get_obj_optionid($question_id);
				
				
				$count = mysqli_num_rows($get_obj_optionid);
				$oid = array();
				if ($count > 0){
					while($row = $get_obj_optionid->fetch_array()) {
						$optionid[] = $row;
						$oid[] = $row;
						$_SESSION["oid"] = $optionid;
					}
				}
			
				foreach ($oid[0] as $data){
					$id_a = $data;
				}
				foreach ($oid[1] as $data){
					$id_b = $data;
				}
				foreach ($oid[2] as $data){
					$id_c = $data;
				}
				foreach ($oid[3] as $data){
					$id_d = $data;
				}
				
				$get_obj_answer = get_obj_answer($question_id);
				while($row = $get_obj_answer->fetch_array()) {
					$answer_id = $row['answer_id'];		
				}
				
				
?>

<fieldset>
	<h2>Question &nbsp: <?php echo $i; ?></h2>
	<div class="form-group">
	<?php echo $qns; ?>
	
	</div>
	
    <div class="form-group"> 
        <img id = "output" src="<?php if(@validate($qnsimg))echo $qnsimg; ?>" class="if(!@validate($qnsimg))echo "hide"; " />
    </div>
    
    <div class="form-group">
		(a)&nbsp;<input name="ans<?php echo $i?>" value="<?php echo $a; ?>" type="radio">&nbsp;<?php echo $a; ?>
	</div>
    <div class="form-group">
		(b)&nbsp;<input name="ans<?php echo $i?>" value="<?php echo $b; ?>" type="radio">&nbsp;<?php echo $b; ?>
	</div>
    <div class="form-group">
		(c)&nbsp; <input name="ans<?php echo $i?>" value="<?php echo $c; ?>" type="radio">&nbsp;<?php echo $c; ?>
	</div>
    <div class="form-group">
		(d)&nbsp;<input name="ans<?php echo $i?>" value="<?php echo $d; ?>" type="radio">&nbsp;<?php echo $d; ?>
	</div>
    
    <?php
				
		if($i >= 1 && $i < $_GET['n']){
			$show_next = "";
		}else{
			$show_next = "hide";
		}
		
		if($i > 1 && $i <= $_GET['n']){
			$show_prev = "";
		}else{
			$show_prev = "hide";
		}
		if($i == $_GET['n']){
			$show_subm = "";
		}else{
			$show_subm = "hide";
		}
	?>
    
	<input type="button" name="previous" class="previous btn btn-default <?php echo $show_prev;?>" value="Previous" />
	<input type="button" name="next" class="next btn btn-info <?php echo $show_next;?>" value="Next" />
    <input id = "submit-btn" type="submit" name="submit" class="submit btn btn-success <?php echo $show_subm;?>" value="Submit" />
	</fieldset>	

<?php
			$i++;		
			}
?>
</form>
		
</div>	
<div class="col-md-3"></div>

</div>

<?php
}
?>
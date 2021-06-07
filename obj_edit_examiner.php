

<script type="text/javascript" src="js/form.js"></script>

<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php
if(@$_GET['q']==17 && (@$_GET['step'])==3 ) {
require_once 'library.php';

?>
<script src="jquery-1.12.0.min.js" type="text/javascript"></script>


    <script type="text/javascript">
       var loadFile = function(event){
		   var output = document.getElementById('output');
		   output.src = URL.createObjectURL(event.target.files[0]);
	   };
	   	  	   
    </script>
<div class="row panel">
<div class="col-md-3"></div>
<div class="col-md-6">
<span class="title1" style="font-size:30px;"><center><b>View/Edit Question Details</b></center></span>
	<h2>Progress</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	

<?php	echo '<form id="user_form" novalidate action="exam_processor.php?q=editqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4"  method="post" enctype="multipart/form-data">	';?>
<?php

	 		$exam_id=@$_GET['eid'];
			$question_id = get_question_id($exam_id);
			$ques = array();
			$count = mysqli_num_rows($question_id);
			
			if ($count > 0)
			{
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
	<label for="qns<?php echo $i?>">Question Text</label>
	<textarea rows="3" cols="5" name="qns<?php echo $i?>" class="form-control"><?php echo $qns; ?></textarea>
	</div>
	<div class="form-group">
	<label for="qnsimg<?php echo $i?>">Upload image for Question <?php echo $i?> here</label>
	<input type = "file"  name="qnsimg<?php echo $i?>" accept="image/*" onchange="loadFile(event)" class="form-control" > 
   
	</div>
    <div class="form-group"> 
        <img id = "output" src="<?php if(@validate($qnsimg))echo $qnsimg; ?>" class="<?php if(!@validate($qnsimg))echo "hide"; ?>" />
    </div>
    <div class="form-group">
	<label for="<?php echo $i?>1">Option a</label>
	<input id="<?php echo $i?>1" name="<?php echo $i; ?>1" value="<?php echo $a; ?>" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="<?php echo $i?>2">Option b</label>
	<input id="<?php echo $i?>2" name="<?php echo $i?>2" value="<?php echo $b; ?>" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="<?php echo $i?>3">Option c</label>
	<input id="<?php echo $i?>3" name="<?php echo $i?>3" value="<?php echo $c; ?>" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="<?php echo $i?>4">Option d</label>
	<input id="<?php echo $i?>4" name="<?php echo $i?>4" value="<?php echo $d; ?>" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="ans<?php echo $i?>">Correct Option</label>
	<select id="ans<?php echo $i?>" name="ans<?php echo $i?>" placeholder="Choose correct answer " class="form-control input-md" >
       <option value="">Select answer for question <?php echo $i?></option>
      <option value="a" <?php if($id_a == $answer_id){
					echo "selected";
				} ?> >option a</option>
      <option value="b" <?php if($id_b == $answer_id){
					echo "selected";
				} ?> >option b</option>
      <option value="c" <?php if($id_c == $answer_id){
					echo "selected";
				} ?> >option c</option>
      <option value="d" <?php if($id_d == $answer_id){
					echo "selected";
				} ?>>option d</option> 
    </select>
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
    <input type="submit" name="submit" class="submit btn btn-success <?php echo $show_subm;?>" value="Update" />
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






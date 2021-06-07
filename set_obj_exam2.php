

<script type="text/javascript" src="js/form.js"></script>`


<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php
if(@$_GET['q']==16 && (@$_GET['step'])==2 ) {

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
if(@validate($_SESSION['subject_id'])){	
	$sub_id = $_SESSION['subject_id'];	
	$subj = getSubject_ids_Opp($sub_id);
	$subject = $subj["subject"];	
}
?>
<span class="title1" style="font-size:30px;"><center><b><?php if(@validate($subject)) echo $subject; ?></b></center></span>
<br/>
<span class="title2" style="font-size:30px;"><center>Enter Question Details</center></span>
	<h2>Progress</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
<?php	echo '<form  id="user_form" novalidate action="exam_processor.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4"  method="post" enctype="multipart/form-data">	';?>
<?php
	for($i=1;$i<=@$_GET['n'];$i++)
 {
?>

<fieldset>
	<h2>Question &nbsp: <?php echo $i; ?></h2>
	<div class="form-group">
    <label for="qns<?php echo $i?>">Question Text</label>
	<label for="qns<?php echo $i?>"></label>
	<textarea rows="3" cols="5" name="qns<?php echo $i?>" class="form-control" placeholder="Write question <?php echo $i?> here..."></textarea>
	</div>
	<div class="form-group">
	<label for="qnsimg<?php echo $i?>">Upload image for Question <?php echo $i?> here</label>
	<input type = "file"  name="qnsimg<?php echo $i?>" accept="image/*" onchange="loadFile(event)" class="form-control" > 
   
	</div>
    <div class="form-group"> 
        <img id = "output" />
    </div>
    <div class="form-group">
	<label for="<?php echo $i?>1">Enter Option a</label>
	<input id="<?php echo $i?>1" name="<?php echo $i?>1" placeholder="Enter option a" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="<?php echo $i?>2">Enter option b</label>
	<input id="<?php echo $i?>2" name="<?php echo $i?>2" placeholder="Enter option b" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="<?php echo $i?>3">Enter option c</label>
	<input id="<?php echo $i?>3" name="<?php echo $i?>3" placeholder="Enter option c" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="<?php echo $i?>4">Enter option d</label>
	<input id="<?php echo $i?>4" name="<?php echo $i?>4" placeholder="Enter option d" class="form-control input-md" type="text">
	</div>
    <div class="form-group">
	<label for="ans<?php echo $i?>">Choose correct answer</label>
	<select id="ans<?php echo $i?>" name="ans<?php echo $i?>" placeholder="Choose correct answer " class="form-control input-md" >
       <option value="">Select answer for question <?php echo $i?></option>
      <option value="a">option a</option>
      <option value="b">option b</option>
      <option value="c">option c</option>
      <option value="d">option d</option> 
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
    <input type="submit" name="submit" class="submit btn btn-success <?php echo $show_subm;?>" value="Submit" />
	</fieldset>	
	

<?php
 }
?>
</form>

			
</div>	
<div class="col-md-3"></div>

</div>

<?php
}
?>






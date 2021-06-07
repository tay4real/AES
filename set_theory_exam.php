

<script type="text/javascript" src="js/form.js"></script>`


<style type="text/css">
  #user_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>

<?php

if(@$_GET['q']==22 && (@$_GET['step'])==2 ) {
if(isset($_SESSION['subject'])){
	$subject = $_SESSION['subject'];
	//$exam_id = $_SESSION['exam_id'];
	//echo $exam_id;
//require_once 'library.php';


}
//$exam_id = $_GET["eid"];
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
<span class="title1" style="font-size:30px;"><center><b>Set Theory Question Details </b></center></span>
	<center><h4><?php if(isset($subject)) echo $subject ?> </h4></center>
	<h3>Progress</h3>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
<?php	echo '<form  id="user_form" novalidate action="set_theory_exam_examiner.php?q=addqnstheory&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=1"  method="post" enctype="multipart/form-data">	';?>

<?php

?>

<?php
	for($i=1;$i<=@$_GET['n'];$i++)
		//$result = mysqli_query($con, "select DISTINCT * from theory_questions WHERE exam_id='" . $exam_id . "'");
		//$row = mysqli_fetch_array($result);
		//$exam_id= $row["exam_id"];
		//$qns = $row["question"];
 {
?>
	

<fieldset>
	<h2>Question &nbsp: <?php echo $i; ?></h2>
	<div class="form-group">
	<label for="qns<?php echo $i?>">Write question <?php echo $i?> here...</label>
	<textarea rows="3" cols="5" name="qns<?php echo $i?>" class="form-control" placeholder=""></textarea>
	</div>
	<div class="form-group">
	<label for="qnsimg<?php echo $i?>">Upload image for Question <?php echo $i?> here</label>
	<input type = "file"  name="qnsimg<?php echo $i?>" accept="image/*" onchange="loadFile(event)" class="form-control" > 
   
	</div>
    
    <p><b>---------------------Marking Scheme (Optional)----------------------</b></p>
	<div class="form-group">
	<label for="m_ans<?php echo $i?>">Answer to Question<?php echo $i?> </label>
	<textarea rows="3" cols="5" name="m_ans<?php echo $i?>" class="form-control" placeholder=""></textarea>
	</div>
	<div class="form-group">
	<label for="m_ansimg<?php echo $i?>">Upload image answer for Question <?php echo $i?> here</label>
	<input type = "file"  name="m_ansimg<?php echo $i?>" accept="image/*" onchange="loadFile(event)" class="form-control" > 
   
	</div>
    <div class="form-group"> 
        <img id = "ansoutput" />
    </div>
    <div class="form-group">
	<label for="<?php echo $i?>4">Set Mark for Correct Answer</label>
	<input name="mark<?php echo $i?>" placeholder="Set Mark for Correct Answer" class="form-control input-md" type="text">
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






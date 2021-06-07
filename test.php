
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
		
		<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Regno</b></td><td><b>School Name</b></td><td><b>Subject</b></td><td><b>Class</b></td><td></td><td></td></tr>';
		$c=1;
		


$Fetch=Fetch();
		while($row=$Fetch->fetch_array() )
		{		

					
			echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td><a href="dash_admin.php?q=30&e='.$exam_id.'&examiner_id='.$examiner_id.'&regno='.$regno.'&name='.$name.'&class_id='.$class_id.'&subject_id='.$subject_id.'">'.$regno.'</a></td><td>'.$school_name.'</td><td>'.$subject_id.'</td><td>'.$class_id.'</td>
			
			<td> <a title="Delete OBJ Question" onclick="return verifyDelete()" href="update.php?del_obj_question='.$exam_id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
			
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




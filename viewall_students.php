<?php
require_once 'library.php';

$allStudents=get_AllStudents();
?>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_student.php",data:{"name":$("#name").val()}}).done(function(msg){
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

<form name="form1" method="post" action="">
<input name="name" placeholder="Search by name/regno/mobile number" type="text" id="name" size="150" onkeyup="doSearch()">
  <div id="result">

  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="table table-striped title1" style="margin-left:40%;font-size:30px;"><center><img src="image/view_student.png" /></center></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Username</b></td><td><b>Gender</b></td><td><b>Class</b></td><td><b>Regno</b></td><td><b>Mobile</b></td><td></td></tr>';
		$c=1;
		while($row=$allStudents->fetch_array()) {
			$name = $row['name'];
			$username = $row['username'];
			$mob = $row['mob'];
			$gender = $row['gender'];
			$regno = $row['regno'];
			$cc = $row['class_id'];
			$school_id = $row['school_id'];
		
			$getClass_ids = getClass_ids($cc);
			while($row3=$getClass_ids->fetch_array()){
			$class = $row3['class'];
			}
			

			echo '<tr><td>'.$c++.'</td><td><a href = "dash_admin.php?q=18&regno='.$regno.'">'.$name.'</a></td><td>'.$username.'</td><td>'.$gender.'</td><td>'.$class.'</td><td>'.$regno.'</td><td>'.$mob.'</td>
		<td><a title="Delete Student" onclick="return verifyDelete()" href="update.php?dregno='.$regno.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




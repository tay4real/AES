<?php
require_once 'library.php';

$allExaminers=get_AllExaminers();


?>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_examiner.php",data:{"name":$("#name").val()}}).done(function(msg){
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
<input name="name" placeholder="Search by name or username" type="text" id="name" size="150" onkeyup="doSearch()">
  <div class="row" id = "result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/view_examiner.png" /></center></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>Full Name</b></td><td><b>Examiner ID</b></td><td><b>Username</b></td><td><b>Gender</b></td><td><b>School Name</b></td><td><b>Subjects</b></td><td></td></tr>';
		$c=1;
		while($row=$allExaminers->fetch_array() ) {
			
			
			$name = $row['fullname'];
			$examiner_id = $row['examiner_id'];
			if(@validate($row['username'])){
				$username = $row['username'];
			}else{
				$username = "Not set";
			}
			
			$gender = $row['gender'];
			$school_id = $row['school_id'];
			$subject = $row['subject'];
			$id = $row['id'];
			$y = explode(';',$subject);
			
			$allSchools = getSchool($school_id);
			while($row3=$allSchools->fetch_array()){
				$school_name = $row3['school_name'];
			}
			

			echo '<tr><td>'.$c++.'</td><td><a href = "dash_admin.php?q=19&e='.$examiner_id.'">'.$name.'</a></td><td>'.$examiner_id.'</td><td>'.$username.'</td><td>'.$gender.'</td><td>'.$school_name.'</td><td>';foreach($y as $subject){
				echo $subject . " - ";
			}echo'</td><td> <a title="Delete Examiner" onclick="return verifyDelete()" href="update.php?del_examiner='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




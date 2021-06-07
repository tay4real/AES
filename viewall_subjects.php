<?php
require_once 'library.php';

$allSubjects=get_AllSubjects();

?>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_subject.php",data:{"name":$("#name").val()}}).done(function(msg){
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
<input name="name" placeholder="Search Subject by school name" type="text" id="name" size="150" onkeyup="doSearch()">
  <div id="result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/view_subject.png" /></center></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>School Name</b></td><td><b>Class</b></td><td><b>Subject(s)</b></td><td></td></tr>';
		$c=1;
		
		
		while($row=$allSubjects->fetch_array() ) {
			
			$subj = $row['subject'];
			$y = explode(';',$subj);	
			
			
			$school_id = $row['school_id'];
			$class_id = $row['class_id'];
			$id = $row['id'];
			$sql = "SELECT * FROM schools WHERE id= '$school_id'";

			$result = mysqli_query($con,$sql);
		
			while( $row = mysqli_fetch_array($result) ){
				$school_name = $row['school_name'];	
			}
			
			$sql = "SELECT * FROM class_ids WHERE id= '$class_id'";

			$result = mysqli_query($con,$sql);
		
			while( $row = mysqli_fetch_array($result) ){
				$class = $row['class'];	
			}
		
			
			echo '<tr><td>'.$c++.'</td><td>'.$school_name.'</td><td>'.$class.'</td><td>';foreach($y as $class){
				echo $class . " - ";
			} echo '</td><td> <a title="Delete School" onclick="return verifyDelete()" href="update.php?del_subject='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




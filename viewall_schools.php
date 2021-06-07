<?php
require_once 'library.php';

$allSchools=get_AllSchools();
$allClasses=get_AllClasses();
?>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"search_school.php",data:{"name":$("#name").val()}}).done(function(msg){
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
<input name="name" placeholder="Search by school_name/school_code" type="text" id="name" size="150" onkeyup="doSearch()">
  <div id="result">
  	<?php
		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/view_all_sch.png" /></center></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>School Name</b></td><td><b>School Code</b></td><td><b>Classes</b></td><td></td></tr>';
		$c=1;
		while($row=$allSchools->fetch_array() ) {
			
			
			$name = $row['school_name'];
			$id = $row['id'];
			$code = $row['school_code'];
			while($row2=$allClasses->fetch_array()){
				$classes = $row2['classes'];
				$y = explode(';',$classes);
			}

			echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$code.'</td><td>';foreach($y as $class){
				echo $class . "-";
			}echo'</td><td> <a title="Delete School" onclick="return verifyDelete()" href="update.php?del_school='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>
  </div>
</form>




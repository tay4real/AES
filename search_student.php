<?php
require_once 'library.php';
$allStudents=searchStudent($_POST["name"]);

	echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="table table-striped title1" style="margin-left:40%;font-size:30px;"><b>View All Students</b></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>School</b></td><td><b>Regno</b></td><td><b>Mobile</b></td><td></td></tr>';
		$c=1;
		while($row=$allStudents->fetch_array()) {
			$name = $row['name'];
			$mob = $row['mob'];
			$gender = $row['gender'];
			$regno = $row['regno'];
			$class_id = $row['class_id'];
			
			$res = getClass($class_id);

			while( $row = mysqli_fetch_array($res) ){
				$c = $row['classes'];	
			}
		
			echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$c.'</td><td>'.$regno.'</td><td>'.$mob.'</td>
		<td><a title="Delete Student" onclick="return verifyDelete()" href="update.php?dregno='.$regno.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
		}
		$c=0;
		echo '</table></div></div>'; 

?>

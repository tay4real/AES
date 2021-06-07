<?php
require_once 'library.php';
$allSchools=searchSchool($_POST["name"]);
$allClasses=get_AllClasses();


		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><b>View All Schools</b></span><br /><br />
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
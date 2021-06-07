<?php
require_once 'dbConnection.php';
require_once 'library.php';

$result1 = mysqli_query($con, "select id from schools where school_name like '%".$_POST["name"]."%'");
$row3 = mysqli_fetch_array($result1);

if ($row3 > 0)
{
	$id = $row3["id"];
}

$allSubjects=searchSubject($id);

echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><b>View All Subject(s)</b></span><br /><br />
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
			}echo'</td><td> <a title="Delete School" onclick="return verifyDelete()" href="update.php?del_subject='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		</tr>';
		}
		$c=0;
		echo '</table></div></div>';

?>
<?php
require_once 'library.php';
$allExaminers=searchExaminer($_POST["name"]);
//$allSubjects=get_AllSubjects();
//$allExaminers=get_AllExaminers();


		
		echo  '<div class="panel"><div class="table-responsive" style="overflow:scroll;max-height:430px ">
		<span class="title1" style="margin-left:40%;font-size:30px;"><b>View All Examiners</b></span><br /><br />
		<table class="table table-striped title1">
		<tr><td><b>S.N.</b></td><td><b>Full Name</b></td><td><b>Username</b></td><td><b>Gender</b></td><td><b>School Name</b></td><td><b>Subjects</b></td><td></td></tr>';
		$c=1;
		while($row=$allExaminers->fetch_array() ) {
			
			
			$name = $row['fullname'];
			$username = $row['username'];
			$gender = $row['gender'];
			$school_id = $row['school_id'];
			$subject = $row['subject'];
			$id = $row['id'];
			$y = explode(';',$subject);
			
			$allSchools = getSchool($school_id);
			while($row3=$allSchools->fetch_array()){
				$school_name = $row3['school_name'];
			}
			

			echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$username.'</td><td>'.$gender.'</td><td>'.$school_name.'</td><td>';foreach($y as $subject){
				echo $subject . "-";
			}echo'</td><td> <a title="Delete Examiner" onclick="return verifyDelete()" href="update.php?del_examiner='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a> </td>
		</tr>';
		}
		$c=0;
		echo '</table></div></div>'; 
?>

?>
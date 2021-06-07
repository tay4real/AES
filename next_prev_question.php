<?php
session_start();
$_SESSION['capnum'] = ((isset($_SESSION['capnum']))? $_SESSION['capnum']: 1);
if(isset($_GET['next'])){
	if($_SESSION['capnum'])
	$_SESSION['capnum']++;	
}
if(isset($_GET['previous'])){
	$_SESSION['capnum']--;	
}
if($_SESSION["account_type"] == 'Admin'){
	$exam_id = $_SESSION['eid'];
	$no_of_questions = $_SESSION['n'];
	header("location:dash_admin.php?q=16&step=2&eid=$exam_id&n=$no_of_questions");
}else if($_SESSION["account_type"] == 'Examiner'){
	$_SESSION['capnum']++;	
	header("location:dash_examiner.php?q=16");
}
?>
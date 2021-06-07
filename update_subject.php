<?php
session_start();
include_once 'dbConnection.php';
require_once 'library.php';


	if(isset($_SESSION['examiner_id'])){
		$examiner_id = $_SESSION['examiner_id'];
	}
	$examiner = getExaminer($examiner_id);	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		
	
	$subj=$_POST['more_sub'];
	

			//$subject=implode(";",$_POST["sub"]);
			
		
		//$regno = $_SESSION['regno'];
		$getSubject = getSubject($examiner_id);	
			while($row3=$getSubject->fetch_array()){
			$all_subj = $row3['subject'];
			}
		
		$all_subject = $all_subj.";".$subj;
		
    	$query = "UPDATE examiner SET subject = '$all_subject' WHERE examiner_id='$examiner_id'";//change query according to you
    	
    
    	
			if(mysqli_query($con, $query) or die('Error, query failed')){
				
				
				
				
			$_SESSION['success_msg']= "Your profile has been successfully UPDATED!";
			header('Location: dash_examiner.php?q=1');
			}else{
			$_SESSION['err_msg']= "Update Failed";
			header('location:dash_examiner.php?q=0');
		}
		
}

	
?>
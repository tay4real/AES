
<?php
session_start();
include_once 'dbConnection.php';
require_once 'library.php';


	if(isset($_SESSION['examiner_id'])){
		$examiner_id = $_SESSION['examiner_id'];
	}
	$examiner = getExaminer($examiner_id);	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		function check_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		
	if(!isset($_POST['name']))
	{$name = $examiner_id["name"];}
	$name=check_input($_POST['name']);
	

	if(!isset($_POST['username']))
	{$username = $examiner_id["username"];}
	$username=check_input($_POST['username']);

	if(!isset($_POST['email']))
	{$email = $examiner_id["email"];}
	$email=check_input($_POST['email']);
	
	if(!isset($_POST['gender']))
	{$gender = $examiner_id["gender"];}
	$gender=check_input($_POST['gender']);

	
	if(!isset($_POST['mob']))
	{$mob = $examiner_id["mob"];}
	$mob=check_input($_POST['mob']);



	
		 if(!get_magic_quotes_gpc())
		{
			$name = addslashes($name);
			$username = addslashes($username);
			$email = addslashes($email);	
			$gender = addslashes($gender);
			$mob = addslashes($mob);
		} 
			
			$subject=implode(";",$_POST["subjects"]);
			
		
		//$regno = $_SESSION['regno'];
    	$query = "update examiner set fullname = '$name', username = '$username', email = '$email', gender = '$gender', mob = '$mob', subject = '$subject' WHERE examiner_id='$examiner_id'";//change query according to you
    		
			if(mysqli_query($con, $query) or die('Error, query failed'))
			{		
				$_SESSION['success_msg']= "Profile Updated Successfully!";
				header('Location: dash_admin.php?q=19&e='.$examiner_id.'');
			}
			else
			{
				$_SESSION['err_msg']= "Update Failed";
				header('location:dash_admin.php?q=19&e='.$examiner_id.'');
			}
		
}

	
?>
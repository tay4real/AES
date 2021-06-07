<?php

include_once 'dbConnection.php';
require_once 'library.php';
$ref=@$_GET['q'];

if(@validate($_POST["admin_user"]) && @validate($_POST["admin_pass"])){
	session_start();
	$admin_user = $_POST["admin_user"];
	$admin_pass = $_POST["admin_pass"];
	
	$adm_user = stripslashes($admin_user);
	$adm_user = addslashes($adm_user);
	$pass = stripslashes($admin_pass); 
	$pass = addslashes($pass);
	if(isAdmin($admin_user,$admin_pass)){
		$admin = getAdmin($admin_user);
		if(isset($_SESSION['admin_user'])){session_unset();}
		$_SESSION["name"] = 'Admin';
		$_SESSION["account_type"] = 'Admin';
		$_SESSION["key"] ='sunny7785068889';
		$_SESSION["admin_user"] = $admin["username"];
		header("location:dash_admin.php?q=0");
	}else{
		header("location:$ref?w=Warning : Access Denied - Login details incorrect");
	}	
}
else
if(@validate($_POST["examiner_id"]) && @validate($_POST["examiner_pass"])){
	session_start();
	$examiner_id = $_POST["examiner_id"];
	$examiner_pass = $_POST["examiner_pass"];
	
	$examiner_id = stripslashes($examiner_id);
	$examiner_id = addslashes($examiner_id);
	$examiner_pass = stripslashes($examiner_pass); 
	$examiner_pass = addslashes($examiner_pass);
	if(isExaminer($examiner_id,$examiner_pass)){
		$examiner = get_Examiner($examiner_id);
		if(isset($_SESSION['examiner_id'])){session_unset();}
		$_SESSION["name"] = $examiner["fullname"];
		$_SESSION["account_type"] = 'Examiner';
		$_SESSION["key"] ='sunny7785068889';
		$_SESSION["examiner_id"] = $examiner["examiner_id"];
	
		header("location:dash_examiner.php?q=0");
	}else{
		header("location:$ref?w=Warning : Access Denied - Login details incorrect");
	}
}
else
if(@validate($_POST["student_examno"]) && @validate($_POST["student_pass"])){
	session_start();
	$student_examno = $_POST["student_examno"];
	$student_pass = $_POST["student_pass"];
	
	$student_examno = stripslashes($student_examno);
	$student_examno = addslashes($student_examno);
	$student_pass = stripslashes($student_pass); 
	$student_pass = addslashes($student_pass);
	if(isStudent($student_examno,$student_pass)){
		$student = get_Student($student_examno);
		if(isset($_SESSION['student_examno'])){session_unset();}
		$_SESSION["name"] = $student["name"];
		$_SESSION["account_type"] = 'Student';
		$_SESSION["key"] ='sunny7785068889';
		$_SESSION["regno"] = $student["regno"];
		header("location:dash_student.php?q=0");
	}else{
		header("location:$ref?w=Warning : Access Denied - Login details incorrect");
	}		
}
else
{
	header("location:$ref?w=Warning : Access Denied - Login details incorrect");
}


?>
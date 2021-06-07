<?php
include "dbConnection.php";

$score = $_POST['score'];   // student score
$mark = $_SESSION['mark'];

if($score <= $mark){
	$s = "true";
}else{
	$s = "false";
}

$users_arr[] = array("id" => $s );
// encoding array to json format
echo json_encode($users_arr);
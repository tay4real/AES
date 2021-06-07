<?php
include "dbConnection.php";

$schoolid = $_POST['school'];   // department id
$classid = $_POST['class'];

$sql = "SELECT subject FROM subject WHERE school_id= '$schoolid' AND class_id= '$classid' ";

$result = mysqli_query($con,$sql);

$subj_arr = array();

while( $row = mysqli_fetch_array($result) ){
    
    $subject = $row['subject'];

    //$users_arr[] = array("id" => $userid, "name" => $name);
	$y = explode(';',$subject);
	
	foreach($y as $sub){
		
		$subj_arr[] = array("id" => $sub);
	}
	
	
}

// encoding array to json format
echo json_encode($subj_arr);
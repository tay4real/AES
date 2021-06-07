<?php
include "dbConnection.php";

$school_id = $_POST['school'];   // department id

$sql = "SELECT id,classes FROM classes WHERE school_code=".$school_id;

$result = mysqli_query($con,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['id'];
    $name = $row['classes'];

    //$users_arr[] = array("id" => $userid, "name" => $name);
	$y = explode(';',$name);
	
	
	foreach($y as $class){
				
		$result = mysqli_query($con,"SELECT * FROM class_ids WHERE class = '$class'") or die('Error in Connection');
		
		while($row = mysqli_fetch_assoc($result) ){
			$class_id = $row['id'];
		}
		
		$users_arr[] = array("id" => $class_id, "name" => $class );
	}
	
	
}

// encoding array to json format
echo json_encode($users_arr);
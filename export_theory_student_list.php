<?php
//$course_of_study = "Law";
  /***** EDIT BELOW LINES *****/
  $DB_Server = "localhost"; // MySQL Server
  $DB_Username = "root"; // MySQL Username
  $DB_Password = ""; // MySQL Password
  $DB_DBName = "aes"; // MySQL Database Name
  $DB_TBLName = "theory_student_result"; // MySQL Table Name
  $xls_filename = 'export_student_list'.'-'.date('Y-m-d').'.xls'; // Define Excel (.xls) file name
  $exam_id = $_GET["e"];
  /***** DO NOT EDIT BELOW LINES *****/
  // Create MySQL connection
  
  $Connect = mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_DBName) or die("Failed to connect to MySQL:<br />" . mysqli_error($Connect) . "<br />" . mysql_errno($Connect));
  $output = '';
  
  $sql = "Select exam_id, school_name, name, regno, class_id, subject_id, score FROM $DB_TBLName WHERE exam_id ='$exam_id'";
  $result = mysqli_query($Connect, $sql) or die("Failed to execute query:<br />" . mysqli_error($Connect) . "<br />" . mysql_errno($Connect));
   
  // Header info settings
  header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename=$xls_filename");
 
   
  /***** Start of Formatting for Excel *****/
  // Define separator (defines columns in excel &amp; tabs in word)
  $sep = "\t"; // tabbed character
   
  // Start of printing column names as names of MySQL fields
  for ($i = 0; $i<mysqli_num_fields($result); $i++) {
    while($fieldinfo = mysqli_fetch_field($result)){
		echo $fieldinfo->name . "\t";
  	}
  }
  print("\n");
  
  // End of printing column names
   
  // Start while loop to get data
  while($row = mysqli_fetch_row($result))
  {
    $schema_insert = "";
    for($j=0; $j<mysqli_num_fields($result); $j++)
    {
      if(!isset($row[$j])) {
        $schema_insert .= "NULL".$sep;
      }
      elseif ($row[$j] != "") {
        $schema_insert .= "$row[$j]".$sep;
      }
      else {
        $schema_insert .= "".$sep;
      }
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
  }
?>
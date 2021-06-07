<?php
include_once 'dbConnection.php';
include_once 'library.php';
//session_start();
$exam_code = md5($_POST["exam_code"]);
$regno = $_SESSION["regno"];
$name = $_SESSION["name"];


if(@$_GET['q']==15)
	{
	$right = 0;
	$wrong = 0;
	if (count($_POST) > 0)
		{
			$result = mysqli_query($con, "select * from obj_exam_submitted where exam_id = '$exam_code' AND regno = '$regno'");
			$row = mysqli_fetch_array($result);
			//$exam_id= $row["exam_id"];
			$subject_id = $row["subject_id"];
				if ($row < 1)
					{
						$err_msg = "You do not have the require credential(s) to check result for this exam!. Contact the administrator!.";
						echo "<script type='text/javascript'>alert('$err_msg');
						window.location.href='dash_student.php?q=5';</script>";
					}
				else
					{
						$sql ="SELECT answer_id, correct_answer_id, result, subject_id FROM obj_exam_submitted WHERE exam_id = '$exam_code' AND regno = '$regno'";
						if ($result = $con->query($sql))
							{
								while ($row = $result->fetch_assoc()) 
									{
										$res = $row["result"];
										//echo "1st result=".$res."<br>";
										
										if ($res == "correct")
											{
												$right = $right + 1;
												//echo "right=".$right."<br>";
											}
										else
											{
												if ($res == "wrong") 
												{$wrong = $wrong + 1;
												//echo "wrong=".$wrong."<br>";
												}
											}
									}
							$total = $right + $wrong;
							//$final_result = $right."|".$total;
							$final_result = (($right/$total) * 100);
							$sc = round($final_result,0);
							$score = $sc."%";
							}
					}
		}
	}
?>

<center>
<div class="row" style="background-color:#fff; padding-top:10px">			
<font size="+6"><b><u>Your Result</u></b></font><br /><br />
<font size="+2">
<?php echo "<strong>".$name."</strong>"; ?>, your result for <b>
<?php $e_name = getSubject_ids_Opp($subject_id);
				
						$subject_id = $e_name['subject'];
					
			

echo $subject_id; 

 ?></b>&nbsp;is given below:<br /><br />
                          <font size="+1">
                          <table>
                          
                           <tr><td>Registration no.:&nbsp;&nbsp;&nbsp;</td><td><?php echo $regno; ?></td></tr>
                          <tr><td>Total Questions:&nbsp;&nbsp;&nbsp;</td><td><?php echo $total; ?></td></tr>
                          <tr><td>Correct answers.:&nbsp;&nbsp;&nbsp;</td><td><?php echo $right; ?></td></tr>
                          <tr><td>Wrong answers:&nbsp;&nbsp;&nbsp;</td><td><?php echo $wrong; ?></td></tr>
                          <tr><td colspan="2"><hr /></td></tr>
                          <tr><th><font color="green" size="+5">Score:</font>&nbsp;&nbsp;&nbsp;</td><th><font color="green" size="+5"><?php echo $score; ?></font></th></tr>
                          
                          </table>
                              <br />
                               
                          </font> 

</font> 

<p>



</div>
</center>

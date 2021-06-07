<?php
include_once 'dbConnection.php';
include_once 'library.php';
session_start();
//$regno=$_SESSION['regno'];


//add school

if(isset($_SESSION['key']))
{
	if(@$_GET['q']=='addschool' && $_SESSION['key']=='sunny7785068889' && $_POST['school_name'] != "" && $_POST['school_code'] != "" && $_POST['classes']!= ""  )
	{
		$school_name = strtoupper(trim($_POST['school_name']));
		$school_name = stripslashes($school_name);
		$school_name = addslashes($school_name);
		$school_code = strtoupper(trim($_POST['school_code']));
		$school_code = stripslashes($school_code);
		$school_code = addslashes($school_code);
		$classes=implode(";",$_POST["classes"]);
		
		//$ref=@$_GET['q'];
		$result = mysqli_query($con,"SELECT school_code FROM schools WHERE school_code = '$school_code'") or die('Error in Connection');
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
		$errmsg="School already EXIST";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=1';</script>";
		}
		else
		{
		$result1=mysqli_query($con,"INSERT INTO schools VALUES  ('','$school_code','$school_name')");
		
		$sql = "SELECT id FROM schools WHERE school_code= '$school_code'";

			$result = mysqli_query($con,$sql);
		
			while( $row = mysqli_fetch_array($result) ){
				$school_id = $row['id'];	
			}
		
		$result2=mysqli_query($con,"INSERT INTO classes VALUES  ('','$school_id','$classes')");
		$errmsg="School account successfully created";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash_admin.php?q=2';</script>";
		}
	}
	else
	{
	$errmsg="Enter School details to be added";
	echo "<script type='text/javascript'>alert('$errmsg');
	window.location.href='dash_admin.php?q=1';</script>";
	}
	//header('location:dash.php?q=6=$errmsg');
}

//delete examiner
if(isset($_SESSION['key'])){
if(@$_GET['del_examiner'] && $_SESSION['key']=='sunny7785068889') {
$del_examiner=@$_GET['del_examiner'];
$r1 = mysqli_query($con,"DELETE FROM examiner WHERE id='$del_examiner' ") or die('Error');


header("location:dash_admin.php?q=8");
}
}

//delete school
if(isset($_SESSION['key'])){
if(@$_GET['del_school'] && $_SESSION['key']=='sunny7785068889') {
$del_school=@$_GET['del_school'];
$r1 = mysqli_query($con,"DELETE FROM schools WHERE id='$del_school' ") or die('Error');
$r1 = mysqli_query($con,"DELETE FROM classes WHERE school_code='$del_school' ") or die('Error');
$r1 = mysqli_query($con,"DELETE FROM student WHERE school_id='$del_school' ") or die('Error');
$r1 = mysqli_query($con,"DELETE FROM subject WHERE school_id='$del_school' ") or die('Error');
$r1 = mysqli_query($con,"DELETE FROM examiner WHERE school_id='$del_school' ") or die('Error');

header("location:dash_admin.php?q=2");
}
}

//delete subject
if(isset($_SESSION['key'])){
if(@$_GET['del_subject'] && $_SESSION['key']=='sunny7785068889') {
$del_subject=@$_GET['del_subject'];
$r1 = mysqli_query($con,"DELETE FROM subject WHERE id='$del_subject' ") or die('Error');


header("location:dash_admin.php?q=6");
}
}



//delete feedback
if(isset($_SESSION['key'])){
if(@$_GET['fdid'] && $_SESSION['key']=='sunny7785068889') {
$id=@$_GET['fdid'];
$result = mysqli_query($con,"DELETE FROM feedback WHERE id='$id' ") or die('Error');
header("location:dash.php?q=3");
}
}

//delete student
if(isset($_SESSION['key'])){
if(@$_GET['dregno'] && $_SESSION['key']=='sunny7785068889') {
$dregno=@$_GET['dregno'];
$r1 = mysqli_query($con,"DELETE FROM student WHERE regno='$dregno' ") or die('Error');
header("location:dash_admin.php?q=4");
}
}

//delete obj question
if(isset($_SESSION['key']) && isset($_SESSION["account_type"])){
	if(@$_GET['del_obj_question'] && $_SESSION['key']=='sunny7785068889' && $_SESSION["account_type"] == 'Admin'  ||  $_SESSION["account_type"] == 'Examiner') {
		
		$exam_id=@$_GET['del_obj_question'];
	
		$getQuestion = get_obj_questions($exam_id);
		
		while($row = $getQuestion->fetch_array()){
			$image_path = $row['question_imagepath'];
			unlink($image_path);
		}
		
			$r1 = mysqli_query($con,"DELETE FROM obj_exam WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM obj_exam_audit WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM obj_questions WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM obj_options WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM obj_answer WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM obj_exam_submitted WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM obj_student_result WHERE exam_id='$exam_id'") or die('Error');
			$r1 = mysqli_query($con,"DELETE FROM result_aggregate WHERE exam_id='$exam_id'") or die('Error');
		
			if($_SESSION["account_type"] == 'Admin')
			{
				header("location:dash_admin.php?q=31");
			}
			else if($_SESSION["account_type"] == 'Examiner')
			{
				header("location:dash_examiner.php?q=4");
			}
		
	}
}

if(isset($_SESSION['key'])){
if(@$_GET['del_theory_question'] && $_SESSION['key']=='sunny7785068889') {


	$exam_id=@$_GET['del_theory_question'];
		
	$getQuestion = get_Theory_questions($exam_id);
	
	while($row = $getQuestion->fetch_array()){
		$question_path = $row['question_imagepath'];
		$answer_path = $row['answer_imagepath'];		
		unlink($question_path);
		unlink($answer_path);
	}
	$r1 = mysqli_query($con,"DELETE FROM theory_exam WHERE exam_id='$exam_id' ") or die('Error');
	$r1 = mysqli_query($con,"DELETE FROM theory_exam_audit WHERE exam_id='$exam_id' ") or die('Error');
	$r1 = mysqli_query($con,"DELETE FROM theory_questions WHERE exam_id='$exam_id' ") or die('Error');
	$r1 = mysqli_query($con,"DELETE FROM theory_exam_submitted WHERE exam_id='$exam_id' ") or die('Error');
	$r1 = mysqli_query($con,"DELETE FROM theory_student_result WHERE exam_id='$exam_id' ") or die('Error');
	
	
	header("location:dash_admin.php?q=32");
	}
}

//remove exam
if(isset($_SESSION['key'])){
if(@$_GET['q']== 'rmexam' && $_SESSION['key']=='sunny7785068889') {
$eid=@$_GET['eid'];
$result = mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$qid = $row['qid'];
$r1 = mysqli_query($con,"DELETE FROM options WHERE qid='$qid'") or die('Error');
$r2 = mysqli_query($con,"DELETE FROM answer WHERE qid='$qid' ") or die('Error');
}
$r3 = mysqli_query($con,"DELETE FROM questions WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($con,"DELETE FROM exam WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($con,"DELETE FROM history WHERE eid='$eid' ") or die('Error');

header("location:dash.php?q=5");
}
}

//add exam
if(isset($_SESSION['key'])){
if(@$_GET['q']== 'addexam' && $_SESSION['key']=='sunny7785068889') {
$name = $_POST['title'];
$name= ucwords(strtolower($name));
$total = $_POST['total'];
$right = $_POST['right'];
$wrong = $_POST['wrong'];
$time = $_POST['time'];
//$tag = $_POST['tag'];
$intro = $_POST['intro'];
$id=uniqid();
$q3=mysqli_query($con,"INSERT INTO exam VALUES  ('$id','$name' , '$right' , '$wrong','$total','$time' ,'$intro', NOW())");

header("location:obj_question.php?q=4&step=2&eid=$id&n=$total");
}
}






//add question
if(isset($_SESSION['key'])){
if(@$_GET['q']== 'addqns' && $_SESSION['key']=='sunny7785068889') {
$n=@$_GET['n'];
$eid=@$_GET['eid'];
$ch=@$_GET['ch'];

for($i=1;$i<=$n;$i++)
 {
 $qid=uniqid();
 $qns=$_POST['qns'.$i];
$q3=mysqli_query($con,"INSERT INTO questions VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");
  $oaid=uniqid();
  $obid=uniqid();
$ocid=uniqid();
$odid=uniqid();
$a=$_POST[$i.'1'];
$b=$_POST[$i.'2'];
$c=$_POST[$i.'3'];
$d=$_POST[$i.'4'];
$qa=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$a','$oaid')") or die('Error61');
$qb=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$b','$obid')") or die('Error62');
$qc=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$c','$ocid')") or die('Error63');
$qd=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$d','$odid')") or die('Error64');
$e=$_POST['ans'.$i];
switch($e)
{
case 'a':
$ansid=$oaid;
break;
case 'b':
$ansid=$obid;
break;
case 'c':
$ansid=$ocid;
break;
case 'd':
$ansid=$odid;
break;
default:
$ansid=$oaid;
}


$qans=mysqli_query($con,"INSERT INTO answer VALUES  ('$qid','$ansid')");

 }
header("location:dash.php?q=0");
}
}

//exam start
if(@$_GET['q']== 'exam' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$ans=$_POST['ans'];
$qid=@$_GET['qid'];
$time=@$_GET['time'];
$q=mysqli_query($con,"SELECT * FROM answer WHERE qid='$qid' " );
while($row=mysqli_fetch_array($q) )
{
$ansid=$row['ansid'];
}
if($ans == $ansid)
{
$q=mysqli_query($con,"SELECT * FROM exam WHERE eid='$eid' " );
while($row=mysqli_fetch_array($q) )
{
$right=$row['right'];
}
if($sn == 1)
{
$q=mysqli_query($con,"INSERT INTO history VALUES('$regno','$eid' ,'0','0','0','0',NOW())")or die('Error');
}
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND regno='$regno' ")or die('Error115');

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$r=$row['right'];
}
$r++;
$s=$s+$right;
$q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`right`=$r, date= NOW()  WHERE  regno = '$regno' AND eid = '$eid'")or die('Error124');

} 
else
{
$q=mysqli_query($con,"SELECT * FROM exam WHERE eid='$eid' " )or die('Error129');

while($row=mysqli_fetch_array($q) )
{
$wrong=$row['wrong'];
}
if($sn == 1)
{
$q=mysqli_query($con,"INSERT INTO history VALUES('$regno','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
}
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND regno='$regno' " )or die('Error139');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
}
$w++;
$s=$s-$wrong;
//$ss=(($s/$total)*100);
$q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  regno = '$regno' AND eid = '$eid'")or die('Error147');
}
if($sn != $total)
{
$sn++;
header("location:account.php?q=exam&step=2&eid=$eid&n=$sn&t=$total")or die('Error152');
}
else if( $_SESSION['key']!='sunny7785068889')
{
$q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND regno='$regno'" )or die('Error156');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE regno='$regno'" )or die('Error161');
$rowcount=mysqli_num_rows($q);
if($rowcount == 0)
{
$q2=mysqli_query($con,"INSERT INTO rank VALUES('$regno','$s',NOW())")or die('Error165');
}
else
{
while($row=mysqli_fetch_array($q) )
{
$sun=$row['score'];
}
$sun=$s+$sun;
//$ss=(($sun/$total)*100);
$q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE regno= '$regno'")or die('Error174');
}
header("location:account.php?q=result&eid=$eid");
}
else
{
header("location:account.php?q=result&eid=$eid");
}
}

//restart exam
if(@$_GET['q']== 'examre' && @$_GET['step']== 25 ) {
$eid=@$_GET['eid'];
$n=@$_GET['n'];
$t=@$_GET['t'];
$q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND regno='$regno'" )or die('Error156');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
}
$q=mysqli_query($con,"DELETE FROM `history` WHERE eid='$eid' AND regno='$regno' " )or die('Error184');
$q=mysqli_query($con,"SELECT * FROM rank WHERE regno='$regno'" )or die('Error161');
while($row=mysqli_fetch_array($q) )
{
$sun=$row['score'];
}
$sun=$sun-$s;
$q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE regno= '$regno'")or die('Error174');
header("location:account.php?q=exam&step=2&eid=$eid&n=1&t=$t");
}


//add ano

if(isset($_SESSION['key']))
{
	if(@$_GET['q']=='addano' && $_SESSION['key']=='sunny7785068889' && $_POST['ano'] != "")
	{
		$regno = $_POST['ano'];
		//$ref=@$_GET['q'];
		$result = mysqli_query($con,"SELECT regno FROM admission_no WHERE regno = '$regno'") or die('Error');
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
		$errmsg="Registration number EXIST";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash.php?q=6';</script>";
		}
		else
		{
		$q3=mysqli_query($con,"INSERT INTO admission_no VALUES  ('' , '$regno')");
		$errmsg="Registration number added successfully";
		echo "<script type='text/javascript'>alert('$errmsg');
		window.location.href='dash.php';</script>";
		}
	}
	else
	{
	$errmsg="Enter registration number to be added";
	echo "<script type='text/javascript'>alert('$errmsg');
	window.location.href='dash.php?q=6';</script>";
	}
	//header('location:dash.php?q=6=$errmsg');
}



//add teacher login detail



?>

<?php include 'create_teacher.php'; ?>




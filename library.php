<?php
require_once 'dbcon/connect.php';
function auth_Admin($username,$password)
{
	$con=con();
	$con->query("select * from admin where email='$username' and password=sha('$password')");
	return $con->affected_rows==1;
}
function auth_User($username,$password)
{
    $con=con();
	$con->query("select * from users where email='$username' and 
	password=sha('$password')");
	return $con->affected_rows==1;
}
function addUser($email,$password)
{
	$con=con();
	$con->query("insert into users value('$email',sha('$password'))");
	
}
function user_exists($email)
{
	$con=con();
	$con->query("select * from users where email='$email'");
	return $con->affected_rows==1;
}
function add_Student($email,$name,$dept,$desig,$course,$passport)
{
	//echo "here";
	$con=con();
	$con->query("insert into student value('$email','$name','$dept','$desig','$passport','$course')");
	echo $con->error;
}

function get_AllStudents()
{
	$con=con();
	return $con->query("select * from student");
	
}
function get_AllSubjects()
{
	$con=con();
	return $con->query("select * from subject");
	
}
function get_AllExaminers()
{
	$con=con();
	return $con->query("select * from examiner");
	
}
function get_AllObj_Questions()
{
	$con=con();
	return $con->query("select DISTINCT `exam_id`, 'id', 'question_id' from obj_questions");
	
}



function get_AllSchools()
{
	$con=con();
	return $con->query("select * from schools");
	
}

function get_AllClasses()
{
	$con=con();
	return $con->query("select * from classes");
	
}
function getClass($id)
{
	$con=con();
	return $con->query("select * from classes where id = '$id'");
	
}
function getClass_ids($id)
{
	$con=con();
	return $con->query("select * from class_ids where id = '$id'");
	
}
function getSchool($id)
{
	$con=con();
	return $con->query("select * from schools where id = '$id'");
	
}

function edit_obj_questions($exam_id)
{
    $con=con();
	return $con->query("select * from obj_exam where exam_id = '$exam_id'");	
}

function get_obj_questions($exam_id)
{
    $con=con();
	return $con->query("select * from obj_questions where exam_id = '$exam_id'");	
}
function get_question_id($exam_id)
{
    $con=con();
	return $con->query("select question_id from obj_questions where exam_id = '$exam_id'");
	
}
function get_obj_option($question_id)
{
    $con=con();
	return $con->query("select options from obj_options where question_id = '$question_id'");	
}
function get_obj_optionid($question_id)
{
    $con=con();
	return $con->query("select option_id from obj_options where question_id = '$question_id'");
	
}
function get_all_optionid($question_id)
{
    $con=con();
	return $con->query("select * from obj_options where question_id = '$question_id'");
	
}

function get_obj_answer($question_id)
{
    $con=con();
	return $con->query("select answer_id from obj_answer where question_id = '$question_id'");
	
}



function getExam_name($exam_id)
{
	$con=con();
	return $con->query("select DISTINCT `subject_id`, no_of_questions, examiner_id, date_performed from obj_exam_audit where exam_id = '$exam_id'");
	
}

function getAdmin($username)
{
	$con=con();
	$table = $con->query("select * from admin where username = '$username'");
	return $table->fetch_array();
}

function getExaminer($id)
{
	$con=con();
	$table = $con->query("select * from examiner where examiner_id = '$id' OR username = '$id'");
	return $table->fetch_array();
}

function get_Student($regno)
{
	$con=con();
	$table = $con->query("select * from student where regno = '$regno'");
	return $table->fetch_array();
}
function getStudent($id)
{
	$con=con();
	$table = $con->query("select * from student where regno = '$id' OR username = '$id'");
	return $table->fetch_array();
}



function redirect($url)
{
	header("location:$url");
}
function validate($var)
{
	return isset($var)&&!empty($var);
}
function alert($messsage)
{
	echo "<script >alert('$messsage');</script>";
}
function isAdmin($username,$password)
{
    $con=con();
	$con->query("select * from admin where username='$username' AND password = md5('$password')");
	return $con->affected_rows==1;
}
function isExaminer($id,$password)
{
    $con=con();
	$con->query("select * from examiner where examiner_id='$id' AND password = md5('$password')");
	return $con->affected_rows==1;
}
function isStudent($regno,$password)
{
    $con=con();
	$con->query("select * from student where regno='$regno' AND password = md5('$password')");
	return $con->affected_rows==1;
}
function changePassword($id,$password)
{
    $con=con();
	$con->query("select * from student where username = '$id' AND password = md5('$password')");
	return $con->affected_rows==1;
}
function hasRegistered($email)
{
    $con=con();
	$con->query("select * from student where email='$email'");
	return $con->affected_rows==1;	
}
function searchStudent($name)
{
    $con=con();
	return $con->query("select * from student where name like '%".$name."%' OR regno like '%".$name."%' OR mob like '%".$name."%'");	
}
function searchSchool($name)
{
    $con=con();
	return $con->query("select * from schools where school_name like '%".$name."%' OR school_code like '%".$name."%' ");	
}
function searchExaminer($name)
{
    $con=con();
	return $con->query("select * from examiner where fullname like '%".$name."%' OR username like '%".$name."%' ");	
}
function search_obj_questions($name)
{
    $con=con();
	return $con->query("select * from obj_exam_audit where examiner_id like '%".$name."%' OR subject_id like '%".$name."%' ");	
}

function searchSubject($name)
{
    $con=con();
	return $con->query("select * from subject where school_id like '%".$name."%'");	
}
function formatString($str){
	return addslashes(stripslashes($str));	
}

function getExam_code($exam_id)
{
	$con=con();
	return $con->query("select * from obj_exam where exam_id = '$exam_id'");
	
}

function get_send_option($options)
{
    $con=con();
	$table = $con->query("select option_id from obj_options where options = '$options'");	
	return $table->fetch_array();
}

function get_correct_option($question_id,$exam_id)
{
    $con=con();
	return $con->query("select answer_id from obj_answer where question_id = '$question_id' AND exam_id = '$exam_id'");
	
}

function get_Examiner($examiner_id)
{
	$con=con();
	$table = $con->query("select * from examiner where examiner_id = '$examiner_id'");
	return $table->fetch_array();
}

function getSubject($examiner_id)
{
	$con=con();
	return $con->query("select subject from examiner where examiner_id = '$examiner_id'");
}

function get_EXAMINER_id($examiner_id)
{
	$con=con();
	return $con->query("select * from obj_exam_audit where examiner_id = '$examiner_id'");
	
}

function get_EXAMINER_id_search($name)
{
	$con=con();
	return $con->query("select * from obj_exam_audit where examiner_id = '$name' OR subject_id = '$name'");
	
}



function search_obj_questions_examiner($name)
{
    $con=con();
	return $con->query("select * from obj_exam_audit where examiner_id like '%".$name."%' OR subject_id like '%".$name."%' ");	
}


function Examiner_get_ALLOBJ($exam_id)
{
    $con=con();
	return $con->query("select DISTINCT regno, subject_id, class_id, no_of_questions from obj_exam_submitted where exam_id = '$exam_id'");
}

function search_obj_result_list($name)
{
    $con=con();
	return $con->query("select * from obj_student_result where name like '%".$name."%' OR regno like '%".$name."%' OR subject_id like '%".$name."%' ");	
}

function getExaminer_name($examiner_id)
{
	$con=con();
	return $con->query("select fullname from examiner where examiner_id = '$examiner_id'");
	
}
// new additions
function search_theory_questions($name)
{
    $con=con();
	return $con->query("select * from theory_exam_audit where examiner_id like '%".$name."%' OR subject_id like '%".$name."%' ");	
}

function get_AllTheory_Questions()
{
	$con=con();
	return $con->query("select DISTINCT `exam_id`, 'id', 'question_id' from theory_questions");
	
}

function getTheoryExam_name($exam_id)
{
	$con=con();
	return $con->query("select `subject_id`, no_of_questions, examiner_id, date_performed from theory_exam_audit where exam_id = '$exam_id'");
	
}


function get_Theoryquestion_id($exam_id)
{
    $con=con();
	return $con->query("select question_id from theory_questions where exam_id = '$exam_id'");
	
}

function get_Theory_questions($exam_id)
{
    $con=con();
	return $con->query("select * from theory_questions where exam_id = '$exam_id'");	
}

function Theory_question_id($question_id)
{
    $con=con();
	return $con->query("select * from theory_questions where question_id = '$question_id'");	
}
function get_Theory_optionid($question_id)
{
    $con=con();
	return $con->query("select option_id from theory_options where question_id = '$question_id'");
	
}

function get_Theory_answer($question_id)
{
    $con=con();
	return $con->query("select answer_id from theory_answer where question_id = '$question_id'");
	
}

function getTheoryExam_code($exam_id)
{
	$con=con();
	return $con->query("select * from theory_exam where exam_id = '$exam_id'");
	
}


function getExaminedStudentRegNo($exam_id)
{
    $con=con();
	return $con->query("select DISTINCT regno from theory_exam_submitted where exam_id = '$exam_id'");
}
function Examiner_get_ALLTheory($exam_id)
{
    $con=con();
	return $con->query("select DISTINCT regno, answer, answer_imagepath from theory_exam_submitted where exam_id = '$exam_id'");
}

function get_ALLTheory_Regno($regno)
{
    $con=con();
	return $con->query("select DISTINCT regno from theory_exam_submitted where regno = '$regno'");
}


function Just_Regno($exam_id)
{
    $con=con();
	return $con->query("select DISTINCT regno, exam_id from theory_exam_submitted where exam_id = '$exam_id'");
}

function getReg($regno)
{
	$con=con();
	$table = $con->query("select * from theory_exam_submitted where regno = '$regno'");
	
}
function get_Theory_EXAMINER_id($examiner_id)
{
	$con=con();
	return $con->query("select * from theory_exam_audit where examiner_id = '$examiner_id'");
	
}

function getSubject_ids($subject)
{
	$con=con();
	return $con->query("select * FROM subject_ids WHERE subject = '$subject'");
	
}

function getSubject_ids_Opp($id)
{
	$con=con();
	$table = $con->query("select * FROM subject_ids WHERE id = '$id'");
	return $table->fetch_array();
}

function get_AggScore($regno)
{
	$con=con();
	return $con->query("SELECT th.score as score_theory,th.subject_id as subject_id_theory,th.class_id as class_id_theory, ob.score as score_obj,ob.subject_id as subject_id_obj,ob.class_id as class_id_obj FROM theory_student_result AS th JOIN obj_student_result AS ob ON th.regno = ob.regno");
	
}

function sql_injection($var){
	return htmlspecialchars(stripslashes(trim($var)));
}

function get_AggScore_1($regno)
{
	$con=con();
	return $con->query("SELECT exam_id, regno, class_id, subject_id, school_name, score FROM obj_student_result WHERE regno = '$regno' UNION ALL SELECT exam_id, regno, class_id, subject_id, school_name, score FROM theory_student_result WHERE regno = '$regno' ORDER BY `subject_id`");
	
}

function get_AggScore_2($regno)
{
	$con=con();
	return $con->query("SELECT subject_id, class_id, score FROM result_aggregate WHERE regno = '$regno' ORDER BY `subject_id`");
	
}

function get_AggScore_3($regno)
{
	$con=con();
	return $con->query("SELECT score, subject_id, exam_type FROM `result_aggregate` WHERE regno = '$regno'");
	
}

function getSchool_Code($school_name)
{
	$con=con();
	return $con->query("select * from schools WHERE school_name = '$school_name'");
	
}

function getClass_name($class)
{
	$con=con();
	return $con->query("select * from class_ids where class = '$class'");
	
}

function Aggregate($regno)
{
	$con=con();
	return $con->query("SELECT `regno`,`subject_id`, `score`, `exam_type`, SUM(`score`) AS Total FROM `result_aggregate` WHERE `regno` = '$regno' GROUP BY `subject_id` HAVING count(*) >=1 ");
	
}

function getTotalTheory($exam_id)
{
	$con=con();
	$table = $con->query("SELECT DISTINCT regno FROM `theory_exam_submitted` WHERE exam_id = '$exam_id'");
	return $table->fetch_array();
}
?>
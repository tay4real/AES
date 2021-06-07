<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AES || ADMIN DASHBOARD</title>
<link href="image/logo.jpg" rel="icon" type="image/jpg"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <link  href="date/tcal.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <script src="date/tcal.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-8">
<span class="logo"><img src="./image/logo.jpg" alt="AES" width= "40" />  Automated Examination System</span></div>
<?php
 include_once 'dbConnection.php';
  include_once 'library.php';
session_start();
$admin_user=$_SESSION['admin_user'];
  if(!(isset($_SESSION['admin_user']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$acct_type = $_SESSION["account_type"];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Welcome,</span> <a href="#" class="log log1">'.$name.'</a><span style="color:#fff">|</span>&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>

</div></div>
<!-- admin start-->

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash_admin.php?q=0"><b><?php echo $acct_type;?> Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash_admin.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown <?php if(@$_GET['q']==1 || @$_GET['q']==2) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schools<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_admin.php?q=1">Register School</a></li>
            <li><a href="dash_admin.php?q=2">View all Schools</a></li>
          </ul>
        </li>
         <li class="dropdown <?php if(@$_GET['q']==5 || @$_GET['q']==6) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Subjects<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_admin.php?q=5">Create Subject</a></li>
            <li><a href="dash_admin.php?q=6">View all Subjects</a></li>
          </ul>
        </li>
        
        <li class="dropdown <?php if(@$_GET['q']==3 || @$_GET['q']==4) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Students<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_admin.php?q=3">Register Student</a></li>
            <li><a href="dash_admin.php?q=4">View all Students</a></li>
          </ul>
        </li>
 
       
        
        <li class="dropdown <?php if(@$_GET['q']==7 || @$_GET['q']==8 ) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Examiner<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_admin.php?q=7">Register Examiner</a></li>
            <li><a href="dash_admin.php?q=8">View all Examiners</a></li>
            
          </ul>
        </li>
        
        <li class="dropdown <?php if(@$_GET['q']==9 || @$_GET['q']==10) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exams<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_admin.php?q=9">Exam Setup</a></li>
            <li><a href="dash_admin.php?q=10">View Set Questions</a></li>                    
          </ul>
        </li>
        
        <li class="dropdown <?php if(@$_GET['q']==33 || @$_GET['q']==34 || @$_GET['q']==35 || @$_GET['q']==36 ) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Examination Results<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_admin.php?q=33">Objective Exams</a></li>
			<li><a href="dash_admin.php?q=34">Theory Exams</a></li>
            <li><a href="dash_admin.php?q=35">Aggregate Result</a></li>
          </ul>
        </li>
        	
      </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

<!--home start-->
<?php if(@$_GET['q']==0) {
	echo '<div class="col-md-8 panel">
   	  		<img src="image/bg.jpg" width="100%" alt="student_exam">
        </div>
		';
}

?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==1) {
	include_once 'create_school.php';
}
?>
<!--School Tab Starts-->
<?php if(@$_GET['q']==2) {
	include_once 'viewall_schools.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==3) {
	include_once 'create_student.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==4) {
	include_once 'viewall_students.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==5) {
	include_once 'create_subject.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==6) {
	include_once 'viewall_subjects.php';
}
?>

<!--Examiner Tab Starts-->
<?php if(@$_GET['q']==7) {
	include_once 'create_examiner.php';
}
?>

<!--Viewall Examiner Tab Starts-->
<?php if(@$_GET['q']==8) {
	include_once 'viewall_examiner.php';
}
?>

<!--Exam Setup-->
<?php if(@$_GET['q']==9) {
	include_once 'exam_setup.php';
}
?>
<!-- View Questions-->
<?php if(@$_GET['q']==10) {
	include_once 'view_all_questions.php';
}
?>

<!--Objective Result-->
<?php if(@$_GET['q']==12) {
	include_once 'obj_result.php';
}
?>

<!--Aggregate Result-->
<?php if(@$_GET['q']==13) {
	include_once 'aggregate_result.php';
}
?>

<!--Theory Exam Details-->
<?php if(@$_GET['q']==14) {
	include_once 'theory_exam_details.php';
}
?>

<!--Objective Exam Details-->
<?php if(@$_GET['q']==15) {
	include_once 'obj_exam_details.php';
}
?>

<!--Set Exam-->
<?php if(@$_GET['q']==16) {
	include_once 'set_obj_exam.php';
}
?>

<!--Next Exam-->
<?php if(@$_GET['q']==16 && @validate(@$_GET['next'])) {
	include_once 'set_obj_exam.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==17) {
	include_once 'obj_edit.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==18) {
	include_once 'student_update_profile_admin.php';
}
?>


<!--View/Edit Questions-->
<?php if(@$_GET['q']==19) {
	include_once 'examiner_update_profile_admin.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==20) {
	include_once 'result_all_obj_questions_admin.php';
}
?>

<?php if(@$_GET['q']==21) {
	include_once 'theory_exam_details.php';
}
?>

<!--Set Exam-->
<?php if(@$_GET['q']==22) {
	include_once 'set_theory_exam.php';
}
?>

<!--Next Exam-->
<?php if(@$_GET['q']==22 && @validate(@$_GET['next'])) {
	include_once 'set_theory_exam.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==24) {
	include_once 'theory_edit.php';
}
?>

<?php if(@$_GET['q']==25) {
	include_once 'generate_exam_scripts.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==26) {
	include_once 'result_all_theory_questions_admin.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==30) {
	include_once 'view_answer_sheet.php';
}
?>

<!-- View Questions-->
<?php if(@$_GET['q']==31) {
	include_once 'view_all_obj_questions.php';
}
?>
<?php if(@$_GET['q']==32) {
	include_once 'view_all_theory_questions.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==33) {
	include_once 'objective_exams_result.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==34) {
	include_once 'theory_exams_result.php';
}
?>



<!--View/Edit Questions-->
<?php if(@$_GET['q']==35) {
	include_once 'admin_check_aggregate.php';
}
?>

<!--View/Edit Questions-->
<?php if(@$_GET['q']==36) {
	include_once 'result_aggregate_admin.php';
}
?>

</div>


</div><!--container closed-->
</div></div>

</body>
</html>

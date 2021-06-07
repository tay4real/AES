<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AES || STUDENT DASHBOARD</title>
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
<span class="logo"><img src="./image/logo.jpg" alt="AES" width= "40" /> Automated Examination System</span></div>
<?php
 include_once 'dbConnection.php';
 require_once 'library.php';
session_start();


 if(!(isset($_SESSION['regno']))){
header("location:index.php");
}
else
{
//$name = $_SESSION['name'];
$regno=$_SESSION['regno'];
$student = getStudent($regno);
$name = $student["name"];







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
      <a class="navbar-brand" href="dash_student.php?q=0"><b><?php echo $acct_type;?> Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash_student.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown <?php if(@$_GET['q']==1 || @$_GET['q']==2) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_student.php?q=1">View/Update Profile</a></li>
            <li><a href="dash_student.php?q=2">Change Password</a></li>
          </ul>
        </li>
        
        
        <li class="dropdown <?php if(@$_GET['q']==3 || @$_GET['q']==14) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Take Exams<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_student.php?q=3">Objective</a></li>
            <li><a href="dash_student.php?q=14">Theory</a></li>
          </ul>
        </li>
 
        <li class="dropdown <?php if(@$_GET['q']==5 || @$_GET['q']==19) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Check Results<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash_student.php?q=5">Objective</a></li>
            <li><a href="dash_student.php?q=19">Theory</a></li>
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
	include_once 'student_update_profile.php';
}
?>
<!--School Tab Starts-->
<?php if(@$_GET['q']==2) {
	include_once 'student_change_password.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==3) {
	include_once 'obj_exam_startup.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==4) {
	include_once 'obj_exam_start.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==17) {
	include_once 'obj_exam_started.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==5) {
	include_once 'obj_exam_result.php';
}
?>

<!--Examiner Tab Starts-->
<?php if(@$_GET['q']==15) {
	include_once 'obj_exam_result_process.php';
}
?>

<!--Create Theory Exam Tab Starts-->
<?php if(@$_GET['q']==9) {
	include_once 'create_theory_exam.php';
}
?>
<!-- View Theory Exam Tab Starts-->
<?php if(@$_GET['q']==10) {
	include_once 'viewall_theory_exam.php';
}
?>

<!--Create Objective Exam Tab Starts-->
<?php if(@$_GET['q']==11) {
	include_once 'create_obj_exam.php';
}
?>

<!--Enter Objective Exam Tab Starts-->
<?php if(@$_GET['q']==12) {
	include_once 'obj_question.php';
}
?>

<!--View Objective Exam Tab Starts-->
<?php if(@$_GET['q']==13) {
	include_once 'viewall_obj_exam.php';
}
?>




<!--Theory Exam Starts Here-->
<?php if(@$_GET['q']==14) {
	include_once 'theory_exam_startup.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==16) {
	include_once 'theory_exam_start.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==18) {
	include_once 'theory_exam_started.php';
}
?>

<!--School Tab Starts-->
<?php if(@$_GET['q']==19) {
	include_once 'theory_exam_result.php';
}
?>

<!--Examiner Tab Starts-->
<?php if(@$_GET['q']==20) {
	include_once 'theory_exam_result_process.php';
}
?>


</div>

</div><!--container closed-->
</div></div>
</body>
</html>

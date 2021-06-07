<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AES | Automated Examination System</title>
<link href="image/logo.jpg" rel="icon" type="image/jpg"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>

<script>
function validateForm(){

var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "")
{alert("Please enter your name.");return false;}

var s = document.form.gender.selectedIndex;if(s == null || s == "")
{alert("Choose your sex.");return false;}

var z = document.form.school.selectedIndex;if(z == null || z == "")
{alert("Choose your school.");return false;}


<!--var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
<!--var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
<!--{alert("Not a valid e-mail address.");return false;}

var r = document.forms["form"]["regno"].value;if(r == null || r == "")
{alert("Registration number must be filled out.");return false;}
<!--if(r.length<16 && r.length>11)
<!--{alert("Enter correct registration number");return false;}

var m = document.forms["form"]["mob"].value;if(m == null || m == "")
	{alert("Phone number must be filled out.");return false;}


var a = document.forms["form"]["password"].value;if(a == null || a == "")
{alert("Enter your password");return false;}
if(a.length<5 || a.length>25)
{alert("Passwords must be 5 to 25 characters long.");return false;}

var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}
}
</script>

</head>

<body>
<div class="header">
	<div class="row">
		<div class="col-lg-10 ">
			<span class="logo"><img src="./image/logo.jpg" class="rounded-circle" alt="AES" width= "40" /> Automated Examination System </span>
        </div>
		<div class="col-md-2">
		  	<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#about">
            	<span aria-hidden="true"></span>&nbsp;<span class="title1"><b>ABOUT AES</b></span>
            </a>
        
            <!-- Modal For Developers-->
            <div class="modal fade title1" id="about">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">About AES</span></h4>
                        </div>
              
                        <div class="modal-body">                       	
                            <p style="padding-right:5px;">AES is an automted examination system built for secondary schools.</p>                               
                        </div>
            
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>	
	</div> <!-- row closed -->
</div><!--header closed-->


<div class="bg1">
  <div class="row" style="padding-top:40px;padding-bottom:40px;">
		<div class="col-md-1"></div>
		<div class="col-md-6 panel">
   	  		<img src="image/bg.jpg" width="100%" height="100%" alt="student_exam">
        </div><!--col-md-6 end-->
        
		<div class="col-md-3" style="padding-top:100px;">
			<div>
            	<a href="#" class="pull-right btn sub2" data-toggle="modal" data-target="#adminLogin">
            		<span aria-hidden="true"></span>&nbsp;<span class="title1"><b>ADMIN LOGIN</b></span>
            	</a>
                
                <!--Modal for admin login-->
                <div class="modal fade" id="adminLogin">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title"><span style="color:#260749;font-family:'typo' ">ADMIN LOGIN</span></h4>
                            </div>
                            
                            <div class="modal-body title1">
                                <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form role="form" method="post" action="login.php?q=index.php">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" name="admin_user" maxlength="20"  placeholder="Enter Admin ID" class="form-control"/> 
                                        </div>
                                        <div class="form-group">
                                            <input type="password" autocomplete="off" name="admin_pass" maxlength="15" placeholder="Enter your Password" class="form-control"/>
                                        </div>
                                        <div class="form-group" align="center">
                                            <input type="submit" name="admin_login" value="Login" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div>
            	<a href="#" class="pull-right btn sub2" data-toggle="modal" data-target="#instructorLogin">
            		<span aria-hidden="true"></span>&nbsp;<span class="title1"><b>EXAMINER LOGIN</b></span>
            	</a>
                <!--sign in modal start-->
                <div class="modal fade" id="instructorLogin">
                    <div class="modal-dialog">
                        <div class="modal-content title1">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title title1"><span style="color:#260749">EXAMINER LOGIN</span></h4>
                            </div>
        
                            <div class="modal-body title1">
                            <div class="row">
                             <div class="col-md-3"></div>
                              <div class="col-md-6">
                                <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">         
                                                <input id="admin_id" autocomplete="off"  name="examiner_id" placeholder="Enter Examiner ID" class="form-control input-md" type="text" />                                            
                                        </div>
        
        
                                        <!-- Password input-->
                                        <div class="form-group">
                                                <input id="password" autocomplete="off" name="examiner_pass" placeholder="Enter your Password" class="form-control input-md" type="password" />
                                        </div>
        
              
                                        <div class="form-group" align="center">
                                            
                                            <button type="submit" class="btn btn-primary">Log in</button>
                                        </div>
                                    </fieldset>
                                </form>
                                </div>
                                 <div class="col-md-3"></div>
                                </div>
                            </div><!-- / modal-body -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!--sign in modal closed-->
            </div>
            <div>
            	<a href="#" class="pull-right btn sub2" data-toggle="modal" data-target="#studentLogin">
            		<span aria-hidden="true"></span>&nbsp;<span class="title1"><b>STUDENT LOGIN</b></span>
            	</a>
                
                <!--sign in modal start-->
                <div class="modal fade" id="studentLogin">
                    <div class="modal-dialog">
                        <div class="modal-content title1">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title title1"><span style="color:#260749">STUDENT LOGIN</span></h4>
                            </div>
        
                            <div class="modal-body">
                                <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="student_reg"></label>  
                                            <div class="col-md-6">
                                                <input id="student_reg" autocomplete="off" name="student_examno" placeholder="Student Regno/Username" class="form-control input-md" type="text" />
                                            </div>
                                        </div>
        
        
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="password"></label>
                                            <div class="col-md-6">
                                                <input id="password" autocomplete="off" name="student_pass" value = "" placeholder="Enter your Password" class="form-control input-md" type="password" />
            
                                            </div>
                                        </div>
        
              
                                        <div class="form-group" align="center" >
                                            
                                            <button type="submit" class="btn btn-primary">Log in</button>

                                        </div>
                                    </fieldset>
                                </form>
                            </div><!-- / modal-body -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!--sign in modal closed-->
                
                
            </div>
		</div><!--col-md-3 end-->
        <div class="col-md-1"></div>	
  </div>
</div> <!--container end-->


<!--Footer start-->
<div class="row footer">
	<div class="col-md-3 box"></div>
	<div class="col-md-6 box" style="color:#ffffff">
 		<img src="./image/logo.jpg" class="rounded-circle" alt="AES" width=30 /> All rights reserved. &copy <?php echo date('Y'); ?>
    </div>
	<div class="col-md-3 box"></div>   
</div>
<!--footer end-->


</body>
</html>

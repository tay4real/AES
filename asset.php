<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ASSET</title>
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

<div class="col-md-3 panel">
			<!-- sign in form begins -->  
  			<form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
				<fieldset>

					<!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name"></label>  
                        <div class="col-md-12">
                            <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" />

                        </div>
                     </div>
                   
                     <!-- Text input-->   
				  	 <div class="form-group">
  						<label class="col-md-12 control-label" for="gender"></label>
  						<div class="col-md-12">
    						<select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   								<option value="Male">Select Gender</option>
  								<option value="M">Male</option>
  								<option value="F">Female</option>
                            </select>
  						</div>
				     </div>

					<!-- Text input-->
					<div class="form-group">
  						<label class="col-md-12 control-label" for="name"></label>
  						<div class="col-md-12">
                            <select id="school" name="school" placeholder="Enter your school name" class="form-control input-md" >
                                <option value="Male">Select School</option>
                                <option value="Aquinas Grammar School">Aquinas Grammar School</option>
                                <option value="Oyemekun Grammar School">Oyemekun Grammar School</option> 
                                <option value="Unity Secondary School">Unity Secondary School</option>
                                <option value="St. Louis Grammar School">St. Louis Grammar School</option> 
                                <option value="Fiwasaye Girls' Grammar School">Fiwasaye Girls Grammar School</option> 
                            </select>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label title1" for="regno"></label>
                        <div class="col-md-12">
                            <input id="regno" name="regno" placeholder="Enter your regno-id" class="form-control input-md" type="regno" />
        
                        </div>
                    </div>
    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="mob"></label>  
                        <div class="col-md-12">
                            <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number" />
        
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="password"></label>
                        <div class="col-md-12">
                            <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password" />
        
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-md-12control-label" for="cpassword"></label>
                        <div class="col-md-12">
                                <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password"/>
        
                        </div>
                    </div>
                    
                    
                    <?php if(@$_GET['q7'])
                        { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}
                    ?>
                    
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for=""></label>
                        <div class="col-md-12"> 
                            <input  type="submit" class="sub" value="sign up" class="btn btn-primary" />
                            <br>
      
                        </div>
                    </div>

				</fieldset>
			</form>
		</div><!--col-md-6 end-->
        
        <div class="slider-side tayotus-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-autoplay-timeout="2000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="false" data-md-device-dots="true">
                            <div class="wlc-item">
                               <img src="img/slider/11b.png" alt="Slider Image 1">
                            </div>
                            <div class="wlc-item">
                                <img src="img/slider/22.png" alt="Slider Image 2">
                            </div>
                            <div class="wlc-item">
                                <img src="img/slider/33.png" alt="Slider Image 3">
                            </div>
                        </div>
                        
                        <?
							if( $_POST['name'] != "" && $_POST['dob'] != "" && $_POST['school'] !== "" )
	{

			$school_code = $_POST['school'];
			$year = date('y');
	
	
			$ref=@$_GET['q'];
			
			$result = mysqli_query($con,"SELECT * FROM admission_no") or die('Error');
			$count=mysqli_num_rows($result);
	
	
			// increment id by 1
			$id = (int)$count + 1;
			$regno = $school_code . "/" . $year . "/". $id;
			$regno = stripslashes($regno);
			// Update admission number
			$sql = "INSERT INTO admission_no (sn, regno)
			VALUES ('', '$regno')";
	
			if (mysqli_query($con, $sql)) {
				$result = mysqli_query($con,"SELECT regno FROM student WHERE regno = '$regno'") or die('Error');
				$count=mysqli_num_rows($result);	
				if($count==1)
				{
					$errmsg="This Registration Number has already registered!";
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_admin.php?q=3';</script>";
				}
				else	
				{
					$name = $_POST['name'];
					$name= ucwords(strtolower($name));
					$name = stripslashes($name);
					$name = addslashes($name);
				
					$dob = $_POST['dob'];
					$dob = stripslashes($dob);
					
					
					
					
					$gender = $_POST['gender'];
					$gender = stripslashes($gender);
					$gender = addslashes($gender);
				
					$reg = $regno;
					$regno = stripslashes($reg);
					
					$school = $_POST['school'];
					$school = stripslashes($school);
					$school = addslashes($school);
				
					$mob = $_POST['mob'];
					$mob = stripslashes($mob);
					$mob = addslashes($mob);
					
					$password = $_POST['password'];
					$password = stripslashes($password);
					$password = addslashes($password);
					$password = md5($password);
		
					$q3=mysqli_query($con,"INSERT INTO student VALUES  ('','$name' ,'$dob', '$gender' , '$school','$reg' ,'$mob', '$password')");
					if($q3)
					{
					
					$errmsg="CONGRATULATION! Student Registration is Successful.
							Registration Number :$regno 
							Keep in safe place for future reference";
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_admin.php?q=3';</script>";
					
					}
					else
					{
					$errmsg="Registration Number Already Registered!!!";
					echo "<script type='text/javascript'>alert('$errmsg');
					window.location.href='dash_admin.php?q=3';</script>";
					
					}
			
				}
			}
			else {
				$errmsg="Unable to generate registration number";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=3';</script>";
			}
		
		
	}
	else{
		$errmsg="Enter Student details to be added";
				echo "<script type='text/javascript'>alert('$errmsg');
				window.location.href='dash_admin.php?q=3';</script>";
	}

						?>
                        
                        
</body>
</html>
<script type="text/javascript">
var capnum = 1;
var tqn = document.getElementById('tqn').val();
function increment(){
	if(capnum >= 1){
		capnum++;
		document.getElementById('display').innerHTML = capnum;
	}else{
		document.getElementById('display').innerHTML = tqn;
	}
}
function decrement(){
	if(capnum != 1){
		capnum--;
		document.getElementById('display').innerHTML = capnum;	
	}else{
		document.getElementById('display').innerHTML = 1;
	}
}

</script>
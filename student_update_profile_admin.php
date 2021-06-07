<?php
$_SESSION['regno'] = $_GET['regno'];
$regno=$_SESSION['regno'];


require_once 'library.php';
$student = getStudent($regno);

				$name = $student["name"];
				$username = $student["username"];
				$dob = $student["dob"];
				$gender = $student["gender"];
				//$school_id = $student["school_id"];
				//$class_id = $student["class_id"];
				$mob = $student["mob"];

$class_id = $student["class_id"];
$getClass_ids = getClass_ids($class_id);
			while($row3=$getClass_ids->fetch_array()){
			$class_id = $row3['class'];
			}
			
$school_id = $student["school_id"];			
$getSchool = getSchool($school_id);
			while($row3=$getSchool->fetch_array()){
			$school_id = $row3['school_name'];
			}
?>
<div class="row" style="background-color:#fff; padding-top:30px; padding-bottom:30px">

 <div class="col-md-3"></div><div class="col-md-6">
 <form class="form-horizontal title1" name="form" action="update_student_admin.php"  method="POST" enctype="multipart/form-data">
<div class="w3-row w3-padding">
                            
                           <span class="title1" style="margin-left:30%;font-size:30px;"><b>View/Update Details</b></span><br /><br />
                         <h4>
					<?php
			
						if(isset($_SESSION['err_msg']))
						{
					?>
							
							
							<div class="alert alert-danger">
							<span><center>
							<?php echo $_SESSION['err_msg'];
								unset($_SESSION['err_msg']); 
							?>
							</center></span>
							</div>
							
							
							
							<?php
						} else
						if(isset($_SESSION['success_msg']))
						{
					?>
							
							
							<div class="alert alert-success">
							<span><center>
							<?php echo $_SESSION['success_msg'];
								unset($_SESSION['success_msg']); 
							?>
							</center></span>
							</div>
							
							<?php
						}?></h4>
                        </div>
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="name">Name:</label>  
  <div class="col-md-10">
  <input id="name" name="name" value="<?php echo $name; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Regno">Regno:</label>  
  <div class="col-md-10">
  <input id="regno" name="regno" value="<?php echo $regno; ?>" class="form-control input-md" type="text" disabled="disabled">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="name">Username:</label>  
  <div class="col-md-10">
  <input id="username" name="username" value="<?php echo $username; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-2 control-label" for="dob">DOB:</label>  
  <div class="col-md-10">
  <input id="dob" name="dob" value="<?php echo $dob; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="username">Gender:</label>  
  <div class="col-md-10">
  <input id="gender" name="gender" value="<?php echo $gender; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="school_id">School:</label>  
  <div class="col-md-10">
  <input id="school_id" name="school_id" value="<?php echo $school_id; ?>" class="form-control input-md" type="text" disabled="disabled">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="class_id">Class:</label>  
  <div class="col-md-10">
  <input id="class_id" name="class_id" value="<?php echo $class_id; ?>" class="form-control input-md" type="text" disabled="disabled">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="mob">Phone:</label>  
  <div class="col-md-10">
  <input id="mob" name="mob" value="<?php echo $mob; ?>" class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8" align="left"> 
    <input  type="submit" class="btn btn-primary" value="Update Profile" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>
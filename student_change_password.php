<?php
include_once 'dbConnection.php';
//$regno=$_SESSION['regno'];
//$_SESSION["regno"] = $regno;
//$conn = mysqli_connect("localhost", "root", "", "project") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT * from student WHERE regno='" . $_SESSION["regno"] . "'");
	
    $row = mysqli_fetch_array($result);
	
	if ($_POST["newPassword"] != $_POST["confirmPassword"])
	{$_SESSION['err_msg'] = "Password Mismatch";}
	else
	{
	
    if (md5($_POST["currentPassword"]) == $row["password"]) {
        mysqli_query($con, "UPDATE student set password='" . md5($_POST["newPassword"]) . "' WHERE regno='" . $_SESSION["regno"] . "'");
        $_SESSION['success_msg'] = "Password Changed Successfully!";
    } else
        $_SESSION['err_msg'] = "Current Password is not correct";
}}
?>
<div class="row" style="background-color:#fff; padding-top:30px; padding-bottom:30px">

 <div class="col-md-3"></div><div class="col-md-6">


<form class="form-horizontal title1" name="frmChange" action=""  method="POST" enctype="multipart/form-data onSubmit=">
<div class="w3-row w3-padding">

<span class="title1" style="margin-left:30%;font-size:30px;"><center><img src="image/change_pwd.png" /></center></span><br /><br />
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

<div class="form-group">
  <label class="col-md-4 control-label" for="currentPassword">Current Password:</label>  
  <div class="col-md-8">
  <input id="currentPassword" name="currentPassword" placeholder="Enter Current Password" class="form-control input-md required" type="password" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="currentPassword">New Password:</label>  
  <div class="col-md-8">
  <input id="newPassword" name="newPassword" placeholder="Enter New Password" class="form-control input-md required" type="password" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="confirmPassword">Confirm Password:</label>  
  <div class="col-md-8">
  <input id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control input-md required" type="password" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input type="submit" name="submit" style="margin-left:35%" class="btn btn-primary" value="Change Password" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>

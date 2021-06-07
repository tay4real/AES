<?php
//session_start();
$name=@$_GET['name'];
$examiner_id=$_SESSION['examiner_id'];
require_once 'library.php';
$examiner = getExaminer($examiner_id);
				
				$name = $examiner["fullname"];
				$examiner_id = $examiner["examiner_id"];
				$username = $examiner["username"];
				$email = $examiner["email"];
				$gender = $examiner["gender"];
				$mob = $examiner["mob"];
				$school_id = $examiner["school_id"];	
				
$getSchool = getSchool($school_id);
			while($row3=$getSchool->fetch_array()){
			$school_id = $row3['school_name'];
			}

			//echo json_encode($subj_arr);
?>

<div class="row" style="background-color:#fff; padding-top:30px; padding-bottom:30px">

 <div class="col-md-2"></div><div class="col-md-8">
 <form class="form-horizontal title1" name="form" action="update_exami.php"  method="POST" enctype="multipart/form-data">
<div class="w3-row w3-padding">
                            
                           <span class="title1" style="margin-left:35%;font-size:30px;"><b><u>View/Update Record</u></b></span><br /><br />
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
  <label class="col-md-4 control-label" for="name">Full name:</label>  
  <div class="col-md-8">
  <input id="name" name="name" value="<?php echo $name; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="examiner_id">Examiner ID:</label>  
  <div class="col-md-8">
  <input id="examiner_id" name="examiner_id" value="<?php echo $examiner_id; ?>" class="form-control input-md" type="text" disabled="disabled">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username:</label>  
  <div class="col-md-8">
  <input id="username" name="username" value="<?php echo $username; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Address:</label>  
  <div class="col-md-8">
  <input id="email" name="email" value="<?php echo $email; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="username">Gender:</label>  
  <div class="col-md-8">
  <input id="gender" name="gender" value="<?php echo $gender; ?>" class="form-control input-md" type="text" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="school_id">School:</label>  
  <div class="col-md-8">
  <input id="school_id" name="school_id" value="<?php echo $school_id; ?>" class="form-control input-md" type="text" disabled="disabled">
    
  </div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="subject">Subjects:</label> 
<div class="col-md-8">
    
                                            
                                           <?php 
                                            // Fetch Subject by Examiner
										
												$subj_arr = array();
												$sql = "select * from examiner where examiner_id = '$examiner_id'";
												$result = mysqli_query($con,$sql);
												
												if($result)
												{
												while($row = mysqli_fetch_array($result))
													{
														$subj_arr[] = $row['subject'];
													}
												}
																								 
													foreach ($subj_arr as $value)
													{
														$list = explode(';', $value);
														foreach ($list as $subject_id)
														{
															//echo '<option value = "'.$subjects_id.'">'.$subjects_id.'</option>';
															
															
															echo '<label class="col-md-8 "><input class="col-md-1" type="checkbox" checked name="subjects[]" value="'.$subject_id.'" id="CheckboxGroup1_0">&nbsp;
                                            '.$subject_id.'</label>';
											
											
														}
													}
													//echo '</select>';
										
										 ?>
                                        </div>
                                   </div>
                        
<div class="form-group">
  <label class="col-md-4 control-label" for="mob">Phone:</label>  
  <div class="col-md-8">
  <input id="mob" name="mob" value="<?php echo $mob; ?>" class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8" align="left"> 
    <input type="submit" class="btn btn-primary" value="Update Profile" class="btn btn-primary"/>
  </div>
</div>



</fieldset>
</form>
<div class="col-md-2"></div>




<form class="form-horizontal title1" name="form" action="update_subject.php"  method="POST" enctype="multipart/form-data">
<hr>
<div class="w3-row w3-padding">
                            
                           <span class="title1" style="margin-left:35%;font-size:30px;background-color:#999;"><b>Add More Subject(s)</b></span><br /><br />
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
  <label class="col-md-4 control-label" for="sub">Add More Subject:</label>  
  <div class="col-md-8">
  <input id="sub" name="more_sub" placeholder="use ; to separate the subjects to be added" class="form-control input-md" type="text">
   </div>
   <div class="col-md-4"></div><div class="col-md-8"><i>e.g. Mathematics;Computer Studies</i></div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8" align="left"> 
    <input  type="submit" class="btn btn-primary" value="Add More Subject(s)" class="btn btn-primary"/>
  </div>
</div>
</fieldset>
</form></div>
<?php
require_once 'library.php';

$allSchools=get_AllSchools();

?>

<?php 
include "dbConnection.php";

?>

<script src="jquery-1.12.0.min.js" type="text/javascript"></script>

   <script type="text/javascript">
        $(document).ready(function(){

            $("#school_id").change(function(){
                var school_id = $(this).val();

                $.ajax({
                    url: 'getClasses.php',
                    type: 'post',
                    data: {school:school_id},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#class_id").empty();
						$("#class_id").append("<option value='0'>Select Class</option>");
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['name'];
							
                            $("#class_id").append("<option value='"+id+"'>"+name+"</option>");
							
                        }
                    }
                });
            });

        });
    </script>

	
    

			
<div class="row" style="background-color:#fff; padding-top:10px">
<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/register_student.png" /></center></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">
<form class="form-horizontal" name="form" action="student_reg.php" onSubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                	
                                    
                                    
                                    <!-- Text input-->
                                  
                                    <div class="form-group">
                                        <label class="col-md-12" for="regno">Registration Number</label>
                                        <div class="col-md-12">
                                            <input id="regno" name="regno" readonly="readonly" value="" placeholder="Student Registration No. will be genetated" class="form-control input-md" type="regno" />
                        
                                        </div>
                                    </div>
                                  
                
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12" id="name" for="name">Fullname</label>  
                                        <div class="col-md-12">
                                            <input id="name" name="name" placeholder="Enter your full name (Surname First)" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
                                      <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 " id="username" for="username">Username</label>  
                                        <div class="col-md-12">
                                            <input id="username" name="username" placeholder="Enter your username" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
                                     <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12" id="dob" for="dob">Date of Birth</label>  
                                        <div class="col-md-12">
                                            <input id="dob" name="dob" placeholder="Enter your date of birth" class="form-control input-md tcal" type="text" />
                
                                        </div>
                                     </div>
                                   
                                     <!-- Text input-->   
                                     <div class="form-group">
                                        <label class="col-md-12" for="gender">Gender</label>
                                        <div class="col-md-12">
                                            <select id="gender" name="gender"  placeholder="Select your gender" class="form-control input-md" >
                                                <option value="Male">Select you Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>
                                     </div>
                                     
                                     <div class="form-group">
                                     <label class="col-md-12" for="right">School</label>
        								<div class="col-md-12">
                                       <select id="school_id" name="school_id" placeholder="Select your school name"  class="form-control input-md">
                                            <option value="0">Select School</option>
                                           <?php 
                                            // Fetch Department
                                            $sql_school = "SELECT * FROM schools";
                                            $school_data = mysqli_query($con,$sql_school);
                                            while($row = mysqli_fetch_assoc($school_data) ){
                                                $school_code = $row['id'];
                                                $school_name = $row['school_name'];
                                              
                                                // Option
                                                echo "<option value='".$school_code."' >".$school_name."</option>";
                                            }
                                            ?>
                                        </select>
                                        </div>
                                   </div>
                                        
                                
                                   <div class="form-group">
                                   		<label class="col-md-12" for="right">Class</label>
        								<div class="col-md-12">
                                         <select id="class_id" name="class_id" class="form-control input-md">
                                            <option value="0">Select Class</option>
                                        </select>
                                        </div>
        								
                                   </div>  
                                    
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12" for="mob">Mobile Number</label>  
                                        <div class="col-md-12">
                                            <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="text" />
                        
                                        </div>
                                    </div>
                
                
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12" for="password">Password</label>
                                        <div class="col-md-12">
                                            <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password" />
                        
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <label class="col-md-12" for="cpassword">Confirm Password</label>
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
                                        <div class="col-md-12" align="center"> 
                                            <button type="submit" class="btn btn-primary">Register</button>
                                            <br>
                      
                                        </div>
                                    </div>
                
                                </fieldset>
                            </form>
                    </div>



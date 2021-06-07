<?php
require_once 'library.php';

$allExaminers=get_AllExaminers();

?>

<?php 
include "dbConnection.php";

?>

<script src="jquery-1.12.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#sel_depart").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getClasses.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#sel_user").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            

                            $("#sel_user").append("<option value='"+id+"'>"+id+"</option>");

                        }
                    }
                });
            });

        });
    </script>


			
<div class="row" style="background-color:#fff; padding-top:20px; padding-bottom:20px">
<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/register_examiner.png" /></center></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">
<form class="form-horizontal" name="form" action="examiner_reg.php" onSubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                <fieldset>
            
                                    <!-- Text input-->
                                  
                                    <div class="form-group">
                                        <label class="col-md-12 control-label title1" for="examiner_id"></label>
                                        <div class="col-md-12">
                                            <input id="examiner_id" name="examiner_id" readonly="readonly"  value="" placeholder="Examiner ID will be auto genetated" class="form-control input-md" type="text" />
                        
                                        </div>
                                    </div>
                                  
                
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" id="name" for="name"></label>  
                                        <div class="col-md-12">
                                            <input id="name" name="name" placeholder="Full name (Surname First)" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
                                     <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" id="username" for="username"></label>  
                                        <div class="col-md-12">
                                            <input id="username" name="username" placeholder="Enter username" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
                                     

                                     <!-- Text input-->   
                                     <div class="form-group">
                                        <label class="col-md-12 control-label" for="gender"></label>
                                        <div class="col-md-12">
                                            <select id="gender" name="gender" class="form-control input-md" >
                                                <option value="Male">Select your Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>
                                     </div>
                                     
                                     <div class="form-group">
        								<div class="col-md-12">
                                        <select id="sel_depart" name="school_id" placeholder="Select your school name"  class="form-control input-md">
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
									<?php include_once "subjects.php"; ?>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="mob"></label>  
                                        <div class="col-md-12">
                                            <input id="mob" name="mob" placeholder="Mobile/Phone number" class="form-control input-md" type="text" />
                        
                                        </div>
                                    </div>
                                    
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="mob"></label>  
                                        <div class="col-md-12">
                                            <input id="mob" name="email" placeholder="Email address" class="form-control input-md" type="email" />
                        
                                        </div>
                                    </div>
                
                
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="password"></label>
                                        <div class="col-md-12">
                                            <input id="password" name="password" placeholder="Password"   class="form-control input-md" type="password" />
                        
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="cpassword"></label>
                                        <div class="col-md-12">
                                                <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password"/>
                        
                                        </div>
                                    </div>
                                    
                                     <!-- Text input-->
                           
                            </div>
                                    
                                    <?php if(@$_GET['q7'])
                                        { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}
                                    ?>
                                    
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for=""></label>
                                        <div class="col-md-12" align="center"> 
                                            <button type="submit" class="btn btn-primary">Register Examiner</button>
                                            <br>
                      
                                        </div>
                                    </div>
                
                                </fieldset>
                            </form>
                    </div>



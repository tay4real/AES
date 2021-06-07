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

            $("#sel_depart").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getClasses.php',
                    type: 'post',
                    data: {school:deptid},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#sel_user").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
							var name = response[i]['name'];
                            

                            $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>


			
<div class="row" style="background-color:#fff; padding-top:10px; padding-bottom:20px">
<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/add_subject.png" /></center></span><br /><br />
 <div class="col-md-2"></div><div class="col-md-8">
<form class="form-horizontal" name="form" action="subject.php?q=addsubject" onSubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                <fieldset>

                                   
                                     <div class="form-group">
        								<div class="col-md-12">
                                        <select id="sel_depart" name="school_id" placeholder="Select your school name"  class="form-control input-md">
                                            <option value="">Select School</option>
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
        								<div class="col-md-12">
                                        <select id="sel_user" name="class_id" class="form-control input-md">
                                            <option value="">Select Class</option>
                                        </select>
                                        </div>
                                   </div>
                                
     						 <!-- Text input-->
                            <?php include_once "subjects.php"; ?>
                            
                            </div>
                                    
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for=""></label>
                                        <div class="col-md-12" align="center"> 
                                            <button type="submit" class="btn btn-primary">Add Subject(s)</button>
                                            <br>
                      
                                        </div>
                                    </div>
                                    
                                    
                                    
                
                                </fieldset>
                            </form>
                    </div>



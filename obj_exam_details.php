<?php
require_once 'library.php';

$allSchools=get_AllSchools();

?>

<?php 
include "dbConnection.php";
if(@validate(($_SESSION['capnum']))){
unset($_SESSION['capnum']);	
}
?>

<script>
function validateForm(){

var s = document.form.school_id.selectedIndex;if(s == null || s == "")
{alert("Please Select School.");return false;}

var c = document.form.class_id.selectedIndex;if(c == null || c == "")
{alert("Please Select Class.");return false;}

var b = document.form.subj_id.selectedIndex;if(b == null || b == "")
{alert("Please Select Subject.");return false;}


var y = document.forms["form"]["mark_right"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "")
{alert("Please set marks for correct answer.");return false;}

var r = document.forms["form"]["total_questions"].value;if(r == null || r == "")
{alert("Please enter total number of questions.");return false;}
<!--if(r.length<16 && r.length>11)
<!--{alert("Enter correct registration number");return false;}

var m = document.forms["form"]["time_limit"].value;if(m == null || m == "")
	{alert("Please set time limit for the exam.");return false;}

var t = document.forms["form"]["exam_instructions"].value;if(t == null || t == "")
	{alert("Please set examination instructions.");return false;}

}

</script>


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
    <script type="text/javascript">
        $(document).ready(function(){

            $("#school_id").change(function(){
                var school_id = $(this).val();

				$("#class_id").change(function(){
                var classid = $(this).val();
					$.ajax({
                    url: 'getSubjects.php',
                    type: 'post',
                    data: {school:school_id,class: classid},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#subj_id").empty();
						$("#subj_id").append("<option value='0'>Select Subject</option>");
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                           

                            $("#subj_id").append("<option value='"+id+"'>"+id+"</option>");

                        }
                    }
                });
				});
                
            });

        });
    </script>
    
      

			
<div class="row" style="background-color:#fff; padding-top:20px; padding-bottom:20px">
<span class="title1" style="font-size:30px;"><center><img src="image/obj_detail.png" /></center></span><br />
 <div class="col-md-3"></div>
 <div class="col-md-6">
<form class="form-horizontal" name="form" action="choose_exam.php?q=obj_exam" onSubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                	                               
                                    <div class="form-group">
                                    	<label class="col-md-12" for="right">Select School</label>
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
                                      	<label class="col-md-12" for="right">Select Class</label>
        								<div class="col-md-12">
                                       
                                        <select id="class_id" name="class_id"  class="form-control input-md">
                                            <option value="0">Select Class</option>
                                        </select>
                                        </div>
                                   </div>  
                                    
                                    
                                    <!-- Text input-->
                                  
                                    <div class="form-group">
                                      	<label class="col-md-12" for="right">Select Subject</label>
        								<div class="col-md-12">
                                         <select id="subj_id" name="subj_id" class="form-control input-md">
                                            <option value="0">Select Subject</option>
                                        </select>
                                        </div>
                                   </div>  
                                  
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12" id="total" for="total">Set Total number of questions</label>  
                                        <div class="col-md-12">
                                            <input id="total_questions" name="total_questions" placeholder="Set Total number of questions" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
									<div class="form-group">
                                        <label class="col-md-12" for="time">Set time limit for the examination in minutes</label>
                                        <div class="col-md-12">
                                            <input id="time_limit" name="time_limit" placeholder="Set time limit for the examination in minutes"   class="form-control input-md" type="text" />
                        
                                        </div>
                                    </div>
                                    

                                    
                
                
                                    <!-- Text input-->
                                    
                    
                                    <div class="form-group">
                                        <label class="col-md-12" for="intro">Set Exam Instructions...</label>
                                        <div class="col-md-12">
                                                <textarea rows="8" cols="8" name="exam_instructions" class="form-control" placeholder="Set Exam Instructions..."></textarea>
                        
                                        </div>
                                    </div>
                                    
                                    
                                     <!-- Text input-->
                          
                                <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for=""></label>
                                        <div class="col-md-12" align="center"> 
                                            <button type="submit" class="btn btn-primary">Next</button>
                                            <br>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                    </div>








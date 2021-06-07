<?php
include_once 'dbConnection.php';
require_once 'library.php';
?>

			
<div class="row" style="background-color:#fff; padding-top:10px">

 <div class="col-md-3"></div><div class="col-md-6">
<form class="form-horizontal" name="form" action="dash_student.php?q=15" method="POST" enctype="multipart/form-data">
   <div class="w3-row w3-padding">

<span class="title1" style="margin-left:35%;font-size:30px;"><center><img src="image/obj_result_stu.png" /></center></span><br /><br />
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
                                        <label class="col-md-4 control-label" id="exam_code" for="exam_code">Enter Exam Code:</label>  
                                        <div class="col-md-8">
                                            <input id="exam_code" name="exam_code" placeholder="Enter exam code" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for=""></label>
                                        <div class="col-md-8" align="left"> 
                                            <button type="submit" class="btn btn-primary">Check Result</button>
                                            <br>
                      
                                        </div>
                                    </div>
                
                                </fieldset>
                            </form>
                    </div>



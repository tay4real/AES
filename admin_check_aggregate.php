<?php
include_once 'dbConnection.php';
require_once 'library.php';
?>

			
<div class="row" style="background-color:#fff; padding-top:10px">

 <div class="col-md-3"></div><div class="col-md-6">
<form class="form-horizontal" name="form" action="admin_check_aggregate_process.php" method="POST" enctype="multipart/form-data">
   <div class="w3-row w3-padding">

<span class="title1" style="font-size:30px;"><center><img src="image/result_sheet.png" /></center></span><br /><br />
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
                                    <div class="form-group" align="center">
                                        <label class="col-md-12 " id="regno" for="regno">Enter Student Registration Number:</label>  
                                        <div class="col-md-12">
                                            <input id="regno" name="regno" placeholder="Enter Student Regno" class="form-control input-md" type="text" />
                
                                        </div>
                                     </div>
                                     
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for=""></label>
                                        <div class="col-md-12" align="left"> 
                                            <center><button type="submit" class="btn btn-primary">Generate</button></center>
                                            <br>
                      
                                        </div>
                                    </div>
                
                                </fieldset>
                            </form>
                    </div>



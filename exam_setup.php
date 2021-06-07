
<div align="right">

</div>
<?php

echo ' 
<div class="row" style="background-color:#fff; padding-top:30px; padding-bottom:30px">
	<span class="title1" style="font-size:30px;"><center><img src="image/exam_setup.png" /></center></span><br/>
 	<div class="col-md-3"></div>
 	<div class="col-md-6">
 		<form class="form-horizontal title1" name="form" action="choose_exam.php?q=exam_choice"  method="POST" enctype="multipart/form-data">
			<fieldset>
				<!-- Text input-->
				<div class="form-group">					
					<div class="col-md-12" align="left">
					<center><label class="control-label">Please Choose a Category</label> </center>
					<fieldset>
						<br>
						<div class="col-md-2"></div>
						<div class="col-md-4"><label><input type="radio" name="Exam_Category" value="theory" id="Exam_Category_0" />
								Theory Exam</label></div>
						<div class="col-md-4"><label>
								<input type="radio" name="Exam_Category" value="objective" id="Exam_Category_1" />
								Objective Exam</label></div>
						<div class="col-md-2"></div>
					</fieldset>
					</div>
				</div>


				<div class="form-group">				  
				  <div class="col-md-12" align="right"> 
					<input  type="submit"  class="btn btn-primary" value="Next" class="btn btn-primary"/>
				  </div>
				</div>

			</fieldset>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>';

?>
<?php

echo ' 
<div class="row" style="background-color:#fff; padding-top:30px; padding-bottom:30px">
<span class="title1" style="margin-left:40%;font-size:30px;"><center><img src="image/school_reg.png" /></center></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">
 <form class="form-horizontal title1" name="form" action="update.php?q=addschool"  method="POST" enctype="multipart/form-data">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="school_name"></label>  
  <div class="col-md-12">
  <input id="school_name" name="school_name" placeholder="Enter School Name" class="form-control input-md" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="school_code"></label>  
  <div class="col-md-12">
  <input id="school_code" name="school_code" placeholder="Enter School Code e.g ACA" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="" style="text-align:left">Tick Classes as Appropriate</label> 
	<div class="col-md-12">
	<fieldset>
	<br>
		<label class="col-md-4 "><input class="col-md-1" type="checkbox" checked name="classes[]" value="JSS 1" id="CheckboxGroup1_0">&nbsp;
                JSS 1</label>
		<label class="col-md-4 "><input class="col-md-1" type="checkbox" name="classes[]" value="JSS 2" id="CheckboxGroup1_1">&nbsp;
		JSS 2</label>
		<label class="col-md-4 "><input class="col-md-1" type="checkbox" name="classes[]" value="JSS 3" id="CheckboxGroup1_2">&nbsp;
                JSS 3</label>
		<label class="col-md-4 "><input class="col-md-1" type="checkbox" name="classes[]" value="SSS 1" id="CheckboxGroup1_3">&nbsp;
                SSS 1</label>
		<label class="col-md-4 "><input class="col-md-1" type="checkbox" name="classes[]" value="SSS 2" id="CheckboxGroup1_4">&nbsp;
                SSS 2</label>
		<label class="col-md-4 "><input class="col-md-1" type="checkbox" name="classes[]" value="SSS 3" id="CheckboxGroup1_5">&nbsp;
                SSS 3</label>
		 
	
	</fieldset>
	</div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Create School" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';

?>
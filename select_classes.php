<?php 
include "config1.php";
?>
<!doctype html>
<html>
<head>
    <title>Auto Select Classes</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

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
                            
                            var name = response[i][0];

                            $("#sel_user").append("<option value='"+name+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>


        <div>Schools </div>
        <select id="sel_depart">
            <option value="0">- Select -</option>
            <?php 
            // Fetch Department
            $sql_school = "SELECT * FROM school";
            $school_data = mysqli_query($con,$sql_school);
            while($row = mysqli_fetch_assoc($school_data) ){
                $school_code = $row['id'];
                $school_name = $row['school_name'];
              
                // Option
                echo "<option value='".$school_code."' >".$school_name."</option>";
            }
            ?>
        </select>
        <div class="clear"></div>

        <div>Classes </div>
        <select id="sel_user">
            <option value="0">- Select -</option>
        </select>
</body>
</html>


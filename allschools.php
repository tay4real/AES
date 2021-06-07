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
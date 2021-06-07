<!DOCTYPE HTML>
<html>
<head>
<?php
require_once 'library.php';

$allStudents=get_AllStudents();
?>
<meta charset="utf-8">
<title>OSES</title>
<script src="js-search/jquery-2.1.3.js">

</script>
<script>
function doSearch()
{
	//alert($("#name").val());
	$.ajax({type:"POST",url:"prequest.php",data:{"name":$("#name").val()}}).done(function(msg){
		$("#result").html(msg);
		
	});
}
</script>
</head>

<body>
<form name="form1" method="post" action="">
<input name="name" type="text" id="name" size="150" onkeyup="doSearch()">
  <div id="result">
  <table width="800" align="center"  frame="border" border="1">
    <tr>
      <td colspan="8" align="center"><strong>SEARCH BY STUDENT NAME</strong></td>
    </tr>
   
    <tr>
       <td width="20" align="center"><strong>S/N</strong></td>
      <td width="200" align="center"><strong>Name</strong></td>
	  <td width="190" align="center"><strong>School</strong></td>
      <td width="80" align="center"><strong>Regno</strong></td>
      <td width="50" align="center"><strong>Score</strong></td>
      <td width="50" align="center"><strong>Total</strong></td>
      <td width="110" align="center"><strong>Date</strong></td>
      <td width="100" align="center"><strong>Subject</strong></td>
     
      
    </tr>
	
	<?php
	$sn=1;
	while($row=$allStudents->fetch_array())
	{
		
		echo "<tr>
     		<td align='center'>$sn</td>
			<td align='center'>$row[0]</td>
			<td align='center'>$row[1]</td>
			<td align='center'>$row[2]</td>
			<td align='center'>$row[3]</td>
			<td align='center'>$row[4]</td>
			<td align='center'>$row[5]</td>
			<td align='center'>$row[6]</td>
			
			</tr>";
			$sn++;
	}
	?>
   
   
  </table>
  </div>
</form>
</body>
</html>

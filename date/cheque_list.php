<?php
session_start();
if (@$_SESSION['allow']!="allow")
 {
 header("location:../../stay_too_long.php");
 exit();
 } 
$from=$_POST['from'];
$to=$_POST['to'];
if($from=="" || $to==""){
$message= "LIST OFF CHEQUE ISSUE";
$sql="SELECT * FROM cheque_issue";		
}
else{
$message="LIST OF CHEQUE ISSUE FROM <u>$from</u> TO <u>$to</u>";
$sql="SELECT * FROM cheque_issue WHERE date_issue BETWEEN '$from' AND '$to'";	
}


include("../../db/db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
tr:hover td {
color: #FF0000; 
background-color:#F7EE63;
}

a {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	font-weight: bold;
}
</style>
</head>

<body topmargin="0">
<table width="100%">
  <tr>
    <th width="98%" scope="col"><font color="#FF0000"><?php echo $message ?></font></th>
  </tr>
</table>
<table width="100%" cellpadding="1" cellspacing="1" bgcolor="#999999">
  <tr bgcolor="#DCDCDC">
    <th width="3%" scope="col">S/N</th>
    <th width="9%" scope="col">Cheque Number</th>
    <th width="10%" scope="col">Amount</th>
    <th width="7%" scope="col">Date Issue</th>
    <th width="16%" scope="col">Account</th>
    <th width="24%" scope="col">Purpose</th>
    <th width="17%" scope="col">Mdas Name</th>
    <th width="14%" scope="col">Beneficiary </th>
  </tr>
  <?php 
		$result=mysql_query($sql) or die(mysql_error());
		$i=1;
		$sum_amount=0;
		while($rows=mysql_fetch_array($result)){
		$amount=number_format($rows['amount'],2);
		$mdas_name=mdas_name($rows["mdas_id"]);	
		$account_name=account_name($rows["account"]);    
     echo"<tr>
        <td align='center' bgcolor='#FFFFFF'>$i</td>
        <td bgcolor='#FFFFFF'>{$rows['cheque_number']}</td>
        <td bgcolor='#FFFFFF'>$amount</td>
        <td align='center' bgcolor='#FFFFFF'>{$rows['date_issue']}</td>
        <td bgcolor='#FFFFFF'>$account_name</td>
        <td bgcolor='#FFFFFF'>{$rows['purpose']}</td>
        <td bgcolor='#FFFFFF'>$mdas_name</td>
        <td bgcolor='#FFFFFF'>{$rows['payee']}</td>
        </tr>";
        $i++;
		$sum_amount+=$rows["amount"];
       }
	   $sum_amount2=number_format($sum_amount,2);
		?>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <th bgcolor="#DCDCDC"><?php echo $sum_amount2 ?></th>
    <td colspan="5" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
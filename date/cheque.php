<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

<style type="text/css">
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
.topp {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	color: #F00;
}
</style>
</head>

<body topmargin="0">
<table width="100%" cellpadding="1" cellspacing="1">
  <tr>
    <th width="20%" scope="col">&nbsp;</th>
    <td width="46%" align="center" class="topp" scope="col">This allows you to fine Cheque issues by Date</td>
    <th width="34%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><form id="form1" name="form1" method="post" action="cheque_list.php">
      <table width="58%" align="left" cellpadding="2" cellspacing="2">
        <tr>
          <td width="33%" align="right" scope="col">Cheque Issue From:</td>
          <td width="67%" scope="col"><label for="from"></label>
            <label for="textfield3"></label>
            <div ><input type="text" name="from" id="textfield3"  class="tcal"/></div></td>
        </tr>
        <tr>
          <td align="right">Cheque Issue To:</td>
          <td><label for="to"></label>
            <input type="text" name="to" id="textfield"  class="tcal"/></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Submit" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
<?php
include('../connection.php');
include('header.php');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Candidate Entry</title>
</head>

<?php


if(isset($_POST['btnsave']))
{
	$cname=$_POST['candname'];
	

				$insqry="insert into tbl_candidate(candname) values('$cname')";
				mysql_query($insqry,$con);
		
					
}
?>





<body>
<form id="form1" name="form1" method="post" action="">
  <table width="360" border="1">
    <tr>
      <td width="180">Candidate Name</td>
      <td width="164">
      <input type="text" name="candname" id="candname" required="required" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnsave" id="btnsave" value="Save" />
      <input type="submit" name="btncance" id="btncance" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>

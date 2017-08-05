<?php
include('../connection.php');
include('header.php');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Voter Entry</title>
</head>

<?php


if(isset($_POST['btnsave']))
{
	$vtname=$_POST['vtname'];
	$passw=$_POST['pass'];
	

				$insqry="insert into tbl_voter(votername,password) values('$vtname','$passw')";
				mysql_query($insqry,$con);
		
					
}
?>



<body>
<form id="form1" name="form1" method="post" action="">
  <table width="358" border="1">
    <tr>
      <td width="137">Voter Name</td>
      <td width="205"><label for="vtname"></label>
      <input type="text" name="vtname" id="vtname" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="pass"></label>
      <input type="password" name="pass" id="pass" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnsave" id="btnsave" value="Add Voter" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include('../connection.php');
include('header.php');
session_start();
$voterid=$_SESSION['vid'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Votecast</title>
</head>

<?php


if(isset($_POST['vote']))
{
	$candid=$_POST['cand'];
	
		
		
				$updqry="update tbl_candidate set totalvote=totalvote+1 where cand_id='$candid'";
				mysql_query($updqry,$con);
				
				$updqry="update tbl_voter set status=1 where voter_id=$voterid";
				mysql_query($updqry,$con);
				echo " Casted Vote ...Thank You";
				header("location:../Guest/Login.php");
		
					
}
	
?>



<body>
<div class="form-group" align="center">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="391" border="0" align="center">
    <tr height="55">
      <td width="157"><h3>Select Your Candidate<h3></td>
      <td width="224"><label for="cand"></label>
        <select name="cand" id="cand" class="form-control">
        <option value="">--Select Your Candidate--</option>
        <?php
		   $selQry="select * from tbl_candidate";
		   $sel=mysql_query($selQry,$con);
		   while($row=mysql_fetch_array($sel))
		   {
			   ?>
               <option value="<?php echo $row['cand_id'];?>"><?php echo $row['candname'];?></option>
		<?php	   
		   }
		?>
      </select>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="vote" id="vote" value="Vote" class="btn btn-primary" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?php

include("footer.php");

?>
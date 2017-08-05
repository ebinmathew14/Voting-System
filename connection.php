<?php
	$con=mysql_connect("localhost","root","") or die("cannot connect");
	mysql_select_db('voter',$con) or die("Error in Database");
?>

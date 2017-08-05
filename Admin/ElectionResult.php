<?php

include("../connection.php");
include("header.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Election Result</title>
</head>

<?php

               
				
$rowup=mysql_fetch_array(mysql_query("select * from tbl_candidate where totalvote=(select max(totalvote) from tbl_candidate)",$con));
					$kup=$rowup['totalvote'];
					?><h1 style="">Total vote of Winner
						<?php   
						echo $kup;
						
						?>
					
					</h1>
                    
                    
<?php					
?>



<body>

</body>
</html>
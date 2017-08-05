<?php
include('../connection.php');
include('header.php');

session_start();
$usr=$_SESSION['vid'];

$datasel=mysql_query("select * from tbl_voter where voter_id=$usr",$con);
			$st=$datasel['status'];
				if($st==0)
				{
					echo '<script> alert("Sorry You have already cast your vote")</script>';
					header("location:Homepage.php");
				}
if($usr!="")
{ 
	header("location:votecast.php");
	
}

?>
<?php

include('header.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Voter Homepage</title>
</head>

<body>


            <ul class="nav">
            
                <li class="active">
                    <a href="Homepage.php">
                        <i class="pe-7s-science"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="votecast.php">
                        <i class="pe-7s-note2"></i>
                        <p>Cast your Vote</p>
                    </a>
                </li>
               
                                
                <li>
                    <a href="../Guest/Login.php">
                        <i class="pe-7s-bell"></i>
                        <p>Logout</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>


                           
                      
</body>
</html>
<?php
include('footer.php');
?>
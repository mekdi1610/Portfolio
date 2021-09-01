<?php
	define('dbconn', 'TRUE');
    include("dbconn.php");
   	$sql = "UPDATE `score` SET `sure`='0' WHERE sure = '1'";
    mysqli_query($con, $sql);
    header("location:sure.php");	
       
?>	 

<?php
	define('dbconn', 'TRUE');
    include("dbconn.php");
   	$sql = "UPDATE `score` SET `yesterday`='0' WHERE yesterday = '1'";
    mysqli_query($con, $sql);
    header("location:Yesterday.php");	
       
?>	 

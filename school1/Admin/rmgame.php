<?php
	define('dbconn', 'TRUE');
    include("dbconn.php");
    $id=$_GET['post'];
   	$sql = "DELETE FROM score where s_id='$id'";
    mysqli_query($con, $sql);
    header("location: remove.php");	
       
?>	 

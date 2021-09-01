<?php
	define('dbconn', 'TRUE');
    include("dbconn.php");
    $id=$_GET['post'];
   	$sql = "DELETE FROM news where id='$id'";
    mysqli_query($con, $sql);
    header("location: news.php");	
       
?>	 

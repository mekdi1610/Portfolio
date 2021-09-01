<?php
    define('dbconn', 'TRUE');
    include("dbconn.php");

$id=$_GET['post'];

 	 	$sqll = "select sure from score where s_id='$id'";
            $score = $con->query($sqll);
            $roww = $score->fetch_assoc();
            $sure=$roww['sure'];
            if ($sure == 1) {
            $sql = "UPDATE score SET sure='0' where s_id=$id";
            mysqli_query($con, $sql);
            header("location:sure.php");	
            }
            else{
 			$sql = "UPDATE score SET sure='1' where s_id=$id";
            mysqli_query($con, $sql);
            header("location:sure.php");	
        
 	 }

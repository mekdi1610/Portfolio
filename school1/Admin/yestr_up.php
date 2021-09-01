<?php
define('dbconn', 'TRUE');
 include 'dbconn.php';
    $id=$_GET['post'];
 	 	$sqll = "select yesterday from score where s_id='$id'";
            $score = $con->query($sqll);
            $roww = $score->fetch_assoc();
            $yester=$roww['yesterday'];
            if ($yester == 1) {
            $sql = "UPDATE score SET yesterday='0' where s_id=$id";
            mysqli_query($con, $sql);
            header("location:yesterday.php");	
            }
            else{
 			$sql = "UPDATE score SET yesterday='1' where s_id=$id";
            mysqli_query($con, $sql);
            header("location:yesterday.php");	
        }
 	 

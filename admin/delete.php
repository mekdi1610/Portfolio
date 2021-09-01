
<?php
	define('dbconn', 'TRUE');
    include("dbconn.php");
    
    $id=$_GET['id'];
   	$sql = "DELETE FROM project where id='$id'";
    mysqli_query($con, $sql);
    echo '<script language="javascript">';
					echo 'alert("Team mate added successfully.")';
					echo '</script>';
    header("location: update.php");	

           $idd=$_GET['pd'];
   	$sql = "DELETE FROM team where id='$idd'";
    mysqli_query($con, $sql);
    echo '<script language="javascript">';
					echo 'alert("Team mate added successfully.")';
					echo '</script>';
    header("location: update.php");

         $iid=$_GET['iid'];
    $dsql="SELECT * FROM `pictures` WHERE id = '$iid'";
      $del = $con->query($dsql);
    $delp = $del->fetch_assoc();

    $d= $delp['filename'];
    
    $file="SELECT * FROM `pictures` WHERE filename = '$d'";
    $fil = $con->query($file);

    if($fil->num_rows == 1){ 
    $dot="../uploads/";
    $deli = $dot.$d;
    unlink($deli);
    $sql = "DELETE FROM pictures where id='$iid'";
    mysqli_query($con, $sql);
    }

    elseif ($fil->num_rows > 1) {
      $sql = "DELETE FROM pictures where id='$iid'";
    mysqli_query($con, $sql);
    }
   	
    
    echo '<script language="javascript">';
					echo 'alert("Team mate added successfully.")';
					echo '</script>';
    header("location: update.php");	
?>	 

<?php include("includes/config.php");
include("includes/db.php");
$id = mysqli_real_escape_string($db,$_GET['post']);
$query = "SELECT * FROM hilreg WHERE sclid = '$id'" ;
  $posts = $db->query($query);
  $row = $posts->fetch_assoc();
if($row['status'] == '0') {
    $query = "UPDATE `hilreg` SET `status` = 1 WHERE `sclid` = '$id'";
    $posts = $db->query($query);
    header("location: admin.php");
  }
  elseif($row['status'] == '1'){
  	    $query ="UPDATE `hilreg` SET `status` = 0 WHERE `sclid` = '$id'";
    $posts = $db->query($query);
    header("location: admin.php");

} 
?>
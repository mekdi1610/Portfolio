 <?php  
	define('dbconn', 'TRUE');
    include("dbconn.php");
#      $idd = '28';
 #   $dsql="SELECT * FROM pictures where id = '$idd'";
  #  $del = $con->query($dsql);
   # $delp = $del->fetch_assoc();
    #$dot=".";
    #$deli = $dot.$delp['path'];
    #echo $deli; 
    #unlink($deli);
       $iid=$_GET['iid'];
    $dsql="SELECT * FROM `pictures` WHERE id = '$iid'";
      $del = $con->query($dsql);
    $delp = $del->fetch_assoc();
    $dot="../uploads/";
    $d= $delp['filename'];
    $deli = $dot.$d;
    unlink($deli);
    
?>
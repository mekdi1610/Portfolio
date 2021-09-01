<?php include("includes/adminheader.php");?>
 <?php 
    

if(isset($_POST["Search"])){
  $id = $_POST["Search"];
  $query = "SELECT * FROM hilreg WHERE sclid = '$id'" ;
  $posts = $db->query($query);
  if($posts->num_rows == 1) {
  	$row = $posts->fetch_assoc();
    if ($row['sclid'] == $_POST["Search"]) {?>
    
    <p>Fullname:&nbsp &nbsp<?php echo $row['fname']?>&nbsp<?php echo $row['lname'];  ?></p> 
    <p>Username:&nbsp &nbsp<?php echo $row['usname']?></p> 
    <p>School Id:&nbsp &nbsp<?php echo $row['sclid']?></p> 
    <?php  
    if ($row['status'] == 1) {   
      $id = $row['sclid'];?>
      <p>Account Status :&nbsp &nbsp ACTIVE</p> 
      
    <a href="acde.php?post=<?php echo $id ?>" class=" btn btn-primary">DEACTIVATE</a>
<?php  
  

  }
  elseif ($row['status'] == 0) { ?>
     <p>Account Status :&nbsp &nbsp DEACTIVATED</p> 
    <a href="acde.php?post=<?php echo $id ?>" class=" btn btn-primary">ACTIVATE</a>
  <?php 
  
  }
  elseif ($row['sclid'] == $_POST["Search"] ) {
    header("location: admin.php");

  }

  }
}
}
else{
  header("location: admin.php");
}
?>  
    


    

  	
  	
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include("includes/footer.php");?>

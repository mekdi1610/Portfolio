<?php include("includes/header.php");
session_start();
 $user=$_SESSION['username'];
$query = "SELECT * FROM hilreg WHERE usname = '$user'" ;
  $posts = $db->query($query);
    $row = $posts->fetch_assoc();
    if ($row['status'] == '1') {
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
  if($message=='p'){
    $query ="Select * from posts ORDER BY priority DESC";
    $posts = $db->query($query);
  }
}
  
  elseif(isset($_GET['category'])){
  $category = mysqli_real_escape_string($db,$_GET['category']);
  $query = "Select * from posts where category='$category'";
} else  {
  
  $query ="Select * from posts ORDER BY date ASC";
}




    echo "Wellcome $user";
  
    

$posts = $db->query($query);
 
?>

          <div class="blog-header">
            <a href="folio/upload.php" class=" btn btn-primary">Add Post</a>
            <h1 class="blog-title">Welcome to IDiscuss Disscussion Forum</h1>
           <hr>
          </div>
          <?php if($posts->num_rows > 0) {
          while($row =$posts->fetch_assoc()) {
          ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id'] ?>"> <?php echo $row['title']; ?></a></h2>
            <p class="blog-post-meta"><?php echo $row['date']; ?> by   <a href="#"><?php echo $row['author']; ?></a></p>
            <?php  $body = $row['body']; 
            echo substr($body, 0 , 400). "...";
            ?>
            
            <a href="single.php?post=<?php echo $row['id'] ?>" class=" btn btn-primary">Read More</a>
          </div>
          <?php }  }?>
        <?php  }
        elseif($row['status'] == '0'){
          session_start();
          $_SESSION = array();
          session_destroy();
          header("location: index.php?message=a");
          exit;
          }
          elseif(is_null($user)){
            header("location: index.php?message=l");
          }
             ?>
</div><!-- /.blog-main -->

<?php  include("includes/sidebar.php");?>
<?php include("includes/footer.php");?>

<?php include("includes/header.php");
if(isset($_GET['search'])){
  $keyword = mysqli_real_escape_string($db,$_GET['search']);
  $query = "SELECT * FROM posts WHERE  keywords LIKE '%$keyword%'";

  $posts = $db->query($query);
  
  <div class="blog-header">
            <a href="folio/add_post.php" class=" btn btn-primary">Add Post</a>
            <h1 class="blog-title">Blog</h1>
            <p class="lead blog-description">Disscussion Forum</p>
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
         

        </div><!-- /.blog-main -->
} else {
  echo "no result";
}


?>

          


<?php include("includes/sidebar.php")?>
<?php include("includes/footer.php")?>
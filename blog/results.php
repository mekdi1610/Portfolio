<?php include("includes/header.php"); 
if(isset($_POST["Search"])){
  $keyword = $_POST["Search"];
  $query = "SELECT * FROM posts WHERE  keywords  LIKE  '%".$keyword."%' ";
  $posts = $db->query($query);
  if($posts->num_rows == 0) {
    ?>
    <br>
<blockquote>No Results for <?php echo $keyword ?> </blockquote>
<a href="home.php?>" class=" btn btn-primary">Go Back</a>
<?php

}
else{

  
  
?>

          <br>
          <blockquote><?php echo $posts->num_rows ?> Results for <?php echo $keyword ?> </blockquote>
          <?php 
          while($row =$posts->fetch_assoc()) {
           $id = $row['id']; 
          $title = $row['title'];
          $author = $row['author'];
          $date = $row['date'];
          $body = $row['body'];




           ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><a href="single.php?post=<?php echo $id ?>"> <?php echo $title; ?></a></h2>
            <p class="blog-post-meta"><?php echo $date ?> by   <a href="#"><?php echo $author; ?></a></p>
            <?php  $body = $row['body']; 
            echo substr($body, 0 , 400). "...";
            ?>
            
            <a href="single.php?post=<?php echo $row['id'] ?>" class=" btn btn-primary">Read More</a>
          </div>
          <?php }  }

                 }
  



          ?>


         

        </div><!-- /.blog-main -->


<?php include("includes/sidebar.php")?>
<?php include("includes/footer.php")?>
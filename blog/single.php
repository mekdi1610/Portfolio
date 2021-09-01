
 		 <?php 
 		 include("includes/header.php");


		if(isset($_GET['post'])){
		  $id = mysqli_real_escape_string($db,$_GET['post']);
		  $query = "Select * from posts where id='$id'";
		} 
		$posts = $db->query($query);
	
    	$query = "Select * from comments where post='$id'";
    	$comments = $db->query($query);

      
		  ?>
   

         <br>

          <?php if($posts->num_rows > 0) {
          while($row = $posts->fetch_assoc()) {
          ?>
          <div class="blog-post">
            
             <?php if ($row["filename"] != NULL) { ?>
              <h2 class="blog-post-title"> <?php echo $row['title']; ?></h2> <?php
             echo 'Attached File:';?> &nbsp <?php echo $row["filename"]; ?> &nbsp<a class=" btn btn-primary" href="<?php $dir = "folio/upload/"; echo $dir ,$row["filename"]; ?>">download</a><br>
           <a href="priority.php?post=<?php echo $row['id']  ?>" class=" btn btn-primary">prior</a><?php  } 
             else{?>

             <h2 class="blog-post-title"> <?php echo $row['title']; ?></h2><a href="priority.php?post=<?php echo $row['id']  ?>" class=" btn btn-primary">prior</a>
           <?php  }?> 
            <p class="blog-post-meta"><?php echo $row['date']; ?> by   <a href="#"><?php echo $row['author']; ?></a></p>
            <?php  echo $row['body'];?>
            
            

            

            
          </div>
          
          <br>
          <br>
          <blockquote><?php echo $comments-> num_rows; ?> comments <br> <?php if ($row['priority'] > 0) {
            echo $row['priority']; ?> people have this question too
          <?php } ?> 
          </blockquote>

          

          <div class="comment-area">
   
          <form method="POST" action="comment.php?post=<?php echo $id ?>">
          
          <div class="form-group">
          <lable for="exampleInputPassword1">comment</lable>
          <textarea cols="60" rows="10" name="comment" class="form-control" required /></textarea>
          </div>
          <button type="submit" name="post_comment" class="btn btn-primary">comment</button>
          </form>
         

          <br>
          <br>
          <hr>
          <?php while ($comment = $comments->fetch_assoc()) {
          	if ($comment['validated'] != 1 ) {
          	
           ?>
          <div class="comment">
          <div class="comment-head">
          <a href="#"><?php echo $comment['name']; ?></a><a href="validate.php?post=<?php echo $comment['id']  ?>" class=" btn btn-info btn-xs">validate</a>
          <img width="50" src="img/noimage.png" />
          </div>
          <?php echo $comment['comment']; ?>
          </div>
          <?php } elseif ($comment['validated'] = 1) {
            
          ?>
          <div class="comment">
           <label> <?php echo $comment['v_count'];  ?></label>
          <div class="comment-head">
          <a href="#"><?php echo $comment['name'];  ?></a><img width="25" src="img/verified.png" />
          <img width="50" src="img/noimage.png" /><a href="validate.php?post=<?php echo $comment['id']  ?>" class=" btn btn-info btn-xs">validate</a>
          </div>
          <?php echo $comment['comment']; ?>
          </div>
          <?php }  }?>
           <?php  }  }?>
    

   

            
           </div> 
                 </div> <!-- /.blog-main -->


<?php include("includes/sidebar.php")?>
<?php include("includes/footer.php")?>
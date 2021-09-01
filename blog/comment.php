 <?php 
    include("includes/config.php");
include("includes/db.php");
session_start();
$user=$_SESSION['username'];
  if(isset($_POST['post_comment'])){
  	
      $comment = mysqli_real_escape_string($db,$_POST['comment']);
  	if(isset($_GET['post'])){
		  $id = mysqli_real_escape_string($db,$_GET['post']);
    
      
      
      }

    }
    $query = "INSERT INTO `comments` (`id`, `name`, `comment`, `post`) VALUES (NULL, '$user', '$comment', '$id')";
    $db->query($query);
    
      header("location: single.php?post= $id");
?>
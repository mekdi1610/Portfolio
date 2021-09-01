<?php  
           
           include ("includes/config.php");
           include("includes/db.php");
           $id = mysqli_real_escape_string($db,$_GET['post']);
           session_start();
			$usname=$_SESSION['username'];
           $queryyy = "Select * from hilreg where usname = '$usname' ";
           $posttt = $db->query($queryyy);
           $rowww = $posttt->fetch_assoc();
           $sclid = $rowww['sclid'];



           $queryy = "Select * from priority where post_id='$id' AND priored_by ='$sclid' ";
           $post = $db->query($queryy);

        if($post->num_rows > 0)

        {
           
           header("location: single.php?post= $id");
        }

        else{
        	
        	$query1 = "Select priority from posts where id='$id'";
           $posts = $db->query($query1);
           $row = $posts->fetch_assoc();
           $priority = $row['priority']; 
           $priorityy = $priority+1;
              $query ="UPDATE `posts` SET `priority` = $priorityy WHERE `posts`.`id` = $id;";
              $db->query($query);
              $query2 ="INSERT INTO `priority` (`post_id`, `priored_by`) VALUES ( '$id', '$sclid')";
              $db->query($query2);

            header("location: single.php?post= $id");
        }

            ?>
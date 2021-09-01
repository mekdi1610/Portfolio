<?php  
include ("includes/config.php");
           include("includes/db.php");

           $id = mysqli_real_escape_string($db,$_GET['post']);
           $queryy ="select * from comments where id='$id'";
           $posts=   $db->query($queryy);
           $row = $posts->fetch_assoc();
           $idd= $row['post'];
           $count= $row['v_count'];
           $countt= $count+1;

           $query ="UPDATE `comments` SET `validated` = 1 WHERE `id` = $id;";
              $db->query($query);
           $queryy ="UPDATE `comments` SET `v_count` = $countt WHERE `id` = $id;";
           $db->query($queryy);

           header("location: single.php?post= $idd");
?>
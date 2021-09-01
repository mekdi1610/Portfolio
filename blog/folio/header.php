<?php 
        include 'config.php'; 
        include 'db.php';
          if (isset($_POST['add_post'])) {
        $title = mysqli_real_escape_string($db , $_POST['title']);
        $author = mysqli_real_escape_string($db , $_POST['author']);
        $category = mysqli_real_escape_string($db , $_POST['category']);
        $body = mysqli_real_escape_string($db , $_POST['body']);
        $keyword = mysqli_real_escape_string($db , $_POST['keyword']);

        $d = getdate();
        $date = "$d[month], $d[mday], $d[year]";
      
      
        $sql= " INSERT INTO `posts` (`id`, `title`, `category`, `date`, `body`, `author`, `keywords`) VALUES (NULL, '$title', '$category', '$date', '$body', '$author', '$keyword')";
        $db->query($sql);
    }
    


        ?>
  
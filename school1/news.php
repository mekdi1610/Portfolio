<?php  
    define('dbconn', 'TRUE');
    include("dbconn.php");
    $query = "select * from news ORDER BY date DESC";
    $news = $con->query($query);
    
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha - News</title>
  <link rel="icon" href="style/hablogo.png">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
    <?php include 'include/header.php';  ?>
    <?php include 'include/sidebar.php';  ?>
      <div style="padding-left: 10px;" id="content">
        <!-- insert the page content here -->
        <?php

        while ($nws = $news->fetch_assoc()) {
          $test = nl2br($nws['body']);
        ?> 

        <h1><span style="font-size: 22px;"><?php echo $nws['title'];  ?></span>  &nbsp|&nbsp <span style="font-size: 11px; font-family: sans-serif;"><?php echo $nws['date'];  ?></span> </h1> 
        <p><?php echo nl2br($nws['body']);?></p>
        <?php
        }
        ?>

      </div>
    </div>
    <?php include 'include/footer.php';  ?>
</body>
</html>

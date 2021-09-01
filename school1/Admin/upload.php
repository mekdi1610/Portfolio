<?php  
  define('dbconn', 'TRUE');
    include("dbconn.php");
$query = "select * from country";
$score = $con->query($query);
$query2 = "select * from country";
$score2 = $con->query($query2);
$query3 = "select * from country";
$score3 = $con->query($query3);
$query4 = "select * from country";
$score4 = $con->query($query4);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha Tipster - yesterday wins</title>
  <link rel="icon" href="style/hablogo.png">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
<?php include 'include/header.php';  ?>
    <div id="content_header"></div>
    <?php include 'include/sidebar.php';  ?>
      <div id="content">
          <form action="upsc.php" method="POST">
          <div class="form_settings">
            <p><span>Password</span><input type="date" name="password" value="" /></p>
            <p><span>country</span><input type="text" name="password" value="" /></p>
            <p><span>Team 1</span><input type="text" name="password" value="" /></p>
            <p><span>Team 2</span><input type="text" name="password" value="" /></p>
            <p><span>Score</span><input type="text" name="password" value="" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Upload" /></p>
          </div>
        </form>

      </div>
    </div>
    <?php include 'include/footer.php';  ?>
</body>
</html>

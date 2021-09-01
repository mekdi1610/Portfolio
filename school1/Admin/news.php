<?php 
//if(empty($_GET['m'])) {
//header( "location: HabAdmin19");
//}

define('dbconn', 'TRUE');
include("dbconn.php");


$query = "select * from news";
$news = $con->query($query);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha Tipster - News</title>
  <link rel="icon" href="style/hablogo.png">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
     <div id="main">
    <div id="header" style="background: black;">

      <div id="logo">
        <br>
        <img style="width: 125px; height: 125px;   " src="style/hab.jpg">
        
        <div style="margin-left: 150px" id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1 style=" display: inline-block; "><a href="index.php"><span style="color: orange;"> Habesha<span style="color: white;"> Betting </span></span><span style="color: orange;">Tipster</span></a></h1>
          <h2 style="color: orange; margin-bottom: 30px;">Bet &nbsp &nbsp  | &nbsp &nbsp      Win &nbsp &nbsp  |  &nbsp   Enjoy.</h2>
        </div>
        
      </div>
      <div id="menubar">
                 <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="upload.php">Upload</a></li>
          <li><a href="Remove.php">Remove</a></li>
          <li><a href="Yesterday.php">Yesterday Win's</a></li>
          <li><a href="sure.php">95% sure Tip's</a></li>
          <li class="selected" ><a href="News.php">News</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
   
    <?php include 'include/sidebar.php';  ?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Add news</h1>
           <form action="upnews.php" method="POST">
          <div class="form_settings">
            <p><span>Title</span><input type="text" name="title" value="" / required></p>
            <p><span>Body</span><textarea rows="8" cols="50" name="body" required></textarea></p>
            

            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Post" /></p>
          </div>
        </form>
        <br>
        <br>
               <h1>Remove/Delete News</h1> 
        
        <table style="width:100%; border-spacing:0;">
          <tr><th>date</th><th>Title</th><th>Remove</th></tr>
          
          <?php
                    while ($row = $news->fetch_assoc()) {
                    ?>  
                    <tr>
                     
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['title'] ?></td>
                    
                      <td>
                        <a href="rmnews.php?post=<?php echo $row['id']?>">
                          <button class="btn btn-primary">Delete</button>
                        </a>
                        </td>
                    </tr>
                    <?php } ?>
          
        </table>

      </div>
    </div>
      

    
    <?php include 'include/footer.php';  ?>
</body>
</html>

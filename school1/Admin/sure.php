<?php 
//if(empty($_GET['m'])) {
//header( "location: HabAdmin19");
//}

define('dbconn', 'TRUE');
include("dbconn.php");
$d = getdate();
$date = "$d[month]/$d[mday]/$d[year]";
$dat = "$d[year]-$d[mon]-$d[mday]";

$query = "select * from score ORDER BY date DESC";
$score = $con->query($query);

$cquery ="select DISTINCT country from score where date='$dat'";
$country = $con->query($cquery);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha Tipster - Sure tips</title>
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
          <li class="selected" ><a href="sure.php">95% sure Tip's</a></li>
          <li ><a href="News.php">News</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
 <?php include 'include/sidebar.php';  ?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Choose Sure Tips</h1> 
        <blockquote style="display: inline-block;"><span style="font-size: 18px; font-family: century gothic;">Remove all sure scores</span></blockquote> <a href="rmsure.php"><button style="background-color: orange; font-family: century gothic;">Remove</button></a>
        <table style="width:100%; border-spacing:0;">
          <tr><th>date</th><th>Team 1</th><th>Score</th><th>Team 2</th><th>Status</th><th>Description</th></tr>
          
          <?php
                    while ($row = $score->fetch_assoc()) {
                    ?>  
                    <tr>
                     
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['team1'] ?></td>
                      <td > <?php echo $row['score'] ?></td>
                      <td><?php echo $row['team2'] ?></td>
                      <td class="center">
                        <?php
                        if($row['sure'] == 1 ){
                          echo "Sure";
                        }
                        elseif ($row['sure'] == 0 ) {
                          echo "None";
                        }
                           
                          
                        ?>  
                      </td>
                      <td>
                        <a href="upsure.php?post=<?php echo $row['s_id']?>">
                          <button class="btn btn-primary">
                            <?php
                        if($row['sure'] == 1 ){
                          echo "Remove";
                        }
                        else{
                           echo "Sure";
                          }
                        ?>  
                          </button>
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

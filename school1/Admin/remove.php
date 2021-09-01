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
  <title>Habesha Tipster - Remove Game</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
 <?php include 'include/header.php';  ?>
 <?php include 'include/sidebar.php';  ?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Remove/Delete Game</h1> 
        
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
                        if($row['date'] == $dat ){
                          echo "Today's";
                        }
                        else {
                          echo "passed";
                        }
                           
                          
                        ?>  
                      </td>
                      <td>
                        <a href="rmgame.php?post=<?php echo $row['s_id']?>">
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

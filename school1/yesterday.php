<?php 
define('dbconn', 'TRUE');
include 'dbconn.php'; 
$yquery = "select * from score where yesterday = '1' ORDER BY date DESC ";
$yester = $con->query($yquery);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha - yesterday wins</title>
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
        <h1>Our previous Wins</h1>
             <table style="width:100%; background-color: white;">
          <tr><th>Country</th><th>Date</th><th>Team 1</th> <th>score</th> <th>Team 2</th></tr>
          
            <?php
            while ($rowz = $yester->fetch_assoc()) {  
             
                ?>
                <tr>
                  <td><?php echo $rowz['country']  ?></td>
                  <td><?php echo $rowz['date']  ?></td>
                  <td><?php echo $rowz['team1']  ?></td>
                  <td><?php echo $rowz['score']  ?></td>
                  <td><?php echo $rowz['team2']  ?></td>
                  <?php  } ?>
          </tr>
          
        </table>

    
  </div>
</div>
<?php include 'include/footer.php';  ?>
</body>
</html>

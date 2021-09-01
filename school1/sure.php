<?php  
define('dbconn', 'TRUE');
include 'dbconn.php'; 
$suquery = "select * from score where sure = '1'";
$sure = $con->query($suquery);
$d = getdate();
$date = "$d[month]/$d[mday]/$d[year]";

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha - Sure tips</title>
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
        <h1>our 95% sure games For <?php echo $date;  ?></h1>
                     <table style="width:100%; background-color: white;">
          <tr><th>Country</th><th>Team 1</th> <th>score</th> <th>Team 2</th></tr>
          <tr>
            <?php
            while ($rowz = $sure->fetch_assoc()) {  
             
                ?>
                <tr>
                  <td><?php echo $rowz['country']  ?></td>
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

<?php  
define('dbconn', 'TRUE');
include 'dbconn.php';
$d = getdate();
$date = "$d[month]/$d[mday]/$d[year]";
$dat = $f = date('Y-m-j');

$cquery = "select DISTINCT country from score where date='$dat'";
$count = mysqli_query($con,$cquery);
$row = mysqli_num_rows($count);

$query = "select * from score where date = '$dat'";
$score = $con->query($query);
$sc = $score->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Habesha Tipster</title>
  <link rel="icon" href="style/hablogo.png">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
      <?php include 'include/header.php';  ?> 
      <?php include 'include/sidebar.php';  ?>
        
      <div style="padding-left: 5px;" id="content">
        <!-- insert the page content here -->
         
    
      

        <?php  
            if ($row > 0) {
              
            
              while ($row > 0){
                $roww = $count->fetch_assoc(); 
                $county = $roww['country']; 
             
        ?> 
        <div id="Logo_text">
       <h1 style="font-family: century gothic;">Todays Tips <span style="font-size: 16px;"><?php echo $date;  ?> </span> </h1> </div>
        
        <div class='module-body table'>
    <table style='width:100%; font-family: century gothic;'>
          <thead>
               <tr>
                  <th style="background-color: #D6D3CE; color: black; text-align: left; padding-left: 10px;"><img style="width: 25px; height: 25px;" src="style/hablogo.png"></th>
                  <th style="background-color: #DED7CE; color: black; text-align: right; font-size: 15px;"><?php echo $county ?></th>
                  <th style="background-color: #DED7CE; color: black;"></th>
                  <th style="background-color: #DED7CE; color: black; text-align: right; font-size: 10px;"><span style="padding-right: 13px">Habesha</span><br> Betting Tippster</th>
              </tr>
              <tr>
                  <th> Match Date</th>
                  <th>Team 1</th>
                  <th>Score</th>
                  <th>Team 2</th>
              </tr>

              
                <?php  
                   $cquer = "select * from score where date='$dat' && country = '$county'";
                $countie = mysqli_query($con,$cquer);  
                while ($rowz = $countie->fetch_assoc()) {  
             
                ?>
                <tr>
                  <td><?php echo $rowz['date']  ?></td>
                  <td><?php echo $rowz['team1']  ?></td>
                  <td><?php echo $rowz['score']  ?></td>
                  <td><?php echo $rowz['team2']  ?></td>
                  <?php  } ?>
              </tr>
         </thead>
    </table>
  </div>

      <?php  
      $row--;
          }
        }
        elseif ($row == 0) { ?>
        <h1><span style="font-size: 25px;">Sorry</span> , The Tips For Today Are Not Posted Yet.</h1> <br> <br>
        <h2>Till then check out our &nbsp &nbsp  <p style="display: inline-block;"><a href="Yesterday">Yesterday wins</a> | <a href="sure">Sure tips</a> | <a href="news">News</a> </p></h2>
        <br><br>

        <h2>And Join US on &nbsp <a href="Yesterday"><img style="width: 35px; height: 35px;" src="style/tg.png"></a></h2>
          <?php
        }
      ?>



    </div>
      </div>
    </div>
</div>
  <?php include 'include/footer.php';  ?>
</body>
</html>

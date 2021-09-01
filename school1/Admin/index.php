<?php
if(empty($_GET['message'])) {
  header("location:../tip");
}
  elseif(!empty($_GET['message'])) {
    
    $message = $_GET['message'];
  if($message=='p'){
        echo '<script language="javascript">';
    echo 'alert("The Username or password you entered was not valid.")';
    echo '</script>';
  }
  }

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
      </div>
    </div>
    <div id="content_header"></div>
      <?php include 'include/sidebar.php';  ?>

      <div id="content">
        <!-- insert the page content here -->
      <div class='module-body table'>
   <br>
   <br>   
   <br>
    
 <form action="login.php" method="post">
          <div class="form_settings">
            <p><span>Username</span><input type="text" name="username" value="" /></p>
             <p><span>Password</span><input type="Password" name="password" value="" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Login" /></p>
          </div>
        </form>
      </div>


    </div>
      </div>
    </div>
    <div style="padding-top: 160px;"  id="content_footer"></div>
    <div  id="footer">
      <p><a href="index.php">Home</a> | <a href="examples.php">Examples</a> | <a href="page.php">A Page</a> | <a href="another_page.php">Another Page</a> | <a href="contact.php">Contact Us</a></p>
      <p>Copyright &copy; shadowplay_1 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Free CSS Templates</a></p>

    </div>
  </div>
</body>
</html>

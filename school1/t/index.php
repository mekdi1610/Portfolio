<!DOCTYPE HTML>
<html>

<head>
  <title>shadowplay_1</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head> 

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">shadow<span class="logo_colour">play_1</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li><a href="page.html">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h5>January 1st, 2009</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
       <?php
       
    echo "<div class='module-body table'>";
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"Countries");
    error_reporting(0);
    $sql="select table_name from information_schema.tables where TABLE_SCHEMA='Countries'";
    $re=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($re)){
    $TIN=$row[0];
    $sql2="SELECT id, name, population from $TIN";
    $re2=mysqli_query($con,$sql2);
    echo "<table style='width:100%'>";
    echo "<thead>";
     echo "<tr>";
     echo "<th>$TIN</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Number</th>";
    echo "</tr>";
    while($row2 = mysqli_fetch_array($re2)){

    
    $ID=$row2['id']; 
    $Name=$row2['name'];
    $pop=$row2['population'];
    echo "<tr>";
    echo "<td>$ID</td>";
    echo "<td>$Name</td>";
    echo "<td>$pop</td>";
    echo "</tr>";
    }
}

?>
      </div>
    </div>
    <div id="content_footer"></div>
    
  </div>
</body>
</html>

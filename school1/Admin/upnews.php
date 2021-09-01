<?php
    define('dbconn', 'TRUE');
    include("dbconn.php");
    $d = getdate();
    $date = "$d[month]/$d[mday]/$d[year]";
            
        if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST["title"];
    $body = $_POST["body"];
    
    
  
            $sql = "INSERT INTO news (date , title , body) VALUES ('$date' , '$title' , '$body')";
            mysqli_query($con, $sql);
            header("location:news.php");	
 	 }

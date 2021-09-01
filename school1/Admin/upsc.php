<?php
    define('dbconn', 'TRUE');
    include("dbconn.php");
    
            
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $date = $_POST["date"];
        $team1 = $_POST["team1"];
        $team2 = $_POST["team2"];
        $score = $_POST["score"];
        $country = $_POST["country"];
    
  
            $sql = "INSERT INTO score (date , team1 , score , team2 , country ) VALUES ('$date' , '$team1' , '$score' , '$team2' , '$country')";
            mysqli_query($con, $sql);
            header("location:upload.php");	
 	 }

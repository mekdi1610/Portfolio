<?php
    include("includes/config.php");
    include("includes/db.php");
    
    $username = trim($_POST["usname"]);
    $password = trim($_POST["pwd"]);    
    
    $query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
    $posts = $db->query($query);
    if($posts->num_rows == 1) {
    header("location: admin.php");
    session_start();
    $_SESSION['username'] = $username;
    }
    else{
     header("location: admin_index.php?message=p");   
    }
?>

<?php
define('dbconn', 'TRUE');
define('admin', 'TRUE');
require_once 'dbconn.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM admin";
  $posts = $con->query($query);
    $row = $posts->fetch_assoc();
    $usn = $row['username'];
    $psw = $row['password'];
    if ( $usn == $username &&  $psw == $password ) {
                                 define('admin', 'TRUE');
                                 header("location: HabeshaAdminUpload.m");
                                 session_start();
                                 $_SESSION['usn'] = $username;     
                        } else{                     
                            header("location: hbtLogin.p");
                        }
                   

}
?>

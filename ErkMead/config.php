<?php
/* Database credentials.running MySQL server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql206.epizy.com');
define('DB_USERNAME', 'epiz_25600350');
define('DB_PASSWORD', 'uEnvNJf3Iv1M0AM');
define('DB_NAME', 'epiz_25600350_erk');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
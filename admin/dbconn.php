<?php
if (!defined('dbconn')) {
	header("location: index.php");
}
/* Database credentials.running MySQL server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql206.epizy.coM');
define('DB_USERNAME', 'epiz_25600350');
define('DB_PASSWORD', 'uEnvNJf3Iv1M0AM');
define('DB_NAME', 'epiz_25600350_Portfolio');

 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
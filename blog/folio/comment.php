<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $sclid = "";
$username_err = $password_err = $sclid_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 	

	//check if School ID is empty
	
	
		$sclid= $_POST["comment"];

	
     sql = "INSERT INTO comment (comment_id,comment_by,comment,post_id,date,pwd) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_fname, $param_lname, $param_username, $param_sclid, $param_password);
            
            // Set parameters
            $param_fname=$fname;
            $param_lname=$lname;
            $param_username = $username;
            $param_sclid=$sclid;
           
                           
      
?>

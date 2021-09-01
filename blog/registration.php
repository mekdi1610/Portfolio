<?php
// Include config file
require_once 'dbconn.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$fname = $lname = $sclid = ""; 
$username_err = $password_err = $confirm_password_err = "";
$fname_err = $lname_err = $sclid_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
 
    // Validate username
    if(empty(trim($_POST["usname"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT usname FROM hilreg WHERE usname = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["usname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["usname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    //validate school ID
    if (empty(trim($_POST['sclid']))) {
    	$sclid_err="Please enter your School ID number";
    }else {
 	// Prepare a select statement
        $sql = "SELECT sclid FROM hilreg WHERE sclid = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_sclid);
            
            // Set parameters
            $param_sclid = trim($_POST["sclid"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This School ID is already taken.";
                } else{
                    $sclid = trim($_POST["sclid"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }



    // Validate password
    if(empty(trim($_POST['pwd']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['pwd'])) <= 4){
        $password_err = "Password must have atleast 4 characters.";
    } else{
        $password = trim($_POST['pwd']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["re-pwd"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['re-pwd']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO hilreg (fname,lname,usname,sclid,pwd) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_fname, $param_lname, $param_username, $param_sclid, $param_password);
            
            // Set parameters
            $param_fname=$fname;
            $param_lname=$lname;
            $param_username = $username;
            $param_sclid=$sclid;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
               header("location:index.php");
            } else{
                echo "Something went wrong. Please try again later.";
                
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
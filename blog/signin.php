<?php
// Include config file
require_once 'dbconn.php';
 
// Define variables and initialize with empty values
$username = $password = $sclid = "";
$username_err = $password_err = $sclid_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 	

	//check if School ID is empty
	if(empty($_POST["sclid"])){
		$sclid_err = 'Please enter your School ID.';
	}else{
		$sclid=trim($_POST["sclid"]);
	}

    // Check if username is empty
    if(empty(trim($_POST["usname"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["usname"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["pwd"]))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST["pwd"]);
    }

    $query = "SELECT * FROM hilreg WHERE sclid = '$sclid'" ;
  $posts = $con->query($query);
    $row = $posts->fetch_assoc();
    if ($row['status'] == 1) {
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT usname, pwd FROM hilreg WHERE usname = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;


                                 header("location: home.php");     
                    
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                            header("location: index.php?message=p");
                         
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                     header("location: index.php?message=u");

                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    } 
    
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    else{
        header("location: index.php?message=a");
    }
    
    // Close connection
    mysqli_close($con);
}
?>

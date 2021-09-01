<?php
require_once 'config.php';
require_once 'codegen.php';
$cod=getcode();

$to       = 'mekdi1610@gmail.com';
//$subject  = 'Confirmation code';
$message  = 'Hi, Here is your Confirmation Code:- '.$cod;
$headers  = 'From: ERK.MAED.INTERNAL@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers)) {
    header("Location: passwrdcofrm.php");
}
else
{
    echo "Email sending failed!";
}



$sql1="DELETE FROM code ";
 
        if($stmt1 = mysqli_prepare($link, $sql1)){
        	if(mysqli_stmt_execute($stmt1)){
        		
        	}
        }



        $sql = "INSERT INTO code (Code) VALUES (?)";

         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_cod);
            
            // Set parameters
            $param_cod=$cod;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
 
				}
				else
					echo mysql_error();
			}

?>

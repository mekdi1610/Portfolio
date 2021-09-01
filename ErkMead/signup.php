<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><a href="Home.html">Home </a><br>
<?php
include 'config.php';

$Password=$_POST["passwordNEW"];
$ConfirmPassword=$_POST["confirmpassword"];
if($Password!=$ConfirmPassword)
echo "Please enter the same Passwords";
else{
	$hash=password_hash($Password,PASSWORD_BCRYPT);

$sql="INSERT INTO signup(UserName,Email,Password,ConfirmPassword,Role) 
VALUES ('$_POST[Newuser]','$hash','$hash','$_POST[useremail]','$_POST[Role]')";

			
if (mysqli_query($link, $sql))
{
	//display message data inserted if data is inserted in the database
	echo '<script>
	alert("Signup Successful") 
	document.location = "index.php"
	</script>';
}
else{
	echo '<script>
	alert("Failed") 
	document.location = "Signup.html"
	</script>';
}
}
mysqli_close($con);
?>
</body>
</html>
<!--echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);-->
<!DOCTYPE html>
<html>
<head>
	
	<title>Login Form</title>
</head>
<body>
    <?php
    /*
  error_reporting(0);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"erk mead");
$roles1="Doctor";
$roles2="Staff";
*/
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="Admin" && $password=="123456"){
    include("add.php");
}
else{
	echo '<script>
	alert("Wrong Username or Password") 
	document.location = "index.php"
	</script>';
	
}
//echo $passwords;
/*
$sql="SELECT Password,Role from signup where UserName='$uid'";
$re=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($re)){
	$pass=$row['Password'];
	$role=$row['Role'];
	if(password_verify($passwords,$pass)){
		//echo "You have logged in";

if($roles1==$role){
include("Diagnosis.php");
}
if($roles2==$role){
include("PatientInformation.html");
}
	}
	else
		echo "You have not logged in";
}
	/*
if($passwords==$pass && $roles3==$role){
	include("Home.html");
}
if($passwords==$pass && $roles1==$role){
include("Home.html");
include("Home.php");
}
if($passwords==$pass && $roles2==$role){
include("HomeI.html");
}
else{
 

}
}
*/
  
?>

</body>
</html>
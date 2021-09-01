<!DOCTYPE html>
<html lang="en">


<head>

</head>
<body  onload="Generate()">
	<?php
	//Connect to Database to insert data
$connect_database=mysqli_connect("localhost","root","");

if(mysqli_select_db($connect_database,"erk mead")){
	echo "hi";
}
//Insert data
$sql="INSERT INTO serviceinformation (Code,Service,Description) VALUES ('$_POST[code]','$_POST[ST]','$_POST[des]')";
if (mysqli_query($connect_database,$sql))
{
	//display message data inserted if data is inserted in the database
    echo "Data Inserted";
}

?>
</body>
</html>
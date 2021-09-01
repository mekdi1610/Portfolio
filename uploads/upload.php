<?php 
define('dbconn', 'TRUE');
include 'dbconn.php';
          
$query = "select * from pictures";
$score = $con->query($query);
$sc = $score->fetch_assoc();
  while ($sc = $score->fetch_assoc()) {
echo $sc['filename'];
?>
<img style="width: auto; height: 50%;" src="<?php echo $sc['path']; ?>">
<?php } ?>

 <form enctype="multipart/form-data" action="" method="post">

 <input type="hidden" name="MAX_FILE_SIZE" value="8000000" /> Select file:

 <input type="file" name="data" />

 <input type="text" name="belong" />

 <input type="submit" name="submit" value="Upload File" /></form>
 

 <?php
$belong = $_POST["belong"];
 // check uploaded file size
 if ($_FILES['data']['size'] == 0) {
 die("ERROR: Zero byte file upload");
 }
  // check if this is a valid upload
 if (!is_uploaded_file($_FILES['data']['tmp_name'])) {
 die("ERROR: Not a valid file upload"); } // set the name of the target directory
 $uploadDir = "./uploads/";
 $fileName = $_FILES['data']['name'];




	$sql=" INSERT INTO `pictures` (`filename`, `path` , `belongs`) VALUES ('$fileName', '$uploadDir$fileName', '$belong' )";
	if (!mysqli_query($con, $sql))
	{ 
		die('Error: ' . mysqli_error($con));
	} 
	echo '<script language="javascript">';
		echo 'alert("1 record added successfully.")';
		echo '</script>';

	mysqli_close($con);



  // copy the uploaded file to the directory
move_uploaded_file($_FILES['data']['tmp_name'], $uploadDir .
$_FILES['data']['name']) or die("Cannot copy uploaded file"); //display success message
   


	
         
?>
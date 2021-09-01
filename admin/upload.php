<?php 
define('dbconn', 'TRUE');
include 'dbconn.php';
		
			if (isset($_POST['project'])) {
			 $pname=$_POST['name'];
			 $pcategory=$_POST['category'];
			 $pclient=$_POST['client'];
			 $pdate=$_POST['date'];
			 $pdescription=$_POST['description'];
			 $plink=$_POST['link'];
			 $sqll="INSERT INTO `project` (`name`, `category`, `client`, `date`, `description`, `link`) VALUES ('$pname', '$pcategory' , '$pclient' , '$pdate' , '$pdescription' , '$plink')";
			 mysqli_query($con, $sqll);
			 	echo '<script language="javascript">';
					echo 'alert("Project added successfully.")';
					echo '</script>';
					header("location:add.php");
			}

				elseif (isset($_POST['pictures'])) {
				 
				 $main=$_POST['main'];
				 $belongs=$_POST['belongs'];
  					// check if this is a valid upload
					 if (!is_uploaded_file($_FILES['data']['tmp_name'])) {
					 die("ERROR: Not a valid file upload"); } // set the name of the target directory
					 $uploadDir = "./uploads/";
					 $fileName = $_FILES['data']['name'];
					 $sql2="SELECT `project`.`id`, `project`.`category` from `project` where `name` = '$belongs'";
					 $cat = $con->query($sql2);
                     $tea = $cat->fetch_assoc(); 
                     $Proid=$tea['id'];
                     $Cata=$tea['category'];
                     

					 if ($main == '1') {
					 	$psql= "UPDATE `pictures` SET `main` = '0' WHERE `pictures`.`belongs` = '$belongs'";
					 	mysqli_query($con, $psql);
					 	$sql=" INSERT INTO `pictures` (`filename`, `path`, `belongs`, `Catagory`, `ProID`, `main`) VALUES ('$fileName', '$uploadDir$fileName', '$belongs', '$Cata', '$Proid', 1)";
					 	
						if (!mysqli_query($con, $sql))
						{ 
							die('Error: ' . mysqli_error($con));
						} 
						echo '<script language="javascript">';
							echo 'alert("1 record added successfully.")';
							echo '</script>';

						//mysqli_close($con);
					  // copy the uploaded file to the directory
					move_uploaded_file($_FILES['data']['tmp_name'], ".".$uploadDir .
					$_FILES['data']['name']) or die("Cannot copy uploaded file"); //display success message
   					header("location:add.php");
					 }
					 	else{
						$sql="INSERT INTO `pictures` (`filename`, `path` , `belongs`, `Catagory`, `ProID`, `main`) VALUES ('$fileName', '$uploadDir$fileName', '$belongs' ,'$Cata', '$Proid', 0)";
						if (!mysqli_query($con, $sql))
						{ 
							die('Error: ' . mysqli_error($con));
						} 
						echo '<script language="javascript">';
							echo 'alert("1 record added successfully.")';
							echo '</script>';

						mysqli_close($con);
					  // copy the uploaded file to the directory
					move_uploaded_file($_FILES['data']['tmp_name'], ".".$uploadDir .
					$_FILES['data']['name']) or die("Cannot copy uploaded file"); //display success message
   					header("location:add.php");
   					}
				}


					 elseif (isset($_POST['team'])) {
					 $tname=$_POST['name'];
					 $trole=$_POST['role'];
					 $telegram=$_POST['telegram'];
					 $linkedin=$_POST['linkedin'];
					 $instagram=$_POST['instagram'];
					 $sql=" INSERT INTO `team` (`name`, `role`, `telegram`, `instagram`, `linkedin`) VALUES ('$tname', '$trole', '$telegram' ,'$instagram' ,'$linkedin' )";
					 mysqli_query($con, $sql);
					 	 	
					 echo '<script language="javascript">';
					echo 'alert("Team mate added successfully.")';
					echo '</script>';
					header("location:add.php");
					}
					 elseif (isset($_POST['edi_project'])) {

					 $pname=$_POST['name'];
					 $pid=$_POST['id'];
					 $pcategory=$_POST['category'];
					 $pclient=$_POST['client'];
					 $pdate=$_POST['date'];
					 $pdescription=$_POST['description'];
					 $plink=$_POST['link'];
					 $sqll="UPDATE `project` SET `name`= '$pname' ,`category`= '$pcategory' ,`client`= '$pclient' ,`date`= '$pdate' ,`description`= '$pdescription' ,`link`='$plink' WHERE id = '$pid'";
					 mysqli_query($con, $sqll);

					 	echo '<script language="javascript">';
						echo 'alert("Project added successfully.")';
						echo '</script>';
						header("location:update.php");
					}
					 elseif (isset($_POST['epic'])) {
					 	$main=$_POST['main'];
					if ($main == '1') {
					 $name=$_POST['name'];
					 $id=$_POST['pid'];
					 $path=$_POST['path'];
					 $belongs=$_POST['belongs'];

					 $psql= "UPDATE `pictures` SET `main` = '0' WHERE `belongs` = '$belongs'";
                        mysqli_query($con, $psql);

					 $sqll="UPDATE `pictures` SET `filename`= '$name' ,`path`= '$path' ,`belongs`= '$belongs' ,`main`= '$main'  WHERE id = '$id'";
					 mysqli_query($con, $sqll);

					 	echo '<script language="javascript">';
						echo 'alert("picture updated successfully.")';
						echo '</script>';
						header("location:update.php");
					}
					elseif($main == '0'){
					 			 $name=$_POST['name'];
					 $id=$_POST['pid'];
					 $path=$_POST['path'];
					 $belongs=$_POST['belongs'];
					 $sqll="UPDATE `pictures` SET `filename`= '$name' ,`path`= '$path' ,`belongs`= '$belongs' ,`main`= '$main'  WHERE id = '$id'";
					 mysqli_query($con, $sqll);

					 	echo '<script language="javascript">';
						echo 'alert("picture updated successfully.")';
						echo '</script>';
						header("location:update.php");
					}
				}
					 elseif (isset($_POST['eteam'])) {
					 $tid=$_POST['tid'];
					 $tname=$_POST['name'];
					 $trole=$_POST['role'];
					 $telegram=$_POST['telegram'];
					 $linkedin=$_POST['linkedin'];
					 $instagram=$_POST['instagram'];
					 $sqll="UPDATE `team` SET `name`= '$tname' ,`role`= '$trole' ,`telegram`= '$telegram' ,`linkedin`= '$linkedin' 
					 ,`instagram`= '$instagram' WHERE id = '$tid'";
					 mysqli_query($con, $sqll);

					 	echo '<script language="javascript">';
						echo 'alert("Project added successfully.")';
						echo '</script>';
						header("location:update.php");
					}
				
				
				
		
				



?>





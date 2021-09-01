<?php include 'config.php'; 
      include 'db.php';
      session_start();
$user=$_SESSION['username'];

        
      
      $cats = $db->query("SELECT * FROM categories");
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="//odn.tinymoe.com/4/tinymoe.min.js"></script>
  <script> tinymoe.init({ selector:'textarea'});</script>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>blog</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Blog Stylesheet File -->
  <link href="css/blog.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">


</head>

<body>

  <!-- start section navbar -->
  <nav id="main-nav-subpage" class="subpage-nav">
    <div class="row">
      <div class="container">


        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="../home.php" class="smoothScroll">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End section navbar -->
  <!-- start section main content -->

              
              <div class="col-lg-12">
                <div class="cmt padDiv">
<?php // display file upload form
 if (!isset($_POST['submit'])) { ?>
 <form enctype="multipart/form-data" action="<?php echo
$_SERVER['PHP_SELF']?>" method="post">

 <input type="hidden" name="MAX_FILE_SIZE" value="8000000" /> Select file:

 <input type="file" name="data" />

 <div class="form-group">
 <input  type="text" name="keyword" class="form-control" placeholder="keyword *" required="required">
 </div>
<div class="form-group">
<textarea  name="body" class="form-control" placeholder="Body *" style="height: 200px;" required="required"></textarea>
</div>

<div class="form-group">
<input  type="text" name="title" class="form-control" placeholder="title">
</div>

 <div class="form-group">                        
<select class="form-control" name="category" >
<?php while ($row = $cats->fetch_assoc()) {
?>
<option value=" <?php echo $row['id']  ?>"> <?php echo $row['text']  ?></option>
                             
<?php } ?>
</select>
</div>

 <input type="submit" name="submit" value="Post" /></form>
 

 <?php
 } else {
 // check uploaded file size
 
  // check if this is a valid upload
  // set the name of the target directory
 $uploadDir = "./upload/";
 $fileName = $_FILES['data']['name'];


$con = mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM", "epiz_25600350_blog");
	if (!$con) { die('Could not connect: ' . mysqli_connect_error()); } 	
		 $title = mysqli_real_escape_string($db , $_POST['title']);
        $category = mysqli_real_escape_string($db , $_POST['category']);
        $body = mysqli_real_escape_string($db , $_POST['body']);
        $keyword = mysqli_real_escape_string($db , $_POST['keyword']);

        $d = getdate();
        $date = "$d[month], $d[mday], $d[year]";
	$sql=" INSERT INTO `posts` (`id`, `title`, `category`, `date`, `body`, `author`, `keywords`, `priority`, `filename`, `path`) VALUES (NULL, '$title', '$category', '$date', '$body', '$user', '$keyword', NULL, '$fileName', '$uploadDir$fileName')";
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
$_FILES['data']['name']); //display success message
  } 


	
         
?>
<?php include 'config.php'; 
      include 'db.php';
      session_start();
$user=$_SESSION['username'];
   if (isset($_POST['add_post'])) {
        $title = mysqli_real_escape_string($db , $_POST['title']);
        $category = mysqli_real_escape_string($db , $_POST['category']);
        $body = mysqli_real_escape_string($db , $_POST['body']);
        $keyword = mysqli_real_escape_string($db , $_POST['keyword']);

        $d = getdate();
        $date = "$d[month], $d[mday], $d[year]";

 // check uploaded file size
       if ($_FILES['data']['size'] == 0) {
       die("ERROR: Zero byte file upload");
       }
  // check if this is a valid upload
       if (!is_uploaded_file($_FILES['data']['tmp_name'])) {
       die("ERROR: Not a valid file upload"); } // set the name of the target directory
        $uploadDir = "./upload/";
        $fileName = $_FILES['data']['name'];
      
      
        $sql= " INSERT INTO `posts` (`id`, `title`, `category`, `date`, `body`, `author`, `keywords`,'filename', 'path') VALUES (NULL, '$title', '$category', '$date', '$body', '$user', '$keyword','$fileName','$uploadDir$fileName')";
        $db->query($sql);
    
      
  // copy the uploaded file to the directory
move_uploaded_file($_FILES['data']['tmp_name'], $uploadDir .
$_FILES['data']['name']) or die("Cannot copy uploaded file"); //display success message
 echo "File successfully uploaded!"; 
}
        
      
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
                  <form  method="POST" >
                    <div class="row">
                       
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input  type="text" name="keyword" class="form-control" placeholder="keyword *" required="required">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">                        
                            <select class="form-control" name="category" >
                              <?php while ($row = $cats->fetch_assoc()) {
                              ?>
                              <option value=" <?php echo $row['id']  ?>"> <?php echo $row['text']  ?></option>
                              
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input  type="text" name="title" class="form-control" placeholder="title">
                          </div>
                        </div>


                        <div class="col-lg-12">
                          <div class="form-group">
                            <textarea  name="body" class="form-control" placeholder="Body *" style="height: 200px;" required="required"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <input type="hidden" name="MAX_FILE_SIZE" value="8000000" /> Select file:

                            <input type="file" name="data" />
                          </div>
                        </div>

                        <div class="col-lg-12">
                        <button type="submit" name="add_post" class="btn btn-default">post</button>      
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  </div> -->
  <!-- start section main content -->

  <!-- start section footer -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

       
      </div>

      <p>&copy; Copyrights Folio. All rights reserved.</p>

      <div class="credits">
       
      </div>

    </div>
  </div>
  <!-- End section footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

 

</body>

</html>

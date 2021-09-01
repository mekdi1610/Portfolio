<?php 
session_start();
 define('dbconn', 'TRUE');
include 'dbconn.php';
        $prquery ="SELECT DISTINCT name FROM `project`";
        $project = $con->query($prquery);

         $nquery ="SELECT DISTINCT name FROM `team`";
        $name = $con->query($nquery);

        $cquery ="SELECT * FROM `category`";
        $cat = $con->query($cquery);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="add.php">Add</a></li>
                                        <li><a href="update.php">Update</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="#" target="_black" class="say_hi">Say Hello</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

     <!-- bradcam_area  -->
     <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Add Project/Picture/Team mate</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="col-lg-8 col-md-8">
                        <h2 style="font-weight: bold;" class="mb-30">Project Information</h2>
                        <form action="upload.php" method="post">
                            <div class="mt-10">
                                <input type="text" name="name" placeholder="Project Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Name'" required
                                    class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select"">
                                           
                                    <select name="category" >
                                        <?php while ($category = $cat->fetch_assoc()) {  ?>
                                        <option value="<?php echo $category['category']; ?>"><?php echo $category['category']; ?></option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>  

                            <div class="mt-10">
                                <input type="text" name="client" placeholder="Client"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Client'" required
                                    class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="Date" name="date" placeholder="Date"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required
                                    class="single-input">
                            </div>

                            <div class="mt-10">
                                <textarea class="single-textarea" name="description" placeholder="Project Description" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Project Description'" required></textarea>
                            </div>
                            
                            <div class="mt-10">
                                <input type="text" name="link" placeholder="Project Link"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Link'" required
                                    class="single-input">
                            </div>
                            <br>

                              <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <button class="boxed-btn3" type="submit" name="project">Add</button>
                                    </div>
                                </div>
                        </form>
                        <br>
                        <br>
            
        
          <div class="col-lg-8 col-md-8">
                        <h2 style="font-weight: bold;" class="mb-30">Picture Information</h2>
                        <form enctype="multipart/form-data" action="upload.php" method="post">
                            <div class="mt-10">
                               
                                <input type="file" name="data" placeholder="Picture"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Picture'" required
                                    class="single-input">
                            </div>

                             <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select"">
                                           choose to whom it belongs
                                    <select name="belongs" >
                                        <?php while ($prj = $project->fetch_assoc()) {  ?>
                                        <option value="<?php echo $prj['name']; ?>"><?php echo $prj['name']; ?></option>
                                        <?php } ?>

                                        <?php while ($namee = $name->fetch_assoc()) {  ?>
                                        <option value="<?php echo $namee['name']; ?>"><?php echo $namee['name']; ?></option>
                                        <?php } ?> 
                                    </select>
                                    
                                </div>
                            </div>  
                                 <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select"">
                                           <span>main</span> 
                                    <select name="main" >
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                    </select>
                                    
                                </div>
                            </div>  
                            <br>
                              <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <button class="boxed-btn3" type="submit" name="pictures">Add</button>
                                    </div>
                                </div>
                        </form>
                        
            </div>        
         </div>
         <br>
         <br>
         <div class="col-lg-8 col-md-8">
                        <h2 style="font-weight: bold;" class="mb-30">Team mate Information</h2>
                        <form action="upload.php" method="post">
                            <div class="mt-10">
                                <input type="text" name="name" placeholder="Full Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Name'" required
                                    class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select"">
                                            <select name="role" >
                                    <option value="Graphics Designer">Graphics Designer</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Developer/Graphics Designer">Developer/Graphics Designer</option>
                                    </select>
                                </div>
                            </div>  

                            <div class="mt-10">
                                <input type="text" name="telegram" placeholder="Telegram"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Client'" required
                                    class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="text" name="linkedin" placeholder="Linkedin"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required
                                    class="single-input">
                            </div>

                         
                            <div class="mt-10">
                                <input type="text" name="twitter" placeholder="Twitter"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Link'" required
                                    class="single-input">
                            </div>
                            <br>

                              <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <button class="boxed-btn3" type="submit" name="team">Add</button>
                                    </div>
                                </div>
                        </form>
     </div></div>

    </div>

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-9">
                        <div class="menu_links">
                            <ul>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="#">About</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="#">Portfolio</a></li>               
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.1s" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="socail_links">
                            <ul>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
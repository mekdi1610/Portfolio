<?php  
define('dbconn', 'TRUE');
include 'dbconn.php';
if(empty($_GET['id'])) {
  header("location:index.php");
}
  elseif(!empty($_GET['id'])) {
  $p_id = $_GET['id'];

$query = "select * from project where id = '$p_id'";
$project = $con->query($query);
$row = $project->fetch_assoc();

   
        $pnam= $row['name'];
        $prquery = "select * from pictures where belongs = '$pnam' && main = '1'";
        $proj = $con->query($prquery);
        $pric = $proj->fetch_assoc();

        $query = "select path from pictures where belongs = '$pnam' ORDER BY main DESC";
        $result = mysqli_query($con,$query);
        $pici = mysqli_fetch_all($result,MYSQLI_NUM);
                        
?>
<?php

require_once __DIR__.'/contact/vendor/autoload.php';
require_once __DIR__.'/contact/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IO Tech Solutions</title>
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
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="Portfolio.php">Portfolio</a></li>
                                        <li><a href="contact.php">Contact</a></li>
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

    <!-- portfolio_details_banner_start  -->
    <div class="portfolio_details_banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="details_info ">
                        <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"><?php echo $row['name'];  ?></h3>
                        <div class="details_links d-flex justify-content-between align-items-center">
                            <div class="single_details single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <span>Client</span>
                                <h4><?php echo $row['client'];  ?></h4>
                            </div>
                            <div class="single_details single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <span>Category</span>
                                <h4><?php echo $row['category'];  ?></h4>
                            </div>
                            <div class="single_details single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <span>Project Date</span>
                                <h4><?php echo $row['date'];  ?></h4>
                            </div>
                            <div class="single_details single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <span>Share Project</span>
                                <div class="social_links">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php if ($row['category'] == "Graphics Design") { ?>
                            <div class="single_details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                            </div>
                            <?php } else { ?>
                            
                                
                            <div class="single_details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                <div class="project_btn">
                                    <a href="<?php echo $row['link'];  ?>" class="boxed-btn3">Project Link</a>
                                </div>
                            </div>
                            <?php    }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio_details_banner_end  -->

    <div class="portfolio_details_wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <img src="<?php echo $pric['path'];  ?>" alt="">
                    </div>
                    <div class="details_text">
                        <div class="row">
                            
                        <div class="col-lg-12">
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Description</h3>
                        <blockquote class="generic-blockquote">
                           <?php echo $row['description'];  ?>
                        </blockquote>
                    </div>
                        </div>
                    </div>
                    <div class="thumbs">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_thumb wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                                    <img src="<?php echo $pici[1][0];  ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                    <img src="<?php echo $pici[2][0];  ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- testimonial_area  -->
    
    <!-- /testimonial_area  -->

    <div class="get_in_tauch_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Get in Touch</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Feel free to contact us anytime! </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="touch_form">
                        <form action="contact/submit.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <input type="text" placeholder="Your Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                        <input type="email" placeholder="Email" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <input type="email" placeholder="Subject" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                       <textarea name="" id="" cols="30" placeholder="Message" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                        <button class="boxed-btn3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php
                            if (!empty($success)) {
                                ?>
                                <div class="alert alert-success">Your message was sent successfully!</div>
                                <?php
                            }
                            ?>

                            <?php
                            if (!empty($error)) {
                                ?>
                                <div class="alert alert-danger"><?= $error ?></div>
                                <?php
                            }
                            ?>

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
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="index.html">Home</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
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
<?php } ?>
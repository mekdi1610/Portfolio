<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

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
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>

    <!-- reCAPTCHA Javascript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
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
                                      <li><a class="active" href="../index.php">home</a></li>
                                      <li><a href="../Portfolio.php">Portfolio</a></li>
                                      <li><a href="index.php">Contact</a></li>
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
  <div class="bradcam_area breadcam_bg_3">
    <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="bradcam_text">
                  <h3>Contact Us</h3>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area  -->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
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

                           <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form action="submit.php" method="post">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
              <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
            </div>
            <div class="form-group mt-3">
            
            <button class="boxed-btn3" type="submit">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Addis Ababa, Ethiopia.</h3>
              <p>Po.Box, ET 27209</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+251 93 969 4696</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>ivorytechsolutions620@gmail.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="#">Services</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="#">Portfolio</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="#">Pages</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Blog</a></li>
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
  <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="../js/vendor/jquery-1.12.4.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/isotope.pkgd.min.js"></script>
  <script src="../js/ajax-form.js"></script>
  <script src="../js/waypoints.min.js"></script>
  <script src="../js/jquery.counterup.min.js"></script>
  <script src="../js/imagesloaded.pkgd.min.js"></script>
  <script src="../js/scrollIt.js"></script>
  <script src="../js/jquery.scrollUp.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/nice-select.min.js"></script>
  <script src="../js/jquery.slicknav.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="../js/contact.js"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../js/jquery.form.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/mail-script.js"></script>

  <script src="../js/main.js"></script>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
</body>
</html>

<?php
include_once('PHP/Team.php');
/*
session_start();
//Unset all the variables set with session
unset($_SESSION["UserName"]);
unset($_SESSION["FullName"]);
unset($_SESSION["Role"]);
*/
//Call the Account class
$teamObj = new Team();



//Retrieve member information
$accept = $teamObj->fetchTeam();
$id=$accept[0];
$name = $accept[1];
$role = $accept[2];
$tg = $accept[3];
$path2 = $accept[4];

include_once('PHP/Project.php');
$proObj = new Project();
//Retrieve member information
$accepts = $proObj->fetchProjectPic();
$ids=$accepts[0];
$path = $accepts[1];
$belongs = $accepts[2];
$cat = $accepts[3];
$names = $accepts[4];
$proID = $accepts[5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>IO | Tech Solutions</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	
	<!-- Google Fonts -->
	<link href='//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="css/style.min.css" />
	<link rel="stylesheet" href="css/custom.css" />
	  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/facebook-bootstrap/4.1.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'><link rel="stylesheet" href="css/stylee.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body data-spy="scroll" data-offset="60" data-target=".nav__holder" data-cookie="on" id="home" itemscope itemtype="http://schema.org/WebPage">

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Loading..."
		</div>
	</div>  

	<!-- Header -->
	<header class="nav nav--always-fixed" itemtype="http://schema.org/WPHeader" itemscope>

		<div class="nav__holder nav--sticky nav--align-center">
			<div class="container-fluid container-semi-fluid">
				<div class="flex-parent">

					<div class="nav__header clearfix">
						<!-- Logo -->
						<div class="logo-wrap local-scroll">
							<a href="#home" class="logo__url">
								<img class="logo" src="image/logo.jpg" alt="logo">
							</a>
						</div>

						<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
						</button>
					</div> <!-- end nav-header -->
					
					<!-- Navbar -->
					<nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">              
						<ul  class="nav__menu local-scroll" id="onepage-nav">
							<li class="nav__dropdown">
								<a href="index.php#home" class="nav-link active" aria-haspopup="true">Home</a>
								<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								
							</li>
							<li>
								<a href="#services" class="nav-link">Services</a>
							</li>
							<li>
								<a href="#about" class="nav-link">About</a>
							</li>
							<li>
								<a href="#works" class="nav-link">Works</a>
							</li>              
	
							<li class="nav__dropdown">
								<a href="#" class="nav-link" aria-haspopup="true">Pages</a>
								<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
															</li>
							<li>
								<a href="#contact" class="nav-link">Contact</a>
							</li>
						</ul> <!-- end menu -->


						<!-- Mobile Socials -->
						<div class="nav__mobile-socials d-lg-none">
							<div class="socials">
								<a href="https://www.instagram.com/iotechsolutionseth/" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
								<a href="https://m.facebook.com/IO-Tech-Solutions-106320834849316/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
								<a href="#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
							</div>
						</div>

					</nav> <!-- end nav-wrap -->

					<!-- Socials -->
					<div class="nav__socials flex-child d-none d-lg-block">
						<div class="socials right">
							<a href="https://www.instagram.com/iotechsolutionseth/" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
							<a href="https://m.facebook.com/IO-Tech-Solutions-106320834849316/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
							<a href="#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
						</div>
					</div>

				</div> <!-- end flex-parent -->
			</div> <!-- end container -->

		</div>
	</header> <!-- end navigation -->

	<main class="main-wrap">
		<div class="content-wrap">

			<!-- Revolution Slider -->
			<section class="p-0"> 
				<div class="rev_slider_wrapper">
					<div class="rev_slider" id="slider1" data-version="5.0">
						<ul>
							<!-- SLIDE 1 -->
							<li data-fstransition="fade"
								data-transition="parallaxtoright"
								data-easein="default" 
								data-easeout="default"
								data-slotamount="1"
								data-masterspeed="1200"
								data-delay="8000"
								data-title="The Art of Design"
								>
								<!-- MAIN IMAGE -->
								<img src="img/hero/hero_1-min.jpg"
									alt=""
									data-bgrepeat="no-repeat"
									data-bgfit="cover"
									data-bgparallax="7"
									class="rev-slidebg"
									>

								<!-- COLOR OVERLAY -->
								<div class="tp-caption tp-shape tp-shapewrapper"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
									data-width="full"
									data-height="full"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
									data-transform_out="s:300;s:300;" 
									data-start="200" 
									data-basealign="slide" 
									data-responsive_offset="on" 
									data-responsive="off"
									style="z-index: 1; background-color: rgba(0,0,0,.68);"> 
								</div>

								<!-- HERO TITLE -->
								<div class="tp-caption hero-title rs-parallaxlevel-7"
									data-x="center"
									data-y="center"
									data-voffset="[-30, -30, -60, -80]"
									data-textAlign="center"
									data-width="[100%, 100%, 100%, 300px]"
									data-whitespace="[nowrap, nowrap, nowrap, normal]"
									data-fontsize="[68, 48, 48, 48]"
									data-frames='[{
										"delay":300,
										"split":"chars",
										"splitdelay":0.05,
										"speed":1000,
										"split_direction":"forward",
										"frame":"0",
										"from":"x:50px;opacity:0;fb:20px;",
										"ease":"Power3.easeInOut",
										"to":"o:1;fb:0;"
										},{
										"delay":"wait",
										"split":"chars",
										"splitdelay":0.02,
										"speed":900,
										"split_direction":"backward",
										"frame":"999",
										"to":"opacity:0;","ease":"Power3.easeInOut"
									}]'
									><p>IO Technology Solutions</p> <p> Ethiopia </p>
								</div>

								<!-- LEARN MORE -->
								<div class="tp-caption hero-video-play rs-parallaxlevel-7"
									data-x="center"
									data-y="center"                
									data-voffset="[60, 60, 20, 30]"
									data-fontsize="[24]"
									data-textAlign="center"
									data-frames='[{
										"delay":1200,
										"speed":1000,
										"frame":"0",
										"from":"o:0;",
										"to":"o:1;","ease":"Power3.easeInOut"
									},{
										"delay":"wait",
										"speed":900,
										"frame":"999",
										"to":"opacity:0;",
										"ease":"Power3.easeInOut"
									}]'
									>
									
								</div>

							</li> <!-- end slide 1 -->
						</ul>
						
						<div class="local-scroll">
							<a href="#intro" class="scroll-down">
								<i class="ui-arrow-scroll-down"></i>
							</a>
						</div>

					</div>
				</div>
			</section>

			<!-- Intro -->
			<section id="intro" class="intro bg-dark bg-pattern angle angle--top angle--dark">	
				<div class="container">
					<div class="animate">
						<div class="animate-container">    
							<p class="intro__text text-center">A company owned and operated by talented individuals with different sets of skills. We came together to fulfill clients' requirements and solve problems.</p>
						</div>
					</div>
				</div>			
			</section> <!-- end intro -->

			<!-- Service Boxes -->
			<section id="services" class="pb-72">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="title-row animate">
								<div class="animate-container">
									<h3 class="section-subtitle section-subtitle--line">Our Services</h3>
									
									<p class="section-description">Creative solutions with
									a strategic focus. We build web applications to create experiences and solve business problems.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 offset-lg-1">
							<div class="animate">
								<div class="animate-container">
									<div class="row">
										<div class="col-lg-6">							
											<div class="service">
												<i class="service__icon o-source-code-1"></i>
												<h4 class="service__title">Web Design & Development</h4>
												<p class="service__text">Creative designs that impacts how your audience perceives your brand, with core functionalites of the company</p>
											</div>								
										</div>
										<div class="col-lg-6">
											<div class="service">
												<i class="service__icon o-design-1"></i>
												<h4 class="service__title">Graphics Design</h4>
												<p class="service__text">We craft our designs to communicate your message, with refined ideas and content. We do all kinds of digital designs such as; Logo, Banner, Business Cards, etc.</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="service">
												<i class="service__icon o-phone-1"></i>
												<h4 class="service__title">Mobile app</h4>
												<p class="service__text">We can turn your ideas or existing web application into mobile apps (Android or/and IOS).</p>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="service">
												<i class="service__icon o-strategy-1"></i>
												<h4 class="service__title">Desktop apps</h4>
												<p class="service__text">We can build software programs that run on a standalone computer to perform a specific task for the client.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section> <!-- end service boxes -->

			<!-- Results -->
			<section class="section-results bg-gradient-bottom" style="background-image: url('img/results/results-min.jpg');">
				<div class="container-fluid">
					<div class="row">
					
						<div class="col-lg-6 results-col">
							<div class="results">
								<div class="results__counter">
									<span class="results__number" data-from="0" data-to="97">97</span>
									<span class="results__suffix">%</span>
								</div>              
								<p class="results__text">Average satisfaction rating received in
								the preivious year.</p>
							</div>
						</div>
						
						<div class="col-lg-3 results-col">
							<div class="results">
								<div class="results__counter">
									<?php
                                    $count=sizeof($proID);
                                     echo '<span class="results__number" data-from="0" data-to="'.$count.'">';
                                     echo $count;
                                     echo '</span>';
                                     ?>
									<span class="results__suffix"></span>
								</div>
								<p class="results__text">Projects deployed.</p>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- end results -->    

			<!-- About -->
			<section class="section-about pb-72 bg-light" id="about">
				<div class="about">        
					<div class="about__holder">
				
						<figure class="about__img-holder">
							<div class="animate">
								<div class="animate-container"> 
									<img src="image/Home.jpg" alt="about us">
									
								</div>
							</div>
						</figure>
							
						<div class="about__info">
							<div class="animate">
								<div class="animate-container"> 
									<div class="title-row mb-40">
										<h3 class="section-subtitle section-subtitle--line">About</h3>
										<h2 class="section-title">IO Tech solutions</h2>
										<p class="section-description">We want to tell your brand’s story with
										quality content that will help you inspire.</p>
									</div>

									<!-- Accordion -->
									<div id="accordion-1">

										<div class="accordion">
											<div class="accordion__panel">
												<div class="accordion__heading" id="heading-1">
													<a data-toggle="collapse" href="#collapse-1" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapse-1">
														<span class="accordion__toggle"></span>
														<h4 class="accordion__title">Who we are</h4>                        
													</a>
												</div>
												<div id="collapse-1" class="collapse show" data-parent="#accordion-1" role="tabpanel" aria-labelledby="heading-1">
													<div class="accordion__body">
														<p>
															We are passionate about creating and delivering high quality work, meeting the business needs of our clients and ensuring the very best user experience for their customers.
														</p>
													</div>
												</div>
											</div>
										</div>

										<div class="accordion">
											<div class="accordion__panel">
												<div class="accordion__heading" id="heading-2">
													<a data-toggle="collapse" href="#collapse-2" class="accordion__link" aria-expanded="true" aria-controls="collapse-2">                        
														<span class="accordion__toggle"></span>
														<h4 class="accordion__title">Our philosophy</h4>
													</a>
												</div>
												<div id="collapse-2" class="collapse" data-parent="#accordion-1" role="tabpanel" aria-labelledby="heading-2">
													<div class="accordion__body">
														<p>
														We value quality towards our work, we are accountable and deliver the project on time based on the contract we establish, which creates various connections and commited clients.
													
														</p>
													</div>
												</div>
											</div>
										</div>

										<div class="accordion">
											<div class="accordion__panel">
												<div class="accordion__heading" id="heading-3">
													<a data-toggle="collapse" href="#collapse-3" class="accordion__link" aria-expanded="true" aria-controls="collapse-3">                        
														<span class="accordion__toggle"></span>
														<h4 class="accordion__title">How we work</h4>
													</a>
												</div>
												<div id="collapse-3" class="collapse" data-parent="#accordion-1" role="tabpanel" aria-labelledby="heading-3">
													<div class="accordion__body">
														<p>
													We implement the strategy of dividing and conquering any project we accept from clients.
														</p>
													</div>
												</div>
											</div>
										</div>

									</div> <!-- end accordion -->

								</div>
							</div>
						</div> <!-- end about__info -->  

					</div>
				</div>
			</section> <!-- end about -->

			<!-- Works -->
			<section class="section-works bg-light pt-72" id="works">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="title-row text-center">
								<h2 class="section-title">Featured Works</h2>
								<p class="section-description">Design is so simple and relevant works. That's
								why it's so complicated.</p>
							</div>
						</div>
					</div>
				</div>

                				
				<!-- Project Slider Web Apps-->
				<div class="projects-slider" style="height:300px;">
				<?php	
				for ($i = 0; $i < sizeof($ids); $i++) {
                    if($cat[$i]=="Web"){
					echo '<div class="flickity-slide">';
						echo '<article class="project project-slide hover-shrink">';
							echo '<a href="single-project.php?id='.$proID[$i].'" class="project__url">';
								echo '<figure class="project__img-holder hover-shrink--shrink">';
									echo '<img src="'. $path[$i] .'" class="project__img hover-shrink--zoom" alt="project 3">';
								echo '</figure>';
							echo '</a>';
							echo '<div class="project__description-wrap">';
								echo '<div class="project__description">';
									echo '<h3 class="project__title"><a href="single-project.php?id='.$proID[$i].'">'.$names[$i].'</a></h3>';
									echo '<span class="project__category">Product Design</span>';
								echo '</div>';
							echo '</div>';
						echo '</article>';
    					echo '</div>';
                    }
                }
                    ?>
					</div>

				<!-- Project Slider Graphics Design-->
				<div class="projects-slider" style="height:300px;">
				<?php	
				for ($i = 0; $i < sizeof($ids); $i++) {
                    if($cat[$i]=="Graphics"){
					echo '<div class="flickity-slide">';
						echo '<article class="project project-slide hover-shrink">';
							echo '<a href="single-project.php?id='.$proID[$i].'" class="project__url">';
								echo '<figure class="project__img-holder hover-shrink--shrink">';
									echo '<img src="'. $path[$i] .'" style="width: 501.59px; height: 282.14px;" class="project__img hover-shrink--zoom" alt="project 3">';
								echo '</figure>';
							echo '</a>';
							echo '<div class="project__description-wrap">';
								echo '<div class="project__description">';
									echo '<h3 class="project__title"><a href="single-project.php?id='.$proID[$i].'">'.$names[$i].'</a></h3>';
									echo '<span class="project__category">Product Design</span>';
								echo '</div>';
							echo '</div>';
						echo '</article>';
    					echo '</div>';
                    }
                }
                    ?>
					</div>
				<div class="text-center mt-40">
					<a href="projects.php" class="btn btn--lg btn--stroke"><span>View Works</span></a>
				</div>      

			</section> <!-- end works -->

			<!-- Team -->
			<section class="section-team">
				<h2 class="section-title text-center" >Our Creative Team</h2>
								
  <div class="container">
    <div class="row">
      <div id="testimonial-slider" class="owl-carousel">
      <?php
       for ($i = 0; $i < sizeof($id); $i++) {
        echo '<div class="testimonial">';          
          echo '<div class="testimonial-content">';
          	echo '<br>';
            echo '<div class="pic">';
              echo '<img src="'.$path2[$i].'" alt="">';
            echo '</div>';
            echo '<h3 style="color: black;" class="title">';
            echo $name[$i];
            echo '</h3>';
            echo '<span style="color: black;" class="title">';
            echo $role[$i];
            echo '</span>';
         echo '</div>';
        echo '</div>';
       }
       ?>
                
      </div>
    </div>
  </div>


			</section> <!-- end team -->


			<!-- Testimonials -->
			<section class="section-testimonials section-testimonials--large-padding bg-overlay" style="background-image: url('img/testimonials/testimonials-min.jpg');">
				<div class="container">

					<div class="row justify-content-center mb-40">
						<div class="col-lg-7">
							<div class="title-row text-center">
								<h2 class="section-title">Here's What Our Customers Say</h2>
							</div>
						</div>
					</div>

					<div class="row row-80">
						<div class="col-lg-6">
							<div class="animate">
								<div class="animate-container">
									<div class="testimonial mb-md-40">
										<img src="img/testimonials/testimonial_1.png" class="testimonial__img" alt="testimonial_1">
										<div class="testimonial__body">
											<p class="testimonial__text">“I’am amazed, I should say thank you so much for
											your awesome template. Design is so good and neat
											every detail has been taken care these team are,
											realy amazing and talented! I will work only with
											Radium agency.”</p>
											<span class="testimonial__name">John Marshal</span>
											<span class="testimonial__company">Entrepreneur</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="animate">
								<div class="animate-container">
									<div class="testimonial">
										<img src="img/testimonials/testimonial_2.png" class="testimonial__img" alt="testimonial_2">
										<div class="testimonial__body">
											<p class="testimonial__text">“I’am amazed, I should say thank you so much for
											your awesome template. Design is so good and neat
											every detail has been taken care these team are,
											realy amazing and talented! I will work only with
											Radium agency.”</p>
											<span class="testimonial__name">Christina Green</span>
											<span class="testimonial__company">Entrepreneur</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section> <!-- end testimonials -->

			<!-- Clients -->
			<section class="section-clients bg-light angle angle--light angle--top">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="title-row text-center">
								<h2 class="section-title">Our Clients</h2>
								<p class="section-description">Don't just take our word for it</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 client-logo">
							<a href="#">
								<img src="img/clients/client_logo_1.png" alt="">
							</a>
						</div>
						<div class="col-sm-4 client-logo">
							<a href="#">
								<img src="img/clients/client_logo_2.png" alt="">
							</a>
						</div>
						<div class="col-sm-4 client-logo">
							<a href="#">
								<img src="img/clients/client_logo_3.png" alt="">
							</a>
						</div>
					</div>
					<div class="row clients-second-row">
						<div class="col-sm-4 client-logo">
							<a href="#">
								<img src="img/clients/client_logo_4.png" alt="">
							</a>
						</div>
						<div class="col-sm-4 client-logo">
							<a href="#">
								<img src="img/clients/client_logo_5.png" alt="">
							</a>
						</div>
						<div class="col-sm-4 client-logo">
							<a href="#">
								<img src="img/clients/client_logo_6.png" alt="">
							</a>
						</div>
					</div>

				</div>      
			</section> <!-- end clients -->

		</div> <!-- end content wrap -->

			<!-- Footer -->
		<footer class="footer bg-dark bg-pattern" itemtype="http://schema.org/WPFooter" itemscope>
			<div class="container">
				<div class="footer__widgets">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="widget widget-about-us">
								<span class="widget-about-us__text">We’d love to hear from you</span>
								<a href="mailto:hello@jueveagency.com" class="widget-about-us__email">iotechsolutionseth@gmail.com</a>
								<a href="tel:021-5395-6573" class="widget-about-us__phone">+251910787662</a>
								<div class="socials mt-32">
									<a href="https://www.instagram.com/iotechsolutionseth/" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
									<a href="https://m.facebook.com/IO-Tech-Solutions-106320834849316/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
									<a href="#" class="social social-linkedln" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
									</div>
							</div>
						</div> <!-- end about us -->


						<div class="col-lg-4 col-md-6">
							<div class="widget text-center text-md-left">
								<h3 class="widget-cta__title white mb-32" style="margin-bottom:2px;">Contact Us</h3>
								<a href="#" class="btn btn--lg btn--stroke contact-form-trigger" data-toggle="modal" data-target="#contact-form-modal">
									<span><i class="fa fa-envelope" aria-hidden="true" style="margin-left:0px; width: 150px;"></i></span>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="widget widget-address">
								<address class="widget-address__address">Addis Ababa, Ethiopia<br>
								
								</address>
								<a href="https://goo.gl/maps/NXDCfHkSga8w16Bq9" class="widget-address__url" target="_self">Get Directions</a>
							</div>
						</div>           

					</div>
				</div>    
			</div> <!-- end container -->

			<div class="footer__bottom">
				<div class="container">
					<div class="copyright-wrap text-center">
						<span class="copyright">
							&copy; 2021, Made by IO Tech Solutions.</a> All rights reserved.
						</span>
					</div>            
				</div>
			</div> <!-- end footer bottom -->
		</footer> <!-- end footer -->

		<div class="footer-placeholder" id="contact"></div>

		<!-- Contact Form -->
		<div class="modal fade contact-form-modal" id="contact-form-modal" role="dialog" aria-label="Contact Form Modal" aria-hidden="true">
			<div class="modal-dialog contact-form-modal__dialog" role="document">
				<div class="modal-content contact-form-modal__content">

					<button type="button" class="close contact-form-modal__close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>

					<div class="modal-body contact-form-modal__body">
						<form id="contact-form" class="contact-form" action="#">
							<div class="row row-16">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="name">Name<abbr>*</abbr></label>
										<input type="text" name="NAME" id="name" required="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="email">Email<abbr>*</abbr></label>
										<input type="email" name="EMAIL" id="email" required="">
									</div>
								</div>
							</div>

							<label for="message">Message<abbr>*</abbr></label>
							<textarea name="MESSAGE" id="message" rows="6"></textarea>              
							<div class="gdpr-checkbox">
								<label class="gdpr-checkbox__label">
									<input class="gdpr-checkbox__input" name="AGREE_TO_TERMS" type="checkbox" value="1" required="">
									<span class="gdpr-checkbox__text">I agree to storage of my email according to <a href="#" target="_blank">Privacy Policy</a>
									</span>
								</label>
							</div>
							<div class="text-center">
								<input id="contact-form__submit" type="submit" class="btn btn--lg btn--color" value="Send Message">
							</div>
							
							<div id="contact-form__message" class="contact-form__message" role="alert"></div>
							
						</form>
					</div>
				</div>
			</div>
		</div> <!-- end contact form -->


		<div id="back-to-top">
			<a href="#top"><i class="ui-arrow-up"></i></a>
		</div>

	</main> <!-- end main wrapper -->
	

	<!-- jQuery Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/scripts.min.js"></script>

	<!-- Revolution Slider Addons -->

	<!-- DISTORTION ADD-ON FILES -->
	<link rel='stylesheet' href='revolution-addons/distortion/css/distortion.css' type='text/css' media='all' />
	<script type='text/javascript' src='revolution-addons/distortion/js/pixi.min.js'></script>
	<script type='text/javascript' src='revolution-addons/distortion/js/revolution.addon.distortion.min.js'></script>


	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
<script  src="js/script.js"></script>
<script  src="js/coustomscript.js"></script>		
</body>
</html>
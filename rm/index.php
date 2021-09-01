<?php 
define('dbconn', 'TRUE');
include 'dbconn.php';

$tquery = "select * from team";
$team = $con->query($tquery);


$prquery = "select * from project where category != 'Graphics Design'";
$project = $con->query($prquery);

$gqrquery = "select * from project where category = 'Graphics Design'";
$gproject = $con->query($gqrquery);


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
	  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
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
								<img class="logo" src="img/logo/logo.png" srcset="img/logo/logo.png 1x, img/logo/logo@2x.png 2x" alt="logo" itemtype="http://schema.org/Organization" itemscope>
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
								<ul class="nav__dropdown-menu">
									<li>
										<a href="index.php">
											<span class="nav__dropdown-menu-label">Hero Image</span>
										</a>
									</li>
									<li>
										<a href="index-video-bg.html">
											<span class="nav__dropdown-menu-label">HTML Video (Dark Version)</span>
										</a>
									</li>
									<li>
										<a href="index-creative.php">
											<span class="nav__dropdown-menu-label">Hero Creative</span>
										</a>
									</li>
									<li>
										<a href="index-youtube-bg.html">
											<span class="nav__dropdown-menu-label">Youtube Video</span>
										</a>
									</li>
									<li>
										<a href="index-vimeo-bg.html">
											<span class="nav__dropdown-menu-label">Vimeo Video</span>
										</a>
									</li>
									<li>
										<a href="index-projects-showcase.html">
											<span class="nav__dropdown-menu-label">Projects Showcase</span>
										</a>
									</li>
								</ul>
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
							<li>
								<a href="#blog" class="nav-link">Blog</a>
							</li>
							<li class="nav__dropdown">
								<a href="#" class="nav-link" aria-haspopup="true">Pages</a>
								<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<ul class="nav__dropdown-menu">
									<li>
										<a href="projects.php">
											<span class="nav__dropdown-menu-label">Projects</span>
										</a>
									</li>
									<li>
										<a href="single-project.php">
											<span class="nav__dropdown-menu-label">Single Project</span>
										</a>
									</li>
									<li>
										<a href="blog.html">
											<span class="nav__dropdown-menu-label">Blog</span>
										</a>
									</li>
									<li>
										<a href="single-post.php">
											<span class="nav__dropdown-menu-label">Single Post</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#contact" class="nav-link">Contact</a>
							</li>
						</ul> <!-- end menu -->


						<!-- Mobile Socials -->
						<div class="nav__mobile-socials d-lg-none">
							<div class="socials">
								<a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
								<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
								<a href="#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
							</div>
						</div>

					</nav> <!-- end nav-wrap -->

					<!-- Socials -->
					<div class="nav__socials flex-child d-none d-lg-block">
						<div class="socials right">
							<a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
							<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
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
									>Building your need.
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
									<a href="https://www.youtube.com/watch?v=2GdzNhSB6-0" class="single-video-lightbox mfp-iframe" data-effect="mfp-zoom-in">
										<i class="ui-play hero-video-play__icon"></i>
										<span class="hero-video-play__text">contact</span>
									</a>
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
							<p class="intro__text text-center">We are a group of passionate and skilled developers and designers working together to fullfill your requirement and solve your problem.</p>
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
									<h2 class="section-title">Digital Objectives</h2>
									<p class="section-description">Creative solutions with
									a strategic focus. We grow brands, create experiences and solve business problems.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 offset-lg-1">
							<div class="animate">
								<div class="animate-container">
									<div class="row">
										<div class="col-lg-6">							
											<div class="service">
												<i class="service__icon o-edit-window-1"></i>
												<h4 class="service__title">Web Design</h4>
												<p class="service__text">We collabrate your ideas with featured contents to design websites. We are well experianced on web design and hosting, our designs are deployed or in progress.</p>
											</div>								
										</div>
										<div class="col-lg-6">
											<div class="service">
												<i class="service__icon o-source-code-1"></i>
												<h4 class="service__title">Graphics Design</h4>
												<p class="service__text">We craft our designs to communicate your message, with refined ideas and content. We do all kinds of digital designs like Logo, Banner... many more.</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="service">
												<i class="service__icon o-call-contact-1"></i>
												<h4 class="service__title">Mobile app</h4>
												<p class="service__text">We can turn your ideas or existing web application into mobile apps (Android or/and IOS).</p>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="service">
												<i class="service__icon o-strategy-1"></i>
												<h4 class="service__title">Desktop apps</h4>
												<p class="service__text">We also provide tangible results and measurable long-term value business.</p>
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
						<div class="col-lg-3 results-col">
							<div class="results">
								<div class="results__counter">
									<span class="results__number" data-from="0" data-to="1200">1200</span>
								</div>
								<p class="results__text">We also provide tangible results and
								measurable long-term value business.</p>
							</div>
						</div>
						<div class="col-lg-3 results-col">
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
									<span class="results__number" data-from="0" data-to="2489">2489</span>
								</div>
								<p class="results__text">We bring inspiring customer
								satisfaction.</p>
							</div>
						</div>
						<div class="col-lg-3 results-col">
							<div class="results">
								<div class="results__counter">
									<span class="results__number" data-from="0" data-to="4">4</span>
									<span class="results__suffix"></span>
								</div>
								<p class="results__text">pojects deployed.</p>
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
									<img src="img/about/about-min.jpg" alt="about us">
									<a href="https://www.youtube.com/watch?v=2GdzNhSB6-0" class="play-btn icon-wave single-video-lightbox mfp-iframe" data-effect="mfp-zoom-in">
									</a>
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
															We are passionate about creating and delivering high quality work, meeting the business needs of our clients and ensuring the very best user experience for their customers.
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
															We are passionate about creating and delivering high quality work, meeting the business needs of our clients and ensuring the very best user experience for their customers.
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
				
				<!-- Project Slider -->
				<div class="projects-slider">
					
				
					<div class="flickity-slide">
						<article class="project project-slide hover-shrink">
							<a href="single-project.html" class="project__url">
								<figure class="project__img-holder hover-shrink--shrink">
									<img src="s.png" class="project__img hover-shrink--zoom" alt="project 3">
								</figure>
							</a>
							<div class="project__description-wrap">
								<div class="project__description">
									<h3 class="project__title"><a href="single-project.html">Bicycle Concept Design</a></h3>
									<span class="project__category">Product Design</span>
								</div>
							</div>
						</article>
					</div>
					<div class="flickity-slide">
						<article class="project project-slide hover-shrink">
							<a href="single-project.html" class="project__url">
								<figure class="project__img-holder hover-shrink--shrink">
									<img src="img/works/project_slide_4.jpg" class="project__img hover-shrink--zoom" alt="project 4">
								</figure>
							</a>
							<div class="project__description-wrap">
								<div class="project__description">
									<h3 class="project__title"><a href="single-project.html">Bath Accessories Package</a></h3>
									<span class="project__category">Branding</span>
								</div>
							</div>
						</article>
					</div>
					<div class="flickity-slide">
						<article class="project project-slide hover-shrink">
							<a href="single-project.html" class="project__url">
								<figure class="project__img-holder hover-shrink--shrink">
									<img src="img/works/project_slide_5.jpg" class="project__img hover-shrink--zoom" alt="project 5">
								</figure>
							</a>
							<div class="project__description-wrap">
								<div class="project__description">
									<h3 class="project__title"><a href="single-project.html">Handbag Package</a></h3>
									<span class="project__category">Branding</span>
								</div>
							</div>
						</article>
					</div>
				</div> <!-- end slick-works-slider -->

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
        <div class="testimonial" >          
          <div class="testimonial-content">
          	<br>
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=1027" alt="">
            </div>
            <h3 >Michele Miller</h3>
            <h3 class="name">Michele Miller</h3>
            <span style="color: black;" class="title">Project Manager</span>
          </div>
        </div>
        <div class="testimonial">
           <div class="testimonial-content">
          	<br>
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=1027" alt="">
            </div>
            <h3 >Michele Miller</h3>
            <h3 class="name">Michele Miller</h3>
            <span style="color: black;" class="title">Project Manager</span>
          </div>
        </div>
      	
        <div class="testimonial">
           <div class="testimonial-content">
          	<br>
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=1027" alt="">
            </div>
            <h3 >Michele Miller</h3>
            <h3 class="name">Michele Miller</h3>
            <span style="color: black;" class="title">Project Manager</span>
          </div>
        </div>
        <div class="testimonial">
           <div class="testimonial-content">
          	<br>
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=1027" alt="">
            </div>
            <h3 >Michele Miller</h3>
            <h3 class="name">Michele Miller</h3>
            <span style="color: black;" class="title">Project Manager</span>
          </div>
        </div>
         
        <div class="testimonial">
           <div class="testimonial-content">
          	<br>
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=1027" alt="">
            </div>
            <h3 >Michele Miller</h3>
            <h3 class="name">Michele Miller</h3>
            <span style="color: black;" class="title">Project Manager</span>
          </div>
        </div>
                
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

			<!-- From Blog -->
			<section class="section-from-blog pb-96" id="blog">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="title-row text-center">
								<h2 class="section-title">Latest Thoughts</h2>
								<p class="section-description">Design is so simple and relevant works.
								why it's so complicated.</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4">
							<div class="animate">
								<div class="animate-container">
									<article class="entry" itemscope itemtype="http://schema.org/Article">
										<div class="entry__header hover-shrink">
											<a href="single-post.html" class="entry__img-url hover-shrink--shrink">
												<img src="img/blog/blog_preview_1.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
											</a>
										</div>
										<div class="entry__body">
											<div class="entry__meta">
												<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
												<span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Business</a>
												</span>                  
											</div>                
											<h4 class="entry__title title-underline">
												<a href="single-post.html" itemprop="headline">Business Mistakes to Avoid When Starting a Business</a>
											</h4>
											<div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
											</div>                 
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="animate">
								<div class="animate-container">
									<article class="entry" itemscope itemtype="http://schema.org/Article">
										<div class="entry__header hover-shrink">
											<a href="single-post.html" class="entry__img-url hover-shrink--shrink">
												<img src="img/blog/blog_preview_2.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
											</a>
										</div>
										<div class="entry__body">
											<div class="entry__meta">
												<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
												<span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Innovation</a>
												</span>                  
											</div>                
											<h4 class="entry__title title-underline">
												<a href="single-post.html" itemprop="headline">The Hyper Flexible Seamlessly Connected Modern Working</a>
											</h4>
											<div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
											</div>                 
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="animate">
								<div class="animate-container">
									<article class="entry" itemscope itemtype="http://schema.org/Article">
										<div class="entry__header hover-shrink">
											<a href="single-post.html" class="entry__img-url hover-shrink--shrink">
												<img src="img/blog/blog_preview_3.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
											</a>
										</div>
										<div class="entry__body">
											<div class="entry__meta">
												<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
												<span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Productivity</a>
												</span>                  
											</div>                
											<h4 class="entry__title title-underline">
												<a href="single-post.html" itemprop="headline">Are you a design superstar-in-the-making?</a>
											</h4>
											<div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
											</div>                 
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section> <!-- end from blog -->

		</div> <!-- end content wrap -->

		<!-- Footer -->
		<footer class="footer bg-dark bg-pattern" itemtype="http://schema.org/WPFooter" itemscope>
			<div class="container">
				<div class="footer__widgets">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="widget widget-about-us">
								<span class="widget-about-us__text">We’d love to hear from you</span>
								<a href="mailto:hello@jueveagency.com" class="widget-about-us__email">hello@jueveagency.com</a>
								<a href="tel:021-5395-6573" class="widget-about-us__phone">021 5395 6573</a>
								<div class="socials mt-32">
									<a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
									<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
									<a href="#" class="social social-google-plus" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
									<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>                  
								</div>
							</div>
						</div> <!-- end about us -->


						<div class="col-lg-4 col-md-6">
							<div class="widget text-center text-md-left">
								<h3 class="widget-cta__title white mb-32">Got a project in mind?</h3>
								<a href="#" class="btn btn--lg btn--stroke contact-form-trigger" data-toggle="modal" data-target="#contact-form-modal">
									<span>Start a Project</span>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="widget widget-address">
								<address class="widget-address__address">Studio 8E, Stamford<br>
								WorksGillett Square, Dalston<br>
								London, N16 8JH</address>
								<a href="https://www.google.bg/maps/place/1702+Olympic+Blvd,+Santa+Monica,+CA+90404,+USA/data=!4m2!3m1!1s0x80c2bb3056a299ef:0x94f425adda595d69?sa=X&ved=0ahUKEwje-u2zobfPAhXFthQKHXdEBY4Q8gEIGTAA" class="widget-address__url" target="_self">Get Directions</a>
							</div>
						</div>           

					</div>
				</div>    
			</div> <!-- end container -->

			<div class="footer__bottom">
				<div class="container">
					<div class="copyright-wrap text-center">
						<span class="copyright">
							&copy; 2019 Jueve, Made by <a href="https://deothemes.com">DeoThemes.</a> All rights reserved.
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
		
</body>
</html>
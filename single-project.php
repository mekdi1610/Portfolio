<?php
include_once 'PHP/Project.php';
//Check if contributor exist and return result to ajax code
if (isset($_REQUEST["id"])) {
	$datasent = $_REQUEST["id"];
	$proObj = new Project();
	$accept=$proObj->getProject($datasent);
$id=$accept[0];
$name=$accept[1];
$catagory = $accept[2];
$client = $accept[3];
$date = $accept[4];
$description = $accept[5];
$link = $accept[6];
$picPath= $proObj->fetchSingleProPic($datasent);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>IO Tech Solutions</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	
	<!-- Google Fonts -->
	<link href='//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="css/style.min.css" />
	<link rel="stylesheet" href="css/custom.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="single-project"  id="home" itemscope itemtype="http://schema.org/WebPage">

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
							<a href="index.html" class="logo__url">
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
						<ul class="nav__menu local-scroll" id="onepage-nav">
							<li class="nav__dropdown">
								<a href="index.html#home" class="nav-link" aria-haspopup="true">Home</a>
								<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<ul class="nav__dropdown-menu">
									<li>
										<a href="index.html">
											<span class="nav__dropdown-menu-label">Hero Image</span>
										</a>
									</li>
									<li>
										<a href="index-video-bg.html">
											<span class="nav__dropdown-menu-label">HTML Video</span>
										</a>
									</li>
									<li>
										<a href="index-creative.html">
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
								<a href="index.html#services" class="nav-link">Services</a>
							</li>
							<li>
								<a href="index.html#about" class="nav-link">About</a>
							</li>
							<li>
								<a href="index.html#works" class="nav-link">Works</a>
							</li>              
							<li>
								<a href="index.html#blog" class="nav-link">Blog</a>
							</li>
							<li class="nav__dropdown">
								<a href="#" class="nav-link active" aria-haspopup="true">Pages</a>
								<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<ul class="nav__dropdown-menu">
									<li>
										<a href="projects.html">
											<span class="nav__dropdown-menu-label">Projects</span>
										</a>
									</li>
									<li>
										<a href="single-project.html">
											<span class="nav__dropdown-menu-label">Single Project</span>
										</a>
									</li>
									<li>
										<a href="blog.html">
											<span class="nav__dropdown-menu-label">Blog</span>
										</a>
									</li>
									<li>
										<a href="single-post.html">
											<span class="nav__dropdown-menu-label">Single Post</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="index.html#contact" class="nav-link">Contact</a>
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

			<!-- Project Hero -->
			<div class="project__hero bg-overlay bg-overlay--light">
				<figure class="project__hero-img-holder" style="background-image: url(img/works/single_project_hero_image-min.jpg);">
					<img src="img/works/single_project_hero_image-min.jpg" alt="" class="d-none">
				</figure>
				<div class="container">
					<div class="project__hero-info">
						<h1 class="project__hero-title"><?php echo $name ?></h1>
						<p class="project__hero-description"></p>
					</div>
				</div>
			</div> <!-- end project hero --> 

			<!-- Project Info -->
			<section class="section-project-info pb-96">
				<div class="container">
					<div class="row">

						<aside class="col-lg-4">
							<div class="project__info">
								<ul class="project__info-list">
									<li class="project__info-list-item">
										<span class="project__info-list-label">Client</span>
										<span class="project__info-list-title"><?php echo $client ?></span>
									</li>
									<li class="project__info-list-item">
										<span class="project__info-list-label">Category</span>
										<span class="project__info-list-title"><?php echo $catagory ?></span>
									</li>
									<li class="project__info-list-item">
										<span class="project__info-list-label">Duration</span>
										<span class="project__info-list-title">4 months</span>
									</li>
									<li class="project__info-list-item">
										<span class="project__info-list-label">Website</span>
										<?php echo '<a href="'.$link.'" class="project__info-list-title">"'.$link.'"</a>';?>
									</li>
									<li class="project__info-list-item">
										<span class="project__info-list-label">Share</span>
										<div class="socials">
											<a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
											<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
											<a href="#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
										</div>
									</li>
								</ul>							
							</div>
						</aside>

					<div class="col-lg-8">
							<h2 class="project__info-title">Description</h2>
							<p class="project__info-description lead"><?php echo $description ?></p>
							<p class="project__info-description lead"></p>
						</div>

					</div>
				</div>

			</section> <!-- end project info -->

			<!-- Project Image Full -->
			<section class="section-project-image-full pt-0">
				<div class="project__image-full">					
					<div class="animate">
						<div class="animate-container">
							<?php echo '<img src="'.$picPath[0].'" alt="">';?>
						</div>
					</div>
				</div>
			</section> <!-- end project image full -->

			<!-- Project Gallery -->
			<section class="section-project-gallery pb-96">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<figure class="project__gallery-img-holder">
								<div class="animate">
									<div class="animate-container">
										<?php echo '<img src="'.$picPath[1].'" alt="">';?>
									</div>
								</div>
							</figure>
						</div>
						<div class="col-lg-6">
							<figure class="project__gallery-img-holder">
								<div class="animate">
									<div class="animate-container">
										<?php echo '<img src="'.$picPath[2].'" alt="">';?>
									</div>
								</div>
							</figure>
						</div>
					</div>
					</div>
				</div>
			</section> <!-- end project gallery -->

			
			
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
	
</body>
</html>
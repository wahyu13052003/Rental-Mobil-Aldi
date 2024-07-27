<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="favicon.ico">
	<title>Rental Mobil</title>
	<!-- Bootstrap core CSS -->
	<link href="../assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="../assets/css/plugins/nivo-slider.css" rel="stylesheet">
	<link href="../assets/css/plugins/swiper.min.css" rel="stylesheet">
	<link href="../assets/css/plugins/intlTelInput.min.css" rel="stylesheet" >
	<link href="../assets/css/plugins/remodal.min.css" rel="stylesheet" >
	<link href="../assets/css/plugins/animate.css" rel="stylesheet">
	<link href="../assets/css/main-style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> 
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Icon Font-->
	<link href="../iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="#" rel="stylesheet">
</head>

<body class="page__home">
<!-- Loader -->
<div class="plash">
	<div id="scene">
		<span></span>
		<div id="road">
			<div id="stripes"></div>
		</div>
	</div>
	<div class="loading">Loading<span>...</span></div>
</div>
<!-- //Loader --> 
	<!-- Header -->
	<header class="site-header">
			<div class="mobile-top-panel"></div>
		<div class="mobile-top-panel__fixed">
			<div class="container">
				<div class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="menu-navigation navbar-collapse collapse">

					<!-- Left nav -->
						<ul class="menu-navigation__list nav navbar-nav">
							<li class="current"><a href="index.php?page=home">Beranda</a></li>
							<li><a href="index.php?page=mobil">Mobil</a></li>
							<li><a href="index.php?page=logout">Logout</a></li>
						</ul>

					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="header-container_wrap container">
			<div class="header-container__flex">
				<div class="logo">
					<a href="index.html">
						<i class="icon-logo"></i>
						<span>Rental</span>Cars
					</a>
				</div>
				<div class="phone_block">
					<span><i class="icon-telephone"></i> 1-800-123-4567</span>
					<small>Our Reservation Specialists 24/7</small>
				</div>
			</div>
		</div>
		<div class="header-navigation-wrap stickUp"> 
			<!-- Navbar fixed top -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="menu-navigation navbar-collapse collapse">

					<!-- Left nav -->
						<ul class="menu-navigation__list nav navbar-nav">
							<li class="current"><a href="index.php?page=home" data-hover="Home">Beranda</a></li>
							<li><a href="index.php?page=mobil" data-hover="Mobil">Mobil</a></li>
							<li><a href="index.php?page=logout" data-hover="logout">Logout</a></li>
						</ul>

					</div><!--/.nav-collapse -->
				</div><!--/.container -->
			</div>
		</div>

	</header>
	<!-- // Header -->
	<!-- Content  -->
	<main id="page-content">
		<div class="parallax_box">
			<?php
				include('../content.php');
			?>
		</div>
	</main>
	<!-- // Content  -->
	<!-- Footer -->
	<footer class="site-footer">
		<section  class="box-elements">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-3">
						<figure class="footer_logo"><a href="#"><span><em>Celebrating</em>25<strong>YEARS</strong></span><i class="icon-111"></i></a></figure>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<h5>Company</h5>
						<ul class="footer-list">
							<li><a href="about.html">About us</a></li>
							<li><a href="blog-masonry.html">News</a></li>
							<li><a href="#">Emergency Contacts</a></li>
							<li><a href="contacts.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<h5>Customer Services</h5>
						<ul class="footer-list">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Help renting a car</a></li>
							<li><a href="#">Terms and Conditions</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<div class="contact-info">
							<span class="phone_number"><i class="icon-telephone"></i> 1-800-123-4567</span>
							
							<span class="location_info">
							<i class="icon-placeholder-for-map"></i>
							<em>The Company Name Inc.</em> 
							<em>9870 St Vincent Place,</em> 
							<em>Glasgow, DC 45 Fr 45.</em> </span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="site-footer__bottom-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="copyright">&copy; 2017 | <a href="#">Privacy Policy</a> | <a href="#">Rental policy</a></div>
					</div>
					<div class="col-xs-12 col-md-6"> 
						<div class="social-list">
							<ul class="social-list__icons">
								<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
								<li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>

	</footer>
	<!-- //Footer -->
	<!-- Google map -->
	<script src="../assets/js/jquery.1.12.4.min.js"></script>
	<script src="../assets/js/plugins/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/wow.min.js"></script>
	<script src="../assets/js/plugins/jquery.smartmenus.min.js"></script>
	<script src="../assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
	<script src="../assets/js/plugins/jquery.nivo.slider.js"></script>
	<script src="../assets/js/plugins/swiper.min.js"></script>
	<script src="../assets/js/plugins/intlTelInput.min.js"></script>
	<script src="../assets/js/plugins/remodal.js"></script>
	<script src="../assets/js/plugins/stickup.min.js"></script>
	<script src="../assets/js/plugins/tool.js"></script>
	<script src="../assets/js/custom.js"></script>
</body>

</html>
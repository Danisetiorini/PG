<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PRIMAGAMA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/animate.css"); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/icomoon.css"); ?>">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/themify-icons.css"); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/bootstrap.css");?>">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/magnific-popup.css");?>">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/owl.carousel.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/owl.theme.default.min.css");?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url ("assets/css/style.css");?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url ("js/modernizr-2.6.2.min.js");?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="page">


	<div class="page-inner">

	<div id="head-top" style="position: absolute; width: 100%; top: 0; ">
		<div class="gtco-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div id="gtco-logo"><a href="<?php echo site_url('login/home')?>">Primagama <em>.</em></a></div>
					</div>
					<div class="col-md-6 col-xs-6 social-icons">
						<ul class="gtco-social-top">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav class="gtco-nav sticky-banner" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-12 text-center menu-1">
						<ul>
							<li><a href="<?php echo site_url('jadwal/index')?>">Jadwal</a></li>
							<li class="has-dropdown">
								<li><a href="<?php echo site_url('paketbimbel/index')?>">Paket Bimbel</a></li>
							<li><a href="<?php echo site_url('pengajar/index')?>">Pengajar</a></li>
							<li class="has-dropdown">
								<li><a href="<?php echo site_url('siswa/index')?>">Siswa</a></li>
								<li><a href="<?php echo site_url('login/logout')?>">Log out</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</nav>
	</div>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_4.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-mt-15em">
				<div class="col-md-7 mt-text text-left animate-box" data-animate-effect="fadeInUp">
					<h1>Database<strong>Primagama</strong></h1>
					<h2>Terdepan Dalam Berprestasi.</h2>
				</div>
			</div>
		</div>
	</header>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">
			</div>
		</div>
	</footer>
	</div>

	</div>

	<!-- jQuery -->
    <script src="<?php echo base_url ("assets/js/jquery.min.js");?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url ("assets/js/jquery.easing.1.3.js");?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url ("assets/js/bootstrap.min.js");?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url ("assets/js/jquery.waypoints.min.js");?>"></script>
    <!-- Carousel -->
    <script src="<?php echo base_url ("assets/js/owl.carousel.min.js");?>"></script>
    <!-- countTo -->
    <script src="<?php echo base_url ("assets/js/jquery.countTo.js");?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url ("assets/js/jquery.magnific-popup.min.js");?>"></script>
    <script src="<?php echo base_url ("assets/js/magnific-popup-options.js");?>"></script>
    <!-- Main -->
    <script src="<?php echo base_url ("assets/js/main.js");?>"></script>

	</body>
</html>

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

  <div class="gtco-section gtco-gray-bg">
    <div class="gtco-container">
      <div class="row">

        <div class="col-md-12">
          <div class="col-md-6 animate-box">
          <h3>Get In Touch</h3>
            <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="password">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
              </div>

            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary">
            </div>

          </form>
        </div>

        </div>

      </div>
    </div>
  </div>

</form>



</body>

</html>

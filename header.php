<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Durendal
 */

?><!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->

	<head>
		<?php // META INFO 
			$strMetaDescription = get_post_meta(get_the_ID(), "description", true);
			$strMetaModifiedTime = get_the_modified_time("F j, Y");
			$strGetPermalink = get_permalink();
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php 
			// If page is homepage, set title to something else.
			if (get_the_ID() == 4) {
				echo "Swords to Plowshares | Vets Helping Vets Since 1974";
			} else {
				echo get_the_title() . " | Swords to Plowshares";
			} // if
		?></title>
		<meta name="author" content="Swords to Plowshares" />
		<meta name="description" content="<?php echo $strMetaDescription; ?>" />

		<!-- OpenGraph, Twitter -->
		<meta property="og:site_name" content="Swords to Plowshares" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $strGetPermalink; ?>" />
		<meta property="og:title" content="<?php echo get_the_title(); ?>" />
		<meta property="og:description" content="<?php echo $strMetaDescription; ?>" />
		<meta property="og:updated_time" content="<?php echo $strMetaModifiedTime; ?>" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:url" content="<?php echo $strGetPermalink; ?>" />
		<meta name="twitter:title" content="<?php echo get_the_title(); ?>" />
		<meta name="twitter:description" content="<?php echo $strMetaDescription; ?>" />

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Calibri:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/animations.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/hover/hover-min.css" rel="stylesheet">		
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/plugins/morphext/morphext.css" rel="stylesheet">
		
		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/style.css" rel="stylesheet" />
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/typography-default.css" rel="stylesheet" />
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/s2p.css" rel="stylesheet">
		

		<!-- Custom CSS --> 
		<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/custom.css" rel="stylesheet" />
		<link href="<?php bloginfo("template_directory"); ?>/assets/css/main.css" rel="stylesheet" />
		
		<!-- Google ReCaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<?php wp_head(); ?>
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body <?php body_class("no-trans front-page"); ?>>

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-container start -->
			<div class="header-container">

				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header id="main-header" class="header  fixed  clearfix  border-top-0">
					<!-- header-top start -->
					<!-- classes:  -->
					<!-- "dark": dark version of header top e.g. class="header-top dark" -->
					<!-- "colored": colored version of header top e.g. class="header-top colored" -->
					<!-- ================ -->
					<div class="header-top dark olive-bg">
						<div class="container">
							<div class="row">
								<div class="col-xs-2 col-sm-5">
									<!-- header-top-first start -->
									<!-- ================ -->
									<div class="header-top-first clearfix">
										<ul class="social-links circle animated-effect-1 small clearfix hidden-xs">
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/vetshelpingvets"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="https://twitter.com/vetshelpingvets"><i class="fa fa-twitter"></i></a></li>
											<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/swords-to-plowshares"><i class="fa fa-linkedin"></i></a></li>
											<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/VetsHelpingVets"><i class="fa fa-youtube-play"></i></a></li>
										</ul>
										<div class="social-links hidden-lg hidden-md hidden-sm circle small">
											<div class="btn-group dropdown">
												<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt white"></i></button>
												<ul class="dropdown-menu dropdown-  olive-bg">
													<li class="facebook"><a target="_blank" href="https://www.facebook.com/vetshelpingvets"><i class="fa fa-facebook"></i></a></li>
													<li class="twitter"><a target="_blank" href="https://twitter.com/vetshelpingvets"><i class="fa fa-twitter"></i></a></li>
													<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/swords-to-plowshares"><i class="fa fa-linkedin"></i></a></li>
													<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/VetsHelpingVets"><i class="fa fa-youtube-play"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- header-top-first end -->
								</div>
								<div class="col-xs-10 col-sm-7">

									<!-- header-top-second start -->
									<!-- ================ -->
									<div id="header-top-second"  class="clearfix text-right">
										<ul class="list-inline">
											<li><i class="fa fa-phone pr-5 pl-10"></i>1 (415) 252-4788 </li>
											<li><i class="fa fa-envelope-o pr-5 pl-10"></i> supportvets@stp-sf.org</li>
										</ul>
									</div>
									<!-- header-top-second end -->
								</div>
							</div>
						</div>
					</div>
					<!-- header-top end -->

					<div class="container">
						<div class="row">
							<div class="col-md-2 ">
								<!-- header-first start -->
								<!-- ================ -->
								<div class="header-first clearfix padding-top-5 padding-top-0-min-1200 margin-top-bottom-5-min-1200">

									<!-- logo -->
									<div id="logo" class="logo">
										<a href="/"><img id="logo_img" src="<?php bloginfo("template_directory"); ?>/assets/template/images/logo.png" alt="Swords to Plowshares" class="center-block img-responsive height-64-min-1200"></a>
									</div>

								</div>
								<!-- header-first end -->

							</div>
							<div class="col-md-10">

								<!-- header-second start -->
								<!-- ================ -->
								<div class="header-second clearfix">

								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>

											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse padding-right-0 margin-right-left-0" id="navbar-collapse-1">
												<!-- main-menu -->
												<?php wp_nav_menu(array(
                                                    "container"         => "ul",
                                                    "theme_location"	=> "main-menu",
                                                    "menu_class"	=> "nav navbar-nav",
                                                    "walker"            => new MainNav_Walker
                                                )); ?>
												<!-- main-menu end -->

												<!--Donate-->
												<div class="header-dropdown-buttons">
													<a href="/donate" class="btn btn-sm hidden-xs radius-50 btn-donate">Donate <i class="fa fa-heart-o pl-5"></i></a>
													<a href="/donate" class="btn btn-lg visible-xs radius-50 btn-block btn-donate">Donate <i class="fa fa-heart-o pl-5"></i></a>
												</div>

											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-second end -->

							</div>
						</div>
					</div>

				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
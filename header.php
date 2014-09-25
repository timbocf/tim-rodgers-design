<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Tim Rodgers Design
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="background">
		<div id="page" class="hfeed site">
			<div class="header-wrap">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tim-rodgers-design' ); ?></a>

				<div class="navigation">
					<div class="container">
						<div class="col-xs-12">
							<header class="navbar navbar-inverse bs-docs-nav" role="banner">

								<div class="navbar-header">
									<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<a href="home"><img src="<?php bloginfo('template_directory') ?>/images/trd-logo.png" class="logo img-responsive"></a>

								<nav class="collapse navbar-collapse bs-navbar-collapse col-xs-12" role="navigation">
									
									<ul class="nav navbar-nav row">
										<li><a href="home" class="active first" id="home">Home</a></li>
										<li><a href="about-us" id="about-us">About Us</a></li>
										<li><a href="services" id="services">Services</a></li>
										<li><a href="portfolio" id="portfolio">Portfolio</a></li>
										<li><a href="contact-us" id="contact-us">Contact Us</a></li>
										<li class="social">
											<a href="//facebook.com" class="icon-social-facebook">Facebook</a>
											<a href="//twitter.com" class="icon-social-twitter">Twitter</a>
										</li>
									</ul>
								</nav>
							</header>
						</div><!-- col-xs-12 -->
					</div><!-- container -->
				</div><!-- .navigation -->
			</div><!-- .header-wrap -->

			<div id="content" class="site-content">

				<div class="container">


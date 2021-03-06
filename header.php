<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    
<title><?php bloginfo( 'name' ); ?></title>

<link rel="icon" type="image/png" href="http://chameleonwebsolutions.com/favicon.png"/>
<link rel="shortcut icon" href="http://chameleonwebsolutions.com/favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dosis">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/reset.css"
/?>

<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>

<div class="container">

	<!-- site-header -->
	<div class="header hidden-desktop visible-mobile visible-tablet">
		<div class="logo mobile-social-icons hidden-tablet">
			<a href="https://www.facebook.com/chameleonwebsolutions15" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="https://www.twitter.com/chameleonwebs15" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/in/sean-duff-8a238388?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		</div>
		<input class="menu-btn" type="checkbox" id="menu-btn"/>
		<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
		<?php

		$args = array(
			'class'     => 'menu',
			'container' => false
		);

		?>
		<?php wp_nav_menu( $args ); ?>

	</div>
	<header class="site-header uk-grid">
		<div class="header-gutter visible-mobile visible-tablet hidden-desktop"></div>
		<div class="clearfix visible-mobile visible-tablet hidden-desktop"></div>
		<nav class="site-nav uk-width-small-1-1 hidden-mobile hidden-tablet">
			<?php

			$args = array(
				'theme_location' => 'primary'
			);

			?>
			<?php wp_nav_menu(); ?>
		</nav>


		<!--<div class="col-1 uk-width-small-1-1 uk-width-medium-1-3 center-content">
             <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.jpg"/></a>
           </div>
           
           <div class="col-2 uk-width-small-1-1 uk-width-medium-1-3 center-content">
           	 <h1 class="tagline"><span class="highlight">Adapting</span> to your environment</h1>
           </div>
             
           <div class="col-3 uk-width-small-1-1 uk-width-medium-1-3 center-content hidden-mobile">
           	  <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
              <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
              <a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
           </div>-->

		<div class="col-1 uk-width-small-1-1 uk-width-medium-1-3 center-content responsive-header-gutter">
			<a href="<?php echo home_url(); ?>"><img class="logo"
			                                         src="<?php echo get_template_directory_uri() ?>/images/logo.jpg"/></a>
		</div>

		<div class="mid-content center-content responsive-header-gutter">
			<h1 class="tagline"><span class="highlight">Adapting</span> to your environment</h1>
		</div>

		<div class="social-icons hidden-mobile responsive-header-gutter">
			<a href="https://www.facebook.com/chameleonwebsolutions15" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="https://www.twitter.com/chameleonwebs15" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/in/sean-duff-8a238388?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		</div>
		<div class="clearfix"></div>


	</header><!-- /site-header --> 
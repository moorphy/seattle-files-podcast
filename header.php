<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1">

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->    

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
    
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header>
	<a href="http://theseattlefiles.com"> <img src="http://build.theseattlefiles.com/wp-content/uploads/2015/09/seattlefilesheader.jpg" alt="header img" /></a>
		
</header>
	<div id="mobileheader">
	<a href="http://theseattlefiles.com"> <img src="http://build.theseattlefiles.com/wp-content/uploads/2015/09/Seattle_Chris_profile_one.jpg" alt="mobile header img" /></a>
	</div>

	
<div id="wrapper">


<!-- START NAVIGATION -->
<nav>
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 
		) ); ?>
   
</nav>
	 <hr class="mainnav" />
	
<!-- END NAVIGATION -->

	
	
<!-- START MIDDLE -->
<div id="middle">
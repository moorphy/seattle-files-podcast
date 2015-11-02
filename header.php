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
	
	<!-- Begin Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- End Scripts -->
	
    
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header>
	<a href="http://theseattlefiles.com"> <img src="http://theseattlefiles.com/wp-content/uploads/2015/10/seattlefilesheader.jpg" alt="header img" /></a>
		
</header>

	
<div id="wrapper">


<!-- START NAVIGATION -->
<nav>
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'menu_class' => 'dropdown', //Adding the class for dropdowns
    		'container_id' => 'cssmenu', //Add CSS ID to the containter that wraps the menu.
    		'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
		) ); ?>
   
</nav>
	 <hr class="mainnav" />
	
<!-- END NAVIGATION -->
	<div id="mobileheader">
	<a href="http://theseattlefiles.com"> <img src="http://build.theseattlefiles.com/wp-content/uploads/2015/09/Seattle_Chris_profile_one.jpg" alt="mobile header img" /></a>
	</div>
	
	
<!-- START MIDDLE -->
<div id="middle">
<!doctype html>

<html <?php language_attributes();?>>
	<head>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width" />
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'grid' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<header>
			  <hgroup>
                <h1><a href=" <?php echo home_url(); ?> "><?php bloginfo( 'name' ); ?></a></h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
            </hgroup>
			<button class='toggleNav'>Navigation</button>
			<nav role="navigation" class="site-navigation main-navigation clearfix">	
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
			</nav><!-- .site-navigation .main-navigation -->
		</header>
	
	<div role ="main">

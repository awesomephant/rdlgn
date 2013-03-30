<?php
/**
 * grid functions and definitions
 *
 * @package grid
 * @since grid 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since grid 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'grid_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since grid 1.0
 */
function grid_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on grid, use a find and replace
	 * to change 'grid' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'grid', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	
	/*
	
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'grid' ),
		'secondary' => __( 'Secondary Menu Menu', 'grid' ),
	) );
}
endif; // grid_setup
add_action( 'after_setup_theme', 'grid_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since grid 1.0
 */
function grid_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'grid' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'grid_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function grid_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'grid_scripts' );

add_theme_support( 'post-thumbnails' );
 
function new_excerpt_more($more) {
       global $post;
	return ' <a class="read-more" href="'. get_permalink($post->ID) . '">alles lesen</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
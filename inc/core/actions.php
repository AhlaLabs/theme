<?php
/**
 * Core Actions Callbacks
 *
 * @package AhlaNews
 */


if ( !defined( 'ABSPATH' ) ) exit;


/**
 * When all theme files Loaded action callback
 *
 */
function ahla_loaded()
{
	do_action('ahla_loaded');
}


/**
 * Theme setup action callback
 *
 */
function ahla_setup_theme()
{
	// add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	// let WordPress manage the document title.
	// by adding theme support, we declare that this theme does not use a
	// hard-coded <title> tag in the document head, and expect WordPress to
	// provide it for us.
	add_theme_support( 'title-tag' );
	// enable support for Post Thumbnails on posts and pages.
	// @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	add_theme_support( 'post-thumbnails' );
	// add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	// custom logo
	add_theme_support( 'custom-logo' );
	// switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'html5' , array(
		'search-form' ,
		'comment-form',
		'comment-list',
		'gallery'	  ,
		'caption'	  ,
	) );
	// set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => ''	   ,
	) );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'ahla' ),
	) );

	do_action('ahla_setup_theme');
}


/**
 * Register sidebars & footerbar action callback
 *
 */
function ahla_widgets_init()
{
	$defaults = apply_filters( 'ahla_sidebar_args_defaults' , array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'by_ahla'		=> true
	) );

	$args = wp_parse_args( array(
		'id'  	=> 'sidebar',
		'name'  => esc_html__( 'Sidebar %d', 'ahla' )
	) , $defaults );

	register_sidebars( 2 , $args );

	$args = wp_parse_args( array(
		'id'  	=> 'footerbar',
		'name'  => esc_html__( 'Footerbar %d', 'ahla' )
	) , $defaults );

	register_sidebars( 1 , $args );

	do_action('ahla_widgets_init' , $defaults );
}


/**
 * Register assets action callback
 *
 */
function ahla_register_assets()
{
	$assets   = AHLAURL . '/assets';
	$ver  	  = AHLAVER;

	// theme style.css
	wp_register_style( 'theme-style'  , get_stylesheet_uri() );

	// others
	$file = $assets.'/js/skip-link-focus-fix.js';
	wp_register_script( 'skip-link-focus-fix', $file, array(), $ver, true );

	do_action('ahla_register_assets');
}



/**
 * Enqueue assets action callback
 *
 */
function ahla_enqueue_assets()
{
	// CSS
	wp_enqueue_style( 'theme-style');

	// JS
	wp_enqueue_script( 'skip-link-focus-fix');

	// comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	do_action( 'ahla_enqueue_assets' );
}

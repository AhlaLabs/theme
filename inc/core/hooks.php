<?php
/**
 * Attch Hooks ( Actions & Filters ) to WP
 *
 * @package AhlaNews
 */


if ( !defined( 'ABSPATH' ) ) exit;


add_action( 'after_setup_theme'	, 'ahla_loaded' 		    , 0  );
add_action( 'after_setup_theme'	, 'ahla_setup_theme'    , 10 );
add_action( 'widgets_init'		  , 'ahla_widgets_init'   , 10 );
add_action( 'init'				      , 'ahla_register_assets', 99 );
add_action( 'wp_enqueue_scripts', 'ahla_enqueue_assets' , 10 );

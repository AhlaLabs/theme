<?php
/**
 * Define some genral data
 *
 * @package AhlaNews
 */


if ( !defined( 'ABSPATH' ) ) exit;


define( 'AHLAVER' , '1.0.0' );
define( 'AHLADIR' , get_template_directory() );
define( 'AHLAURL' , get_template_directory_uri() );


// load theme localization now before load files
load_theme_textdomain( 'ahla' , AHLADIR.'/languages' );

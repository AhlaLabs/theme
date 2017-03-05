<?php
/**
 * _s inc Loader
 *
 * @package AhlaNews
 */


if ( !defined( 'ABSPATH' ) ) exit;


function _ahla__s_loader()
{
// This file path
$fpath = realpath( dirname( __FILE__ ) );

/**
 * Implement the Custom Header feature.
 */
require $fpath . '/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require $fpath . '/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require $fpath . '/extras.php';

/**
 * Customizer additions.
 */
require $fpath . '/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require $fpath . '/jetpack.php';
}

// Load files
_ahla__s_loader();

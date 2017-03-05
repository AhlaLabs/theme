<?php
/**
 * AhlaNews functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AhlaNews
 */

require_once get_template_directory() . '/inc/core/autoload.php';
require_once get_template_directory() . '/inc/_s/autoload.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ahla_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ahla_content_width', 640 );
}
add_action( 'after_setup_theme', 'ahla_content_width', 0 );

<?php
/**
 * AhlaNews Theme Customizer
 *
 * @package AhlaNews
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ahla_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'ahla_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ahla_customize_preview_js() {
	$assets   = AHLAURL . '/assets';
	$ver  	  = AHLAVER;
	wp_enqueue_script( 'ahla_customizer', $assets . '/js/customizer.js', array( 'customize-preview' ), $ver , true );
}
add_action( 'customize_preview_init', 'ahla_customize_preview_js' );

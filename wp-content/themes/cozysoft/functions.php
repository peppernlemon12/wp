<?php
/**
 * Theme functions and definitions
 *
 * @package CozySoft
 */

/**
 * After setup theme hook
 */
function cozysoft_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'cozysoft' );	
}
add_action( 'after_setup_theme', 'cozysoft_theme_setup' );

/**
 * Load assets.
 */

function cozysoft_theme_css() {
	wp_enqueue_style( 'cozysoft-parent-theme-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'cozysoft_theme_css', 99);

require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';

/**
 * Custom Header 
 */
function cozysoft_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'softme_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '121212',
		'width'                  => 1920,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'softme_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'cozysoft_custom_header_setup' );

/**
 * Import Options From Parent Theme
 *
 */
function cozysoft_parent_theme_options() {
	$softme_mods = get_option( 'theme_mods_softme' );
	if ( ! empty( $softme_mods ) ) {
		foreach ( $softme_mods as $softme_mod_k => $softme_mod_v ) {
			set_theme_mod( $softme_mod_k, $softme_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'cozysoft_parent_theme_options' );
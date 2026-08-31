<?php
/**
 * NDsoftheme functions
 *
 * @package NDsoftheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme stylesheet.
 */
function ndsoftheme_enqueue_styles() {
	wp_enqueue_style(
		'ndsoftheme-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'ndsoftheme_enqueue_styles' );
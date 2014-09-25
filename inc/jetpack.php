<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Tim Rodgers Design
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function tim_rodgers_design_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'tim_rodgers_design_jetpack_setup' );

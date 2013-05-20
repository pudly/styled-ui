<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package StyledUI
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function styledui_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'styledui_infinite_scroll_setup' );

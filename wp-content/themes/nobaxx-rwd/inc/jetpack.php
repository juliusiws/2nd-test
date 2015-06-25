<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package nobaxx-rwd
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function nobaxx_rwd_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'nobaxx_rwd_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function nobaxx_rwd_jetpack_setup
add_action( 'after_setup_theme', 'nobaxx_rwd_jetpack_setup' );

function nobaxx_rwd_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function nobaxx_rwd_infinite_scroll_render
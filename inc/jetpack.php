<?php
/**
 * Jetpack Compatibility File
 * @link http://jetpack.me/
 *
 * @package Sassy Starter
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function sassy_starter_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sassy_starter_infitine_scroll_render',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'sassy_starter_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function sassy_starter_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sassy_starter_infinite_scroll_render

<?php
/**
 * Plugin Name: Hide For Guests (CI)
 * Description: Prefix the post title for non-logged-in users.
 * Author: CI
 * @package hide_for_guests
 */

if ( ! function_exists( 'hfg_filter_the_title' ) ) {
	/**
	 * Prefix title for guests.
	 *
	 * @param string $title Post title.
	 * @return string
	 */
	function hfg_filter_the_title( $title ) {
		if ( ! \is_user_logged_in() ) {
			return '[guest] ' . $title;
		}
		return $title;
	}
}

\add_filter( 'the_title', 'hfg_filter_the_title', 10, 1 );

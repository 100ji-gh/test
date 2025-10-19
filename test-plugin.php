<?php
/**
 * Plugin Name: Hide For Guests (CI)
 * Description: Sample filter to demonstrate CI with WordPress.
 * Author: CI
 * @package hide_for_guests
 */

\add_filter(
	'the_title',
	static function ( string $title ): string {
		if ( ! \is_user_logged_in() ) {
			return '[guest] ' . $title;
		}

		return $title;
	},
	10,
	1
);

<?php
/**
 * Plugin Name: Hide For Guests (CI)
 * Description: Prefixes post titles for guests exactly once.
 * Author: CI
 * @package hide_for_guests
 */

\add_filter(
	'the_title',
	static function ( string $title ): string {
		// ログイン済みなら何もしない
		if ( \is_user_logged_in() ) {
			return $title;
		}

		// 先頭の "[guest]"（あっても）を一旦取り除く
		$title = \preg_replace( '/^\[guest\]\s*/i', '', $title );

		// 1回だけ付与
		return '[guest] ' . $title;
	},
	10,
	1
);

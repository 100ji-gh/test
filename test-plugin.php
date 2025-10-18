<?php
/**
 * Plugin Name: Test Plugin — Hide For Guests
 * Description: 非ログイン時はコンテンツを非表示にし、ログイン時のみ本文を表示します。
 * Version: 0.1.0
 */

/**
 * 非ログイン時は置換メッセージを返す、ログイン時はそのまま返す。
 *
 * @param string $content 本文。
 * @return string
 */
function tpg_hide_for_guests_filter( $content ) {
	if ( function_exists( 'is_user_logged_in' ) && is_user_logged_in() ) {
		return $content;
	}
	return '<div class="notice">Please log in to view this content.</div>';
}
add_filter( 'the_content', 'tpg_hide_for_guests_filter', 5 );

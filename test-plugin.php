<?php
/**
 * Plugin Name: Hide For Guests (CI)
 * Description: Prefixes post titles for guests exactly once.
 * Author: CI
 * @package hide_for_guests
 */

\add_filter(
    'the_title',
    static function ( $title ) {
        // ログイン時は万一付いていたら外す
        if ( \is_user_logged_in() ) {
            return \preg_replace( '/^\[guest\]\s*/i', '', $title );
        }
        // ゲスト時：既に [guest] が付いていればそのまま、無ければ一度だけ付与
        if ( \preg_match( '/^\[guest\]\s*/i', $title ) ) {
            return $title;
        }
        return '[guest] ' . $title;
    },
    10,
    1
);

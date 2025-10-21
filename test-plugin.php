<?php
/**
 * Plugin Name: Hide For Guests (CI)
 * Description: (buggy) always prefixes for guests even if already prefixed.
 * Author: CI
 * @package hide_for_guests
 */

\add_filter(
    'the_title',
    static function ( $title ) {
        if ( \is_user_logged_in() ) {
            return $title;
        }
        // BUG: 既に [guest] が付いていても、さらに付けてしまう
        return '[guest] ' . $title;
    },
    10,
    1
);

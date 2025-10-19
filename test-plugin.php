<?php
declare(strict_types=1);

/**
 * Plugin Name: Hide For Guests (CI)
 * Description: Sample filter to demonstrate CI with WordPress.
 * Author: CI
 */

\add_filter('the_title', static function (string $title): string {
    // 未ログインのゲストにはタイトルにタグを付けるサンプル
    if (!\is_user_logged_in()) {
        return '[guest] ' . $title;
    }
    return $title;
}, 10, 1);

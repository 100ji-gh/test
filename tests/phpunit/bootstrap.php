<?php
/**
 * PHPUnit bootstrap for Hide For Guests.
 *
 * 1) Load WordPress test suite (wp-phpunit).
 * 2) Then load the plugin under test.
 *
 * @package hide_for_guests
 */

$tests_dir = getenv('WP_PHPUNIT__DIR');
if (! $tests_dir || ! file_exists($tests_dir . '/includes/bootstrap.php')) {
    fwrite(STDERR, "WP_PHPUNIT__DIR is not set or invalid: {$tests_dir}\n");
    exit(1);
}

// 1) Load WordPress + test framework.
require_once $tests_dir . '/includes/bootstrap.php';

// 2) Load the plugin (so WP functions like add_filter() are available).
$plugin = dirname(__DIR__, 2) . '/test-plugin.php';
if (file_exists($plugin)) {
    require_once $plugin;
} else {
    fwrite(STDERR, "Plugin not found: {$plugin}\n");
    exit(1);
}

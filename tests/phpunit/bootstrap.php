<?php
/**
 * PHPUnit bootstrap for Hide For Guests.
 *
 * Loads the plugin after WordPress test suite is bootstrapped by wp-phpunit.
 *
 * @package hide_for_guests
 */

$plugin = dirname( __DIR__, 2 ) . '/test-plugin.php';
if ( file_exists( $plugin ) ) {
	require_once $plugin;
}

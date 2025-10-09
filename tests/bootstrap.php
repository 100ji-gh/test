<?php
/**
 * WordPress のテスト環境を起動し、プラグインを読み込む。
 */

$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = getenv( 'WP_PHPUNIT__DIR' );
	if ( ! $_tests_dir ) {
		$_tests_dir = dirname( __DIR__ ) . '/vendor/wp-phpunit/wp-phpunit';
	}
}

require $_tests_dir . '/includes/functions.php';

tests_add_filter(
	'muplugins_loaded',
	function () {
		$plugin_main = dirname( __DIR__ ) . '/test-plugin.php';
		if ( file_exists( $plugin_main ) ) {
			require $plugin_main;
		}
	}
);

require $_tests_dir . '/includes/bootstrap.php';

<?php
$project_root   = __DIR__;
$wordpress_path = $project_root . '/wordpress/';

if ( ! file_exists( $wordpress_path . 'wp-settings.php' ) ) {
	fwrite( STDERR, "WordPress installation not found at {$wordpress_path}\n" );
	exit( 1 );
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', $wordpress_path );
}

if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
}

if ( ! defined( 'WP_TESTS_DOMAIN' ) ) {
	define( 'WP_TESTS_DOMAIN', 'example.org' );
}

if ( ! defined( 'WP_TESTS_EMAIL' ) ) {
	define( 'WP_TESTS_EMAIL', 'admin@example.org' );
}

if ( ! defined( 'WP_TESTS_TITLE' ) ) {
	define( 'WP_TESTS_TITLE', 'Test Site' );
}

if ( ! defined( 'WP_PHP_BINARY' ) ) {
	define( 'WP_PHP_BINARY', 'php' );
}

if ( ! defined( 'DB_DIR' ) ) {
	define( 'DB_DIR', $project_root . '/tmp/' );
}

if ( ! defined( 'DB_FILE' ) ) {
	define( 'DB_FILE', 'wptests.sqlite' );
}

define( 'DB_NAME', 'wptests' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

$table_prefix = 'wptests_';

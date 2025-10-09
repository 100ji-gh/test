<?php
// phpcs:disable WordPress.WP.CapitalPDangit

$env_db_name = getenv( 'WP_DB_NAME' ) ?: 'wordpress_test';
$env_db_user = getenv( 'WP_DB_USER' ) ?: 'wp';
$env_db_pass = getenv( 'WP_DB_PASS' ) ?: 'wp';
$env_db_host = getenv( 'WP_DB_HOST' ) ?: '127.0.0.1';

if ( ! defined( 'DB_NAME' ) ) {
	define( 'DB_NAME', $env_db_name );
}
if ( ! defined( 'DB_USER' ) ) {
	define( 'DB_USER', $env_db_user );
}
if ( ! defined( 'DB_PASSWORD' ) ) {
	define( 'DB_PASSWORD', $env_db_pass );
}
if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', $env_db_host );
}
if ( ! defined( 'DB_CHARSET' ) ) {
	define( 'DB_CHARSET', 'utf8' );
}
if ( ! defined( 'DB_COLLATE' ) ) {
	define( 'DB_COLLATE', '' );
}

// PHPCS対応：この1行だけはWPの「グローバル上書き」警告を抑制
$table_prefix = 'wptests_'; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

// ★ WordPress本体の場所（CIで展開する先）を指す
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/vendor/wp-phpunit/wp-phpunit/wordpress/' );
}

// WPテスト基盤が要求する定数
if ( ! defined( 'WP_TESTS_DOMAIN' ) ) {
	define( 'WP_TESTS_DOMAIN', 'example.org' );
}
if ( ! defined( 'WP_TESTS_EMAIL' ) ) {
	define( 'WP_TESTS_EMAIL', 'admin@example.org' );
}
if ( ! defined( 'WP_TESTS_TITLE' ) ) {
	define( 'WP_TESTS_TITLE', 'Test Blog' );
}
if ( ! defined( 'WP_PHP_BINARY' ) ) {
	define( 'WP_PHP_BINARY', 'php' );
}

// phpcs:enable WordPress.WP.CapitalPDangit

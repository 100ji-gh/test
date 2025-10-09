<?php
// phpcs:disable WordPress.WP.CapitalPDangit

$env_db_name_raw = getenv( 'WP_DB_NAME' );
$env_db_name     = $env_db_name_raw ? $env_db_name_raw : 'wordpress_test';

$env_db_user_raw = getenv( 'WP_DB_USER' );
$env_db_user     = $env_db_user_raw ? $env_db_user_raw : 'wp';

$env_db_pass_raw = getenv( 'WP_DB_PASS' );
$env_db_pass     = $env_db_pass_raw ? $env_db_pass_raw : 'wp';

$env_db_host_raw = getenv( 'WP_DB_HOST' );
$env_db_host     = $env_db_host_raw ? $env_db_host_raw : '127.0.0.1';

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

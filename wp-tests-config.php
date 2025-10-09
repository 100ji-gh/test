<?php
// phpcs:disable WordPress.WP.CapitalPDangit  ← このファイルでは“WordPress”綴り警告を無効化

$env_db_name = getenv( 'WP_DB_NAME' );
$env_db_user = getenv( 'WP_DB_USER' );
$env_db_pass = getenv( 'WP_DB_PASS' );
$env_db_host = getenv( 'WP_DB_HOST' );

define( 'DB_NAME', 'wordpress_test' );
if ( $env_db_name ) {
	define( 'DB_NAME', $env_db_name );
}

define( 'DB_USER', 'wp' );
if ( $env_db_user ) {
	define( 'DB_USER', $env_db_user );
}

define( 'DB_PASSWORD', 'wp' );
if ( $env_db_pass ) {
	define( 'DB_PASSWORD', $env_db_pass );
}

define( 'DB_HOST', '127.0.0.1' );
if ( $env_db_host ) {
	define( 'DB_HOST', $env_db_host );
}

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// テストでは接頭辞が必要（この1行はPHPCS対象外）
$table_prefix = 'wptests_'; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

define( 'WP_DEBUG', true );

// WordPress 本体パス（wp-phpunitが展開したもの）
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/vendor/wp-phpunit/wp-phpunit/wordpress/' );
}

// テスト基盤が要求する定数
define( 'WP_TESTS_DOMAIN', 'example.org' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'Test Blog' );
define( 'WP_PHP_BINARY', 'php' );

// phpcs:enable WordPress.WP.CapitalPDangit

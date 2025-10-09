<?php
// 環境変数を一度取り出す（短縮三項 ?: を使わない）
$env_db_name = getenv( 'WP_DB_NAME' );
$env_db_user = getenv( 'WP_DB_USER' );
$env_db_pass = getenv( 'WP_DB_PASS' );
$env_db_host = getenv( 'WP_DB_HOST' );

define( 'DB_NAME', $env_db_name ? $env_db_name : 'wordpress_test' );
define( 'DB_USER', $env_db_user ? $env_db_user : 'wp' );
define( 'DB_PASSWORD', $env_db_pass ? $env_db_pass : 'wp' );
define( 'DB_HOST', $env_db_host ? $env_db_host : '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// PHPCS 例外：テスト環境では $table_prefix を定義する必要がある。
$table_prefix = 'wptests_'; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

define( 'WP_DEBUG', true );
// WordPress 本体（wp-phpunit が展開した wordpress ディレクトリ）への絶対パス。
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/vendor/wp-phpunit/wp-phpunit/wordpress/' );
}

define( 'WP_TESTS_DOMAIN', 'example.org' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'Test Blog' );
define( 'WP_PHP_BINARY', 'php' );

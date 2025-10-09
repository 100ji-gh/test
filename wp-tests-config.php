<?php
// phpcs:disable WordPress.WP.CapitalPDangit

$env_db_name = getenv( 'WP_DB_NAME' ) ?: 'wordpress_test';
$env_db_user = getenv( 'WP_DB_USER' ) ?: 'wp';
$env_db_pass = getenv( 'WP_DB_PASS' ) ?: 'wp';
$env_db_host = getenv( 'WP_DB_HOST' ) ?: '127.0.0.1';

define( 'DB_NAME',     $env_db_name );
define( 'DB_USER',     $env_db_user );
define( 'DB_PASSWORD', $env_db_pass );
define( 'DB_HOST',     $env_db_host );
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  '' );

// PHPCS 対応：この1行だけは WP 規約の「グローバル上書き」警告を抑制
$table_prefix = 'wptests_'; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

define( 'WP_DEBUG', true );

// WP テスト基盤が要求する定数
define( 'WP_TESTS_DOMAIN', 'example.org' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'Test Blog' );
define( 'WP_PHP_BINARY', 'php' );

// phpcs:enable WordPress.WP.CapitalPDangit

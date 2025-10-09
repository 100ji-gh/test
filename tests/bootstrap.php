<?php
/**
 * WordPress のテスト環境を起動し、サンプルプラグインを読み込む。
 */

// 1) テスト基盤の場所を決定（環境変数が無ければ vendor の既定を使う）
$tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $tests_dir ) {
	$tests_dir = dirname( __DIR__ ) . '/vendor/wp-phpunit/wp-phpunit';
}

// 2) 定数を定義（テスト設定ファイルの場所）
$config_path = getenv( 'WP_PHPUNIT__TESTS_CONFIG' );
if ( ! $config_path ) {
	$config_path = dirname( __DIR__ ) . '/wp-tests-config.php';
}
if ( ! defined( 'WP_PHPUNIT__TESTS_CONFIG' ) ) {
	define( 'WP_PHPUNIT__TESTS_CONFIG', $config_path );
}

// 3) wp-phpunit 本体ディレクトリ定数
if ( ! defined( 'WP_PHPUNIT__DIR' ) ) {
	define( 'WP_PHPUNIT__DIR', $tests_dir );
}

// ★ 4) ここが今回の要点：WordPress ルートを先に定義（install.php が必要とする）
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', WP_PHPUNIT__DIR . '/wordpress/' );
}

// 5) テスト用ヘルパを読み込み、プラグインを事前ロード
require_once WP_PHPUNIT__DIR . '/includes/functions.php';

tests_add_filter(
	'muplugins_loaded',
	function () {
		$plugin_main = dirname( __DIR__ ) . '/test-plugin.php';
		if ( file_exists( $plugin_main ) ) {
			require $plugin_main;
		}
	}
);

// 6) WordPress テストブート（ここで DB 準備やインストール処理が走る）
require WP_PHPUNIT__DIR . '/includes/bootstrap.php';

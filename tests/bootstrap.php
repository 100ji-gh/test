<?php
/**
 * テストブートストラップ。
 * WP のテストランタイムを読み込み、対象プラグインを muplugins_loaded で読ませます。
 */

$_tests_dir = getenv( 'WP_PHPUNIT__DIR' );
if ( ! $_tests_dir ) {
	// CI では環境変数で渡されますが、ローカル実行の保険。
	$_tests_dir = __DIR__ . '/../../vendor/wp-phpunit/wp-phpunit';
}

require $_tests_dir . '/includes/functions.php';

tests_add_filter(
	'muplugins_loaded',
	function () {
		// ルートのプラグイン本体を読み込む。
		require dirname( __DIR__, 2 ) . '/test-plugin.php';
	}
);

require $_tests_dir . '/includes/bootstrap.php';

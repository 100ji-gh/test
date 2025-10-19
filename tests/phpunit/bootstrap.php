<?php
// WP PHPUnit のブートストラップ
$_tests_dir = getenv('WP_PHPUNIT__DIR');
if (! $_tests_dir || ! file_exists($_tests_dir . '/includes/bootstrap.php')) {
	fwrite(STDERR, "WP_PHPUNIT__DIR invalid\n");
	exit(1);
}

require $_tests_dir . '/includes/functions.php';

// テスト対象プラグインを読み込む
tests_add_filter('muplugins_loaded', static function () {
	// リポジトリ直下の test-plugin.php を読み込む
	require_once dirname(__DIR__, 2) . '/test-plugin.php';
});

// WordPress のテスト環境を起動
require $_tests_dir . '/includes/bootstrap.php';

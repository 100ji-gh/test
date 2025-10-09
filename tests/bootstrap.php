<?php
/**
 * WordPressのテスト環境を起動し、サンプルプラグインを読み込む
 */
$tests_dir = getenv('WP_TESTS_DIR');
if (!$tests_dir) {
  $tests_dir = dirname(__DIR__) . '/vendor/wp-phpunit/wp-phpunit';
}

$config_path = getenv('WP_PHPUNIT__TESTS_CONFIG') ?: dirname(__DIR__) . '/wp-tests-config.php';
define('WP_PHPUNIT__TESTS_CONFIG', $config_path);

// プラグイン読み込み（ここを "test-plugin.php" に変更）
require $tests_dir . '/includes/functions.php';
tests_add_filter('muplugins_loaded', function () {
  $plugin_main = dirname(__DIR__) . '/test-plugin.php';
  if (file_exists($plugin_main)) {
    require $plugin_main;
  }
});

// WP起動
require $tests_dir . '/includes/bootstrap.php';

<?php
define('DB_NAME',     getenv('WP_DB_NAME') ?: 'wordpress_test');
define('DB_USER',     getenv('WP_DB_USER') ?: 'wp');
define('DB_PASSWORD', getenv('WP_DB_PASS') ?: 'wp');
define('DB_HOST',     getenv('WP_DB_HOST') ?: '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wptests_';
define('WP_DEBUG', true);

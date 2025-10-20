<?php
declare(strict_types=1);

/**
 * Minimal WP function stubs for static analysis ONLY.
 * These are NOT loaded at runtime; PHPStan reads them via stubFiles.
 */

function add_filter(string $hook, callable $callback, int $priority = 10, int $accepted_args = 1): void {}

function is_user_logged_in(): bool { return false; }

/**
 * Keep signature flexible while satisfying PHPStan.
 */
function apply_filters(string $hook, mixed $value): mixed { return $value; }

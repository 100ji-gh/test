<?php
declare(strict_types=1);

/**
 * Minimal WordPress stubs for PHPStan ONLY.
 * Loaded via phpstan.neon stubFiles. Not used at runtime.
 */

/** Register a callback for a filter hook. */
function add_filter(string $hook, callable $callback, int $priority = 10, int $accepted_args = 1): void {}

/** True if a user is logged in. */
function is_user_logged_in(): bool { return false; }

/**
 * Apply filters.
 * @template T
 * @param string $hook
 * @param T $value
 * @return T
 */
function apply_filters(string $hook, mixed $value): mixed { return $value; }

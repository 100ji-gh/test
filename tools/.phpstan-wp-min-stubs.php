<?php
/**
 * Minimal stubs for WP globals/functions used by the plugin.
 * Only for static analysis; never loaded at runtime.
 */

/** @param callable $callback */
function add_filter( string $hook, $callback, int $priority = 10, int $accepted_args = 1 ): void {}

function is_user_logged_in(): bool { return true; }

/** @param mixed $value */
function apply_filters( string $hook, $value ) { return $value; }

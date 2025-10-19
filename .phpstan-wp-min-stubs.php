<?php
// Minimal WordPress function stubs for PHPStan (runtime not used).
if ( ! function_exists( 'add_filter' ) ) {
	function add_filter( string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1 ): bool {}
}
if ( ! function_exists( 'add_action' ) ) {
	function add_action( string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1 ): bool {}
}
if ( ! function_exists( 'apply_filters' ) ) {
	/** @param mixed $value @param mixed ...$args @return mixed */
	function apply_filters( string $hook_name, mixed $value, mixed ...$args ): mixed { return $value; }
}
if ( ! function_exists( 'is_user_logged_in' ) ) {
	function is_user_logged_in(): bool {}
}

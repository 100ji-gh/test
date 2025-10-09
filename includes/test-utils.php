<?php
if ( ! function_exists( 'ts_normalize_bool' ) ) {
	/**
	 * いろいろな真偽表現を boolean に正規化する。
	 *
	 * @param mixed $v 入力値。
	 * @return bool
	 */
	function ts_normalize_bool( $v ) {
		if ( is_bool( $v ) ) {
			return $v;
		}

		$s = strtolower( trim( (string) $v ) );

		// 配列は WordPress 規約に合わせて array() を使用。
		return in_array( $s, array( '1', 'true', 'yes', 'on' ), true );
	}
}

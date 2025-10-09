<?php
class ThemeSwitchTest extends WP_UnitTestCase {
	public function test_switch_existing_theme() {
		$themes = array_keys( wp_get_themes() );
		$target = in_array( 'twentytwentyfour', $themes, true )
			? 'twentytwentyfour'
			: ( in_array( 'twentytwentyfive', $themes, true ) ? 'twentytwentyfive' : ( $themes[0] ?? '' ) );

		$this->assertNotEmpty( $target, 'No themes available in this WordPress build.' );

		switch_theme( $target );
		$this->assertSame( $target, get_stylesheet() );
	}
}

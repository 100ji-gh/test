<?php
/**
 * @group hide_for_guests
 */
class Hide_For_Guests_Test extends WP_UnitTestCase {

	public function test_guests_get_replacement() {
		// 未ログインにする。
		wp_set_current_user( 0 );

		$out = apply_filters( 'the_content', 'SECRET' );

		$this->assertIsString( $out );
		$this->assertStringContainsString( 'Please log in', $out );
		$this->assertStringNotContainsString( 'SECRET', $out );
	}

	public function test_logged_in_sees_content() {
		$user_id = self::factory()->user->create();
		wp_set_current_user( $user_id );

		$out = apply_filters( 'the_content', 'SECRET' );

		$this->assertSame( 'SECRET', $out );
	}
}

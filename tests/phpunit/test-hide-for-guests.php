<?php
/**
 * Tests for Hide For Guests.
 *
 * @package hide_for_guests
 */

class Hide_For_Guests_Test extends WP_UnitTestCase {

	public function setUp(): void {
		parent::setUp();
		// 明示的にログアウト状態から開始。
		wp_set_current_user( 0 );
	}

	public function test_guest_title_is_prefixed() {
		$title   = 'Hello';
		$filtered = apply_filters( 'the_title', $title );
		$this->assertSame( '[guest] ' . $title, $filtered );
	}

	public function test_logged_in_title_is_not_prefixed() {
		$user_id = self::factory()->user->create( array( 'role' => 'subscriber' ) );
		wp_set_current_user( $user_id );
		$title    = 'Hello';
		$filtered = apply_filters( 'the_title', $title );
		$this->assertSame( $title, $filtered );
	}
}

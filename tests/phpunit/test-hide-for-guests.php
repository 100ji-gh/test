<?php
declare(strict_types=1);

/**
 * @group hide-for-guests
 */
class HideForGuestsTest extends WP_UnitTestCase {

    public function test_title_prefixed_for_guests(): void {
        // 未ログイン（ゲスト）の想定
        wp_set_current_user(0);
        $out = apply_filters('the_title', 'Hello');
        $this->assertSame('[guest] Hello', $out);
    }

    public function test_title_unchanged_for_logged_in_users(): void {
        $user_id = self::factory()->user->create();
        wp_set_current_user($user_id);
        $out = apply_filters('the_title', 'Hello');
        $this->assertSame('Hello', $out);
    }
}

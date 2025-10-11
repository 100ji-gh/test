<?php
/**
 * Tests for the hide_for_guests shortcode.
 */
class ShortcodeHideForGuestsTest extends WP_UnitTestCase {
        /**
         * Ensure guests receive an empty string.
         */
        public function test_guest_sees_empty_string() {
                wp_set_current_user( 0 );

                $content = do_shortcode( '[hide_for_guests]Hidden Content[/hide_for_guests]' );

                $this->assertSame( '', $content );
        }

        /**
         * Ensure logged-in users can see the content.
         */
        public function test_logged_in_user_sees_content() {
                $user_id = self::factory()->user->create();
                wp_set_current_user( $user_id );

                $content = do_shortcode( '[hide_for_guests]Visible Content[/hide_for_guests]' );

                $this->assertSame( 'Visible Content', $content );
        }

        /**
         * Nested shortcodes should be expanded.
         */
        public function test_nested_shortcodes_are_processed() {
                add_shortcode(
                        'hide_for_guests_nested_fixture',
                        static function () {
                                return 'Nested Output';
                        }
                );

                $user_id = self::factory()->user->create();
                wp_set_current_user( $user_id );

                $content = do_shortcode( '[hide_for_guests][hide_for_guests_nested_fixture][/hide_for_guests]' );

                $this->assertSame( 'Nested Output', $content );

                remove_shortcode( 'hide_for_guests_nested_fixture' );
        }
}

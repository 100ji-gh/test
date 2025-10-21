<?php
/**
 * @group hfg
 */
class GuestIdempotentTest extends \WP_UnitTestCase {
    private function filter_title( $title ) {
        return apply_filters( 'the_title', $title );
    }

    public function test_guest_prefix_not_duplicated() {
        // ゲストで the_title を通しても [guest] が二重にならないこと
        $this->assertSame( '[guest] Hello', $this->filter_title( '[guest] Hello' ) );
    }
}

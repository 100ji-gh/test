<?php
class ThemeSwitchTest extends WP_UnitTestCase {
  public function test_switch_theme_to_twentytwentyfour() {
    switch_theme('twentytwentyfour'); // CI側にテーマがあればOK
    $this->assertSame('twentytwentyfour', get_stylesheet());
  }
}

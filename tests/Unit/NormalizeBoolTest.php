<?php
use PHPUnit\Framework\TestCase;
final class NormalizeBoolTest extends TestCase {
  public function test_true_values() {
    foreach (['1','true','YES',' on '] as $v) {
      $this->assertTrue(ts_normalize_bool($v));
    }
  }
  public function test_false_values() {
    foreach (['0','false','no','off',''] as $v) {
      $this->assertFalse(ts_normalize_bool($v));
    }
  }
}

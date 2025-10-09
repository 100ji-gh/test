<?php
if (!function_exists('ts_normalize_bool')) {
  function ts_normalize_bool($v) {
    if (is_bool($v)) return $v;
    $s = strtolower(trim((string)$v));
    return in_array($s, ['1','true','yes','on'], true);
  }
}

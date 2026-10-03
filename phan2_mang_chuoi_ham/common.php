<?php
function v($k, $d = '') { return htmlspecialchars($_POST[$k] ?? $d); }
function self() { return htmlspecialchars($_SERVER['PHP_SELF']); }
function so($k) { return isset($_POST[$k]) && is_numeric($_POST[$k]) ? (float)$_POST[$k] : null; }
// Tách chuỗi "1, 2, 3" thành mảng số (bỏ phần tử rỗng)
function tach_chuoi($s) {
    $r = [];
    foreach (explode(',', $s) as $p) { $p = trim($p); if ($p !== '' && is_numeric($p)) $r[] = $p + 0; }
    return $r;
}

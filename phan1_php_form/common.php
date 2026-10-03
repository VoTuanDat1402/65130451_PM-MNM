<?php
function v($k, $d = '') { return htmlspecialchars($_POST[$k] ?? $d); }
function self() { return htmlspecialchars($_SERVER['PHP_SELF']); }
function so($k) { return isset($_POST[$k]) && is_numeric($_POST[$k]) ? (float)$_POST[$k] : null; }

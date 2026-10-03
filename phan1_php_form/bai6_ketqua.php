<?php
function cong($a, $b) { return $a + $b; }
function tru($a, $b)  { return $a - $b; }
function nhan($a, $b) { return $a * $b; }
function chia($a, $b) { return $a / $b; }
$ten = ['cong' => 'Cộng', 'tru' => 'Trừ', 'nhan' => 'Nhân', 'chia' => 'Chia'];
$pt = $_POST['pt'] ?? 'cong'; $a = $_POST['a'] ?? 0; $b = $_POST['b'] ?? 0;
$kq = $pt($a, $b);
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Kết quả phép tính</title>
<style>
body{font-family:Tahoma;font-size:13px}
.c{width:480px;margin:30px auto;text-align:center}
h3{color:#336;font-weight:normal}
.l{color:#c0392b;font-weight:bold}
input.t{width:260px;text-align:right;color:#336}
</style></head><body><div class="c">
<h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
<span class="l">Chọn phép tính : <?= $ten[$pt] ?></span><br><br>
<span class="l">Số 1 :</span> <input class="t" type="text" value="<?= htmlspecialchars($a) ?>" readonly><br><br>
<span class="l">Số 2 :</span> <input class="t" type="text" value="<?= htmlspecialchars($b) ?>" readonly><br><br>
<span class="l">Kết quả :</span> <input class="t" type="text" value="<?= $kq ?>" readonly><br><br>
<a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
</div></body></html>
